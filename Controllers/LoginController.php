<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/Models/User.php");
class LoginController extends User
{
    private $checked;

    public function __construct($email = null, $password = null)
    {
        $this->checked = parent::__construct($email, $password);
    }
    public function login()
    {
        if ($this->checked == true) {
            $_SESSION['email'] = $this->email;
            $_SESSION['password'] = $this->password;
            return true;
        } else {
            return false;
        }
    }
    public function getChecked()
    {
        return $this->checked;
    }
    public function getId(){
        return $this->id;        
    }
    public function logout(){
        session_destroy();
        return true;
    }
}
