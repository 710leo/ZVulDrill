<?php
function clean_input($dirty){
    if (get_magic_quotes_gpc()) {
        $clean = mysql_real_escape_string(stripslashes($dirty));     
    }else{
        $clean = mysql_real_escape_string($dirty);  
    } 
    return $clean;
}

function is_pic($file_name) 
{ 
	$extend =explode("." , $file_name); 
	$va=count($extend)-1; 
	echo $extend[$va];
	if ($extend[$va]=='jpg' || $extend[$va]=='jpeg' || $extend[$va]=='png') {
		return 1;
	}
	else 
		return 0;	
}

function not_find($page)
{
	echo "<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1>
		<p>The requested URL ".$page." was not found on this server.</p></body></html>";
}
?>