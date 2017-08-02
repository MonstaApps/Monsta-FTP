<?php

$ftpHost = "";
$ftpPort = "21";
$ftpMode = "1";
$ftpSSL  = "0";
$ftpDir  = "";
$serverTmp = "";
$editableExts = "asp,ashx,asmx,aspx,asx,axd,cfm,cgi,css,html,htm,jhtml,js,php,phtml,pl,txt,xhtml";
$sessionName = "";
$dateFormatUsa = 0;
$lockOutTime = 5;
$versionCheck = 1;
$showAdvOption = 1;
$showLockSess = 1;
$showHostInfo = 1;
$showAddons = 1;
$showDotFiles = 1;
$maxExecTime = 1800;
$maxFileSize = "1024M";

/*

$ftpHost
Enter the host address/port/mode if it should always be a fixed host 
address. Leave this blank if you want the user to input their host address.

$ftpPort
21 is the default

$ftpMode
1 for passive, 0 for not passive (passive is default)

$ftpSSL
1 for SSL, 0 for not SSL - your server must support ftp_ssl_connect()
 
$ftpDir
Enter an FTP server path for the default login (or leave blank for home)

$serverTmp
If left blank, this will be the server’s TMP folder (e.g. /tmp). If setting 
your own, make sure to CHMOD 777 the folder.

$editableExts
A list of file types that can be edited in the text editor

$sessionName
Set the session name, to isolate Monsta FTP from other PHP web apps that
may also use the same/default session name. Must be alphanumeric, and must 
contain at least one alpha character. A blank or invalid setting for 
$sessionName sets the session name to “monstaftp”.

$dateFormatUsa
USA date format - 1 for mm/dd/yy, 0 for dd/mm/yy

$lockOutTime
The number of minutes to lockout 3 consecutive invalid logins

$versionCheck
1 to check Monsta FTP server for updates, 0 to not

$showAdvOption
1 to show advanced interface option at login, 0 to set basic

$showLockSess
1 to show option to lock session to IP, 0 to hide

$showHostInfo
1 to show host address in info box, 0 to hide

$showAddons
1 to show unlicensed addons, 0 to hide

$showDotFiles
1 to show files starting with a dot (system files), 0 to hide

$maxExecTime
The number of seconds to allow files to upload for.
(web hosts may implement a maximum limit users can increase this to, in 
which case it will revert to their limit.)

$maxFileSize
The maximum size of files that can be uploaded. Measured in megabytes (M).
(web hosts may implement a maximum limit users can increase this to, in 
which case it will revert to their limit.)

*/

?>
