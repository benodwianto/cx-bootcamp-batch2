<?php
// trait Logger
// {
//     public function log($message)
//     {
//         echo "Log: $message";
//     }
// }

// class User
// {
//     use Logger;
// }

// class Product
// {
//     use Logger;
// }

// $user = new User();
// $user->log("User logged in.");
// echo "<br>";
// $product = new Product();
// $product->log("Product created.");

trait Logger
{
    public function log($message)
    {
        echo "Log :" . $message;
    }
}

class User
{
    use Logger;
}

$user = new User();
$user->log("User berhasil Login");
