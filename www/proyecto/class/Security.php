<?php
class Security extends Connection
{
    private $loginPage = "login.php";
    private $homePage = "index.php";
    private $newPage = "logined.php";
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function checkLoggedIn()
    {
        if (!isset($_SESSION["loggedIn"]) || !$_SESSION["loggedIn"]) {
            header("Location: " . $this->loginPage);
        }
    }
    
    public function doLogin()
    {
        if (count($_POST) > 0) {
            $user = $this->getUser($_POST["userName"]);
            $_SESSION["loggedIn"] = $this->checkUser($user, $_POST["userPassword"]) ? $user["email"] : false;
            if ($_SESSION["loggedIn"]) {
                header("Location: " . $this->newPage);
            } else {
                return "Incorrect User Name or Password";
            }
        } else {
            return null;
        }
    }

    public function doRegister()
    {
        if (count($_POST) > 0) {
            $user = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $localidad = $_POST["provincia"];
            $telefono = $_POST["phone"];
            $encrypt = password_hash("$password", PASSWORD_BCRYPT);
            $query = "INSERT INTO `Usuario`(`nombre`, `email`, `telefono`, `contrasena`, `secure_contr`, `provincia`) VALUES ('$user','$email','$telefono','no timporta','$encrypt','$localidad')";
            mysqli_query($this->conn, $query);
            header("Location: " . $this->loginPage);
        } else {
            return null;
        }
    }

    public function getUserData(){
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            return $_SESSION["loggedIn"];
        }
    }

    private function checkUser($user, $userPassword)
    {
        if ($user) {
            //return $this->checkPassword($user["userPassword"], $userPassword);
            return $this->checkPassword($user["secure_contr"], $userPassword);
        } else {
            return false;
        }
    }

    private function checkPassword($securePassword, $userPassword)
    {
        return password_verify($userPassword, $securePassword);
        //return ($userPassword === $securePassword);
    }

    function getUser($userName)
    {
        $sql = "SELECT * FROM Usuario WHERE email = '$userName'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }


}
