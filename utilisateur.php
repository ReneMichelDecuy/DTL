<?php 
class utilisateur{
    private $id;
    private $login;
    private $pass;

    public function __construct($id,$login,$pass){
        $this->id = $id;
        $this->login = $login;
        $this->pass = $pass;
    }
    public function getnom(){
        return $this->login;
    }
    public function getUser($Identifiant,$MotDePasse){
        
        if($Identifiant==$this->login && $MotDePasse==$this->pass){
            return true;
        }else{
            return false;
        }

    }
}
?>