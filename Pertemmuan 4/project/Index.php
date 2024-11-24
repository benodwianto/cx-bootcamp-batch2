<?php
require 'User.php';
require 'Admin.php';

use Project\User;
use Project\Admin;

$user = new User();
$user->show();

echo "<br>";

$admin = new Admin();
$admin->show();
