<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to School</title>
</head>
<body>

<div>
    <p>
        Landing Page
    </p>
    <a class="btn btn-default" href="<?php echo site_url('/login'); ?>">Login</a>
    <a class="btn btn-default" href="<?php echo site_url('/register'); ?>">Register</a>
</div>

</body>
</html>