<?php
class User
{
    private $name;
    private $email;

    public function __destruct()
    {
        echo "User $this->name telah dihapus.";
    }
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        echo "User $name telah dibuat.";
    }

}

$user1 = new User("Bambang", "bambang@example.com");
// ... melakukan sesuatu dengan objek $user1
unset($user1); // Menghapus objek dari memori