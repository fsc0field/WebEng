<?php
/**
 * Created by PhpStorm.
 * User: kochdavi
 * Date: 19.06.2017
 * Time: 12:01
 */
//Database access
$sqlhost = "localhost";
$sqlhost = "127.0.0.1";
$sqluser = "david";
$sqlpass = "david";
$dbname  = "viergewinnt";

$my_db = mysqli_connect($sqlhost, $sqluser, $sqlpass, $dbname) or die ("DB-system nicht verfügbar");