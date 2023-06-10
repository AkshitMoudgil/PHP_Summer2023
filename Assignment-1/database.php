<?php
class Database
{
    private $connection;
    function __construct()
    {
        $this->connect_db();
    }
    //info to link to the server
    public function connect_db()
    {
        $this->connection = mysqli_connect('172.31.22.43', 'Akshit200535888', 'g_pZ8DoO9K', 'Akshit200535888');
        if (mysqli_connect_error()) {
            die("Database connection failed" . mysqli_connect_error() . mysqli_connect_error());
        }
    }
    //table data created
    public function create($fullName, $phoneNo, $email, $deliveryAddress, $pizzaSize, $crustType, $finalToppings, $finalSauces, $cheeseType, $paymentMethod)
    {
        $sql = "INSERT INTO OrderDetails(fullName, phoneNo, email, deliveryAddress, pizzaSize, crustType, finalToppings, finalSauces, cheeseType, paymentMethod) 
        VALUES('$fullName', '$phoneNo', '$email', '$deliveryAddress', '$pizzaSize', '$crustType', '$finalToppings', '$finalSauces', '$cheeseType', '$paymentMethod' )";
        $res = mysqli_query($this->connection, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }

    }
    public function read($id = null)
    {
        $sql = "SELECT * FROM OrderDetails";
        if ($id) {
            $sql .= "WHERE id=$id";
        }
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
    public function sanitize($var)
    {
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }
}
$database = new Database();