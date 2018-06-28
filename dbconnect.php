<?php
    error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
	
	if(!mysql_connect("hostname","username","password"))
{
	die('can not connect to server '.mysql_error());
}
if(!mysql_select_db("database_name"))
{
	die('database connection problem '.mysql_error());
}

?>
