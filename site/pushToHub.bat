@echo off
setlocal EnableDelayedExpansion

set /P revversion=<versionNo.txt

if "!revversion!"=="" (
    set /P revversion=1
) else (
    set /A revversion=revversion+1
)

echo building cloudconnect.scanrev.com:5000/monsteveler:1.0.%revversion%
echo %revversion% > versionNo.txt
docker build -t cloudconnect.scanrev.com:5000/monsteveler:1.0.%revversion% .

docker push cloudconnect.scanrev.com:5000/monsteveler:1.0.%revversion%

echo all done
pause 
