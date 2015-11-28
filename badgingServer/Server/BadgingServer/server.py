'''
/* ************* Begin file server.py ***************************************/
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
*	\file server.py
*	\brief Bottle Server Main File
*	\version 1.0
*	\author Jonathan DEKHTIAR - contact@jonathandekhtiar.eu - @born2data - http://www.jonathandekhtiar.eu
*/
'''


################################# Import Libraries ################################
import os.path
import sys

sys.path.append('../Config/')
dllsPath = os.path.dirname(os.path.realpath(__file__))+'\dlls'
os.environ['PATH'] = dllsPath + ';' + os.environ['PATH']
from loadConf import loadDBConf, loadAPIConf

import api



#######################################################################################
#######################################################################################
#######################################################################################
 

configDB = loadDBConf()
configAPI = loadAPIConf()

badgingServer = {'ip':configAPI['badgingServer']['ip'], 'port':configAPI['badgingServer']['port'], 'local':configAPI['badgingServer']['local']}

api = api.API(badgingServer['port'], badgingServer['local'])
api.start()