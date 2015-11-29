<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/transitional.dtd">
<html>
<head>
<title>websocket client: send/receive test</title>
<script type="text/javascript" src=".........../web-socket-js/swfobject.js"></script>
<script type="text/javascript" src=".........../web-socket-js/web_socket.js"></script>
<script type="text/javascript">
WEB_SOCKET_SWF_LOCATION = "............/web-socket-js/WebSocketMain.swf";
function log(msg) {
    var d = new Date();
    var hour = d.getHours();
    var min = d.getMinutes();
    var sec = d.getSeconds();
    var msec = d.getMilliseconds();
    var time = hour + ":" + min + ":" + sec + ":" + msec
    document.getElementById('foo').innerHTML += time + ": " + msg + "<br />";
    }
 
function ws_init(url) {
    log("connecting to " + url + "...")
    ws = new WebSocket(url);
    ws.onopen = function() {
        log("connection established.");
        };
    ws.onmessage = function(e) {
        log("message received: '" + e.data + "'");
        };
    ws.onclose = function() {
        log("connection closed.");
        };
    }
 
function ws_send(msg) {
    log("send: " + msg);
    ws.send(msg);
    }
 
function ws_close() {
    log("closing connection..");
    ws.close();
    }
</script>
</head>
<body>
<form name="input_form">
<table>
<tr>
    <td>host/resource:</td>
    <td><input type="text" name="host" size="50" value="ws://127.0.0.1:8889/badge"></td>
    <td><input type="button" value="connect" onclick="ws_init(document.input_form.host.value)"></td>
    <td><input type="button" value="disconnect" onclick="ws_close()"></td>
</tr>
<tr>
    <td>msg:</td>
    <td><input type="text" name="msg" size="50"></td>
    <td><input type="button" value="send" onclick="ws_send(document.input_form.msg.value)"></td>
</tr>
</table>
</form>
<div id="foo"> </div>
</body>
</html>