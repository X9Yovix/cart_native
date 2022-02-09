<?php
class Register
{
    private $user;
    private $password;
    private $email;

    //Setter
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    //Getter
    public function getUser()
    {
        return $this->user;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function getEmail()
    {
        return $this->email;
    }
}
