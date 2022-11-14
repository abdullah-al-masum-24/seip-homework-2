<?php


namespace App\classes;
use App\classes\Database;

class Auth
{
    private $email, $password, $database, $sql, $queryResult, $user;


    public function __construct($post = null)
    {
        $this->database = new Database();

        if (isset($post['email'])) {

            $this->email = $post['email'];
            $this->password = md5( $post['password'] );
        }

    }

    public function login() {


        $this->sql = "SELECT * FROM users WHERE email = '$this->email' AND password = '$this->password'";
        $this->queryResult = mysqli_query($this->database->dbConnect(), $this->sql);
        $this->user = mysqli_fetch_assoc($this->queryResult);

        if ($this->user) {

            session_start();

            $_SESSION['id']   = $this->user['id'];
            $_SESSION['name'] = $this->user['name'];

            header('location:action.php?page=add-blog');
        }
        else {
            return "Your credential is wrong";
        }


    }

    public function logout() {

        session_start();

        unset($_SESSION['id']);
        unset($_SESSION['name']);

        header('location:action.php?page=login');
    }
}