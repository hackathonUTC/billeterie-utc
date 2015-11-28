set absPath=%cd%

set sub1=\Server\VirtuosoServer
set VirtuosoServer=%absPath%%sub1%

START cmd.exe /k "cd %VirtuosoServer% & Launch.bat"
