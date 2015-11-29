'''
/* ************* Begin file api.py ***************************************/
/*
** 2015 November 28
**
** In place of a legal notice, here is a blessing:
**
**    May you do good and not evil.
**    May you find forgiveness for yourself and forgive others.
**    May you share freely, never taking more than you give.
**
*************************************************************************/

/**
*	\file api.py
*	\brief Bottle Server API File
*	\version 1.0
*	\author Jonathan DEKHTIAR - contact@jonathandekhtiar.eu - @born2data - http://www.jonathandekhtiar.eu
*/
'''

################################# Import Libraries ################################

from __future__ import print_function
from __future__ import unicode_literals

import os.path
from bottle import route, run, response, static_file, request, error, Bottle, template
import json

from smartcard.scard import *
import smartcard.util

from gevent import monkey; monkey.patch_all()
from ws4py.websocket import EchoWebSocket
from ws4py.server.geventserver import WSGIServer
from ws4py.server.wsgiutils import WebSocketWSGIApplication

import reader

__version__ = 1

nfc_reader = None
server = WSGIServer(('localhost', 8889), WebSocketWSGIApplication(handler_cls=EchoWebSocket))


#################################### WebService Route / #####################################
class API:
	def __init__(self, port, local):
		self._app = Bottle()
		self._route()
		
		self._local = local
		self._port = port
		
		if local:
			self._host = '127.0.0.1'
		else:
			self._host = '0.0.0.0'
		
		try:
			global nfc_reader
			nfc_reader = reader.Reader()
		except KeyboardInterrupt:
			print("^C received, shutting down server")
			server.socket.close()
			nfc_reader.release_context()
	
	def start(self):
		self._app.run(server='paste', host=self._host, port=self._port)
		
	def _route(self):
		self._app.hook('before_request')(self._strip_path)
		self._app.error(400)(self._error404)
		self._app.error(500)(self._error500)
		
		self._app.route('/badge', method="GET", callback=self._execute)
		self._app.route('/static/<filename:path>', callback=self._getStaticFile)
		
		self._app.route('/', callback=self._homepage)
	
	def _strip_path(self):
		request.environ['PATH_INFO'] = request.environ['PATH_INFO'].rstrip('/')
	
	def _error404(self):
		return static_file("404.html", root=os.getcwd()+'\\html')
		
	def _error500(self, error):
		return error
		
	def _getStaticFile(self, filename):
		extension = str.lower(os.path.splitext(filename)[1][1:].encode('ascii','ignore'))
		if  extension == 'jpeg'or extension == 'jpg':
			return static_file(filename, root=os.getcwd()+'\\static', mimetype='image/jpg')
		elif extension == 'png':
			return static_file(filename, root=os.getcwd()+'\\static', mimetype='image/png')
		elif extension == 'css':
			return static_file(filename, root=os.getcwd()+'\\static', mimetype='text/css')
		elif extension == 'js':
			return static_file(filename, root=os.getcwd()+'\\static', mimetype='text/javascript')  
	

	def _homepage(self):
		return static_file("index.html", root=os.getcwd()+'\\html')
		
	def _execute(self):
		
		return json.dumps({"badge_id": nfc_reader.read_badge()})
