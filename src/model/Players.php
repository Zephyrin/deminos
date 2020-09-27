<?php


class Players
{   private $turn;
    public function __construct()
    {   $this->turn = array();


    }
    public function set($name1,$name2){
        $_SESSION['players'] = array(
                            "PlayerOne" => array("Name" => $name1),
                            "PlayerTwo" => array("Name" => $name2)
                                      );
        $_SESSION['tour'] = $_SESSION['players']['PlayerOne'];

    }
    public function setNextTurn(){
        $this->turn = $_SESSION['tour'];
        if ($this->turn != $_SESSION['players']["PlayerOne"]){
            $this->turn = $_SESSION['players']["PlayerOne"];
            $_SESSION['tour'] = $this->turn;

        }elseif ($this->turn == $_SESSION['players']["PlayerOne"]){
            $this->turn = $_SESSION['players']["PlayerTwo"];
            $_SESSION['tour'] = $this->turn;

        }
    }
    public function getTurn(){
        return $this->turn;
    }
    public function resetAll(){
        $_SESSION = array();
        session_destroy();
    }


}