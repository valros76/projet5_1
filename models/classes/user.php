<?php
class User{
    protected $_id;
    protected $_pseudo;
    protected $_password;
    protected $_email;

    public function __contruct(array $donnees){
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees){
        foreach($donnees as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this,$method)){
                $this->$method($value);
            }
        }
    }

    public function id(){
        return $this->_id;
    }

    public function pseudo(){
        return $this->_pseudo;
    }

    public function password(){
        return $this->_password;
    }

    public function email(){
        return $this->_email;
    }

    public function setId($id){
        $id = (int) $id;
        if(is_int($id)){
            $this->_id = $id;
        }
    }
    public function setPseudo($pseudo){
        $this->_pseudo = $pseudo;
    }

    public function setPassword($password){
        $this->_password = $password;
    }

    public function setEmail($email){
        $this->_email = $email;
    }

}?>