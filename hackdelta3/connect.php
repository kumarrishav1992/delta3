<?php
//opens connection to my sql server
$dbc =mysql_connect("localhost","root","");
if(!$dbc)
die("<br/>"."CANNOT CONNECT TO MYSQL SERVER" . mysql_error());
else
{
 //Create database
$sql="CREATE DATABASE task3";
if (mysql_query($sql,$dbc))
{
$db_selected=mysql_select_db("task3",$dbc);
if(!$db_selected)
{
die("<br/>"."CANNOT CONNECT TO DATABASE : " . mysql_error());
}
else
{
$sql = "CREATE TABLE task"."(NAME VARCHAR(50),DOB VARCHAR(50),SEX VARCHAR(50),ROLL INT(10),DEPT VARCHAR(10),EMAIL VARCHAR(50),CLUB VARCHAR(50),HOME VARCHAR(50),SCHOOL VARCHAR(50),PASSWORD VARCHAR(50),PRIMARY KEY (ROLL))";
$retval = mysql_query( $sql, $dbc);
}
}

else
mysql_select_db("task3",$dbc);
}
?>