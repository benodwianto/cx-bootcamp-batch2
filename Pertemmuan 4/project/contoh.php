<?php
class User
{
    public function show()
    {
        echo "Ini adalah kelas User.";
    }
}

class Admin
{
    public function show()
    {
        echo "Ini adalah kelas Admin.";
    }
}

// Menggunakan kelas
$user = new User();
$user->show();

$admin = new Admin();
$admin->show();
