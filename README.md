###################################
IMPORTANT
###################################

The server running this script must allow external FTP connections
if you intend to allow connection to external servers.

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

$dateFormatUsa = 0;
USA date format - 1 for mm/dd/yy, 0 for dd/mm/yy

$lockOutTime = 5;
The number of minutes to lockout 3 consecutive invalid logins

###################################
LINKS
###################################

FAQ, support requests, bug reports:
http://www.monstaftp.com/support/

Please consider a donation:
http://www.monstaftp.com/donations/

Help spread the word (links, logos):
http://www.monstaftp.com/promote/

Please write a review:
http://www.monstaftp.com/reviews/
