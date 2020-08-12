@ECHO OFF
REM Installs Composer as portable

REM Set Home folder as Composer Global Configuration Folder
SET COMPOSER_HOME=%~dp0Home
if not exist %COMPOSER_HOME% md "%COMPOSER_HOME%"

REM If PHP Path Not Set Yet
set PATH=%PATH%;c:\xampp\php

REM Download Composer
php -r "readfile('https://getcomposer.org/installer');" | php

SET COMPOSER_BAT=%~dp0composer.bat
if not exist "%COMPOSER_BAT" (
 echo @ECHO OFF> "%COMPOSER_BAT%"
 echo SET COMPOSER_HOME=%%~dp0Home>> "%COMPOSER_BAT%"
 echo if not exist %%COMPOSER_HOME%% md "%%COMPOSER_HOME%%">> "%COMPOSER_BAT%"
 echo php "%%~dp0composer.phar" %%*>> "%COMPOSER_BAT%"
 echo EXIT /B %%ERRORLEVEL%%>> "%COMPOSER_BAT%"

)
call composer --version | findstr /i /r /c:"Composer......version"

REM Increases Composer Time-out
call composer --quiet config --global process-timeout 3000

REM Set Local folder for Composer Internal Cache
SET COMPOSER_LOCAL=%~dp0Local
if not exist %COMPOSER_LOCAL% md "%COMPOSER_LOCAL%"
call composer --quiet config --global cache-dir "%COMPOSER_LOCAL%"
pause
