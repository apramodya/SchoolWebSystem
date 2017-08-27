<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 8/27/17
 * Time: 8:44 PM
 */

$host = 'localhost';
$dbname = 'school';
$user = 'apramodya';
$pw = '';

$mysqli = new mysqli($host,$user,$pw,$dbname);

if ($mysqli->connect_error){
    printf("Connect failed %s\n", $mysqli->connect_error);
    exit();
}