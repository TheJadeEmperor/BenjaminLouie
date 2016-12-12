<?php
function optin($campaign)
{
	$landingURL = 'http://bestpayingsites.com/redirect.php?action=minisite';

	return '<form method="POST" action="http://www.trafficwave.net/cgi-bin/autoresp/inforeq.cgi" 
	onsubmit="return myValidate.Apply()">
	<input type=hidden name="trwvid" value="theemperor"><input type=hidden name="series" value="'.$campaign.'">
	<input type=hidden name="lcpID" value=""><input type=hidden name="lcpDE" value="0">
	<input type=hidden name="subscrLandingURL" value="'.$landingURL.'">
	<input type=hidden name="confirmLandingURL" value="'.$landingURL.'">
	<table class="LCPdataForm" style="width:250px">
	<tr>
		<td width="40%">Name</td>
		<td>
		<input id="da_name" name="da_name" type=text size="30"></td>
	</tr><tr>
		<td width="40%">Email</td>
		<td><input id="da_email" name="da_email" type=text size="30"></td>
	</tr><tr>
		<td colspan=2 align=center><input type=submit value="Submit"></td>
	</tr></table>
	<input type="hidden" name="da_cust1" value=""></form>';
}

function tracker()
{
	return '<div id="eXTReMe"><a href="http://extremetracking.com/open?login=bestpay">
	<img src="http://t1.extreme-dm.com/i.gif" style="border: 0;"
	height="38" width="41" id="EXim" alt="eXTReMe Tracker" /></a>
	<script type="text/javascript"><!--
	EXref="";top.document.referrer?EXref=top.document.referrer:EXref=document.referrer;//-->
	</script><script type="text/javascript"><!--
	var EXlogin=\'bestpay\' // Login
	var EXvsrv=\'s10\' // VServer
	EXs=screen;EXw=EXs.width;navigator.appName!="Netscape"?
	EXb=EXs.colorDepth:EXb=EXs.pixelDepth;EXsrc="src";
	navigator.javaEnabled()==1?EXjv="y":EXjv="n";
	EXd=document;EXw?"":EXw="na";EXb?"":EXb="na";
	EXref?EXref=EXref:EXref=EXd.referrer;
	EXd.write("<img "+EXsrc+"=http://e1.extreme-dm.com",
	"/"+EXvsrv+".g?login="+EXlogin+"&amp;",
	"jv="+EXjv+"&amp;j=y&amp;srw="+EXw+"&amp;srb="+EXb+"&amp;",
	"l="+escape(EXref)+" height=1 width=1>");//-->
	</script><noscript><div id="neXTReMe"><img height="1" width="1" alt=""
	src="http://e1.extreme-dm.com/s10.g?login=mmwys&amp;j=n&amp;jv=n" />
	</div></noscript></div>';
}

function insertRecord($dbFields, $tableName)
{
	global $context; 
	
	$fields = $values = array();
	foreach($dbFields as $fld => $val)
	{
		array_push($fields, $fld);
		array_push($values, $val);
	}
	
	$theFields = implode(',', $fields);
	$theValues = implode(',', $values);
	
	$ins = 'insert into '.$tableName.' ('.$theFields.') values ('.$theValues.')';
	return mysql_query($ins, $context[conn]) or die(mysql_error());
}

function embedYoutube($src, $width, $height)
{
	return '<object width="'.$width.'" height="'.$height.'"><param name="movie"
	value="http://www.youtube.com/v/'.$src.'=en_US&fs=1&"></param>
	<param name="allowFullScreen" value="true"></param>
	<param name="allowscriptaccess" value="always"></param>
	<embed src="http://www.youtube.com/v/'.$src.'&hl=en_US&fs=1&" type="application/x-shockwave-flash"
	allowscriptaccess="always" allowfullscreen="true" width="'.$width.'" height="'.$height.'"></embed></object>';
}


/* connect to database, returns resource */
function database($host, $user, $pw, $dbName)
{
	if(is_int(strpos(__FILE__, 'C:\\')))	//connect to database remotely (local server)
	{
		$conn = mysql_connect($host, $user, $pw) or die(mysql_error().' (L: '.__LINE__.')');
	}
	else //connect to database directly (live server)
	{
		$conn = mysql_connect('localhost', $user, $pw) or die(mysql_error().' (L: '.__LINE__.')');
	}

	mysql_select_db($dbName) or die(mysql_error());

	return $conn;
}


function FileName($dir)//gets the full directory and returns the file name
{
	$slash = strrpos($dir, '/'); //find the last slash in the directory

	if($slash == false)//if unable to find the forward slash
		$slash = strrpos($dir, '\\');//find the backslash (for localhost)

 	return substr($dir, $slash + 1, strlen($dir));//get the file name
}


function shortenText($text, $limit)
{
	//$limit = number of characters you want to display
	$new = $text.' ';
	$new = substr($new, 0, $limit);

	if(strlen($text) > $limit)
		$new = $new.'...';
	return $new;
}

//delete all error logs, if applicable
if(file_exists('error_log')) 
	unlink('error_log');

//do not show errors on the website
if($live == true)
	error_reporting(0);

$file = FileName($_SERVER[PHP_SELF]); //get this file name

list($key, $ext) = explode('.', $file); //get the key for section maps 

?>