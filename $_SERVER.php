Returns the Filename of the currently executing script. $_SERVER is a PHP super global variable
which holds information about headers, paths, and script locations.
$_SERVER['PHP_SELF']
Returns the version of the Common Gateway Interface (CGI) the server is using
$_SERVER['GATEWAY_INTERFACE']
Returns the IP address of the host server
$_SERVER['SERVER_ADDR']
Returns the name of the host server (such as www.codewithharry.com)
$_SERVER['SERVER_NAME']
Returns the server identification string (such as Apache/2.2.24)
$_SERVER['SERVER_SOFTWARE']
Returns the name and revision of the information protocol (such as HTTP/1.1)
$_SERVER['SERVER_PROTOCOL']
Returns the request method used to access the page (such as POST)
$_SERVER['REQUEST_METHOD']
Returns the timestamp of the start of the request (such as 1377687496)
$_SERVER['REQUEST_TIME']
Returns the query string if the page is accessed via a query string
$_SERVER['QUERY_STRING']
Returns the Accept header from the current request
$_SERVER['HTTP_ACCEPT']
Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
$_SERVER['HTTP_ACCEPT_CHARSET']
Returns the Host header from the current request
$_SERVER['HTTP_HOST']
Returns the complete URL of the current page (not reliable because not all user-agents support
it)
$_SERVER['HTTP_REFERER']
Is the script queried through a secure HTTP protocol?
$_SERVER['HTTPS']
Returns the IP address from where the user is viewing the current page
$_SERVER['REMOTE_ADDR']
Returns the Hostname from where the user is viewing the current page
$_SERVER['REMOTE_HOST']
Returns the port being used on the user's machine to communicate with the web server
$_SERVER['REMOTE_PORT']
Returns the absolute pathname of the currently executing script
$_SERVER['SCRIPT_FILENAME']
Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if
your script runs on a virtual host, it will be the value defined for that virtual host) (such as
someone@codewithharry.com)
$_SERVER['SERVER_ADMIN']
Returns the port on the server machine being used by the webserver for communication (such as
80)
$_SERVER['SERVER_PORT']
Returns the server version and virtual hostname which are added to server-generated pages
$_SERVER['SERVER_SIGNATURE']
Returns the file system based path to the current script
$_SERVER['PATH_TRANSLATED']
Returns the path of the current script
$_SERVER['SCRIPT_NAME']
Returns the URI of the current page
$_SERVER['SCRIPT_URI']
