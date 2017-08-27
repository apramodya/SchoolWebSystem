<?php
/**
 * Created by PhpStorm.
 * User: apramodya
 * Date: 8/27/17
 * Time: 8:55 PM
 */
include 'con/db_conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

if ($_POST){
    if ($_POST['username'] == "admin"){
        $query = "select pw from admin";
        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $row = $result->fetch_assoc();
        $pw = $row['pw'];

        if ($pw == $password) header("Location: users/admin/admin.php");
        else header("Location: index.php");
    }
}