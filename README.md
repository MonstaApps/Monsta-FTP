###################################
IMPORTANT
###################################

The server running this script must allow external FTP connections
if you intend to allow connection to external servers.

###################################
INSTALL
###################################

Unzip the contents of the Monsta FTP install zip file to a folder on your computer. Then Create a 
new folder in your web space, such as "ftp," and upload all the files and folders you unzipped.
You'll then access Monsta FTP in your browser from the URL www.yourdomain.com/ftp 

###################################
UPLOAD LIMITS
###################################

The "Upload Limit" seen on screen is set in your server's PHP.INI file.

###################################
CONFIGURATION
###################################

$ftpHost
Enter the host address/port/mode if it should always be a fixed host address.
Leave this blank if you want the user to input their host address.

$ftpPort
21 is the default

$ftpMode
1 for passive, 0 for not passive (passive is default)

$ftpSSL
1 for SSL, 0 for not SSL - your (server must support ftp_ssl_connect() to use this)
 
$ftpDir
Enter an FTP server path for the default login (or leave blank for home folder)

$serverTmp
This is a folder on the client server for uploading files to.
By default it's /tmp (Linux), which is the server's folder for temporary files, however you can 
set any folder, provided it has 777 chmod permissions, so it can be written to from the web.
Windows temp folder is typically "C:\WINDOWS\Temp\" (backslashes must be escaped with another backslash)

$editableExts
A list of file types that can be edited in the text editor

$dateFormatUsa
USA date format - 1 for mm/dd/yy, 0 for dd/mm/yy

$lockOutTime
The number of minutes to lockout 3 consecutive invalid logins

$versionCheck
1 to check Monsta FTP server for updates, 0 to not

$showAdvOption
1 to show advanced interface option at login, 0 to set basic interface as default

$showLockSess
1 to show option to lock session to IP, 0 to hide

$showHostInfo
1 to show host address in info box, 0 to hide

###################################
LINKS
###################################

FAQ, support requests, bug reports:
http://www.monstaftp.com/support/

Please consider a donation:
http://www.monstaftp.com/donations/

Help spread the word (links, logos):
http://www.monstaftp.com/promote/
