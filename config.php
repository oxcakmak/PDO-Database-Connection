<?php
/*
Author: Osman Çakmak
Skype: oxcakmak
Email: oxcakmak@hotmail.com
Website: http://oxcakmak.com/
Country: Turkey [TR]
*/

/*
[Required]
*/
ob_start();
session_start();
date_default_timezone_set('Europe/Istanbul');

/*
[Database]
*/
$config['database']['type'] = "mysql";
$config['database']['hostname'] = "localhost";
$config['database']['username'] = "root";
$config['database']['password'] = "";
$config['database']['database'] = "news";
$config['database']['encoding'] = "utf8";

/*
[Connection]
*/
try {
    $dbhConnectionQuery = $config['database']['type'].":host=".$config['database']['hostname'].";dbname=".$config['database']['database'].";charset=".$config['database']['encoding'];
    $dbh = new PDO($dbhConnectionQuery, $config['database']['username'], $config['database']['password']);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->exec("SET NAMES ".$config['database']['encoding']);
}catch(PDOException $e){
    echo $e->getMessage();
}
?>
