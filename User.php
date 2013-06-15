<?php
class User {
    protected $name;
    protected $password;

    public function getName() {
        return $this->name;
    }

    protected function getPassword() {
        return $this->password;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPassword($pass) {
        $this->password = $pass;
    }

    public function talk() {
        return "Hello world!";
    }
}

