	@REM @Author: Mark Support
@REM @Date:   2021
@REM @Last Modified by:   Mark Broñ
@REM Modified time: 2021
@echo off
set PATH=%PATH%;C:\xampp\php
title ( InboxSend )
:runsendinbox
php send.php
pause
cls
goto runsendinbox