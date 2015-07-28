<?php

# Open README file for descriptions and help.

$ftpHost = getenv('FTP_HOST');
$ftpPort = getenv('FTP_PORT');
$ftpUser = getenv('FTP_USER');
$ftpPass = getenv('FTP_PASS');

$ftpMode = "1";
$ftpSSL  = "1";
$ftpDir  = "~";
$editableExts = "asp,ashx,asmx,aspx,asx,axd,cfm,cgi,css,html,htm,jhtml,js,php,phtml,pl,txt,xhtml";
$serverTmp = "/tmp";
$dateFormatUsa = 0;
$lockOutTime = 5;
$versionCheck = 1;
