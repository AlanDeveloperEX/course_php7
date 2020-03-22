<?php

class User {

    private $id;
    private $password;
    private $hash;
    private $email;

    public function getId(){
        return $this->id;
    }
    public function setId($value){
        $this->id = $value;
    }

    public function getPassword(){
        return $this->password;
    }
    public function setPassword($value){
        $this->password = $value;
    }

    public function getHash(){
        return $this->hash;
    }
    public function setHash($value){
        $this->hash = $value;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($value){
        $this->email = $value;
    }

    public function loadById($id){

        $sql = new Sql();
        
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE id = :ID", array(
            ":ID"=>$id
        ));

        if (count($result) > 0) {

            $row = $result[0];

            $this->setId($row['id']);
            $this->setPassword($row['senha']);
            $this->setHash($row['hash']);
            $this->setEmail($row['email']);

        }

    }

    public function __toString()
    {
       return json_encode(array(
           'id'=>$this->getId(),
           'senha'=>$this->getPassword(),
           'hash'=>$this->getHash(),
           'email'=>$this->getEmail()
       ));
    }

}

?>