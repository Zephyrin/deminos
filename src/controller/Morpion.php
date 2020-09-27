<?php


class Morpion
{   private $title;
    private $infoMsg;
    private $players;
    private $win;


    public function __construct()
    {
        $this->title = 'Morpion';
        $this->infoMsg = '';
        $this->players = new Players();
        $this->win = array(
            0 => array(1 , 2 ,3),
            1 => array(4 , 5 ,6),
            2 => array(7 , 8 ,9),
            3 => array(1 , 4 ,7),
            4 => array(2 , 5 ,8),
            5 => array(3 , 6 ,9),
            6 => array(3 , 5 ,7),
            7 => array(1 , 5 ,9)
        );
    }

    public function manage(){
        if (isset($_SESSION['win'])){
            if ($_SESSION['win'] == 'reset'){
                unset($_SESSION['win']);
            }
        }


        if (!empty($_SESSION['players'])){
            if (isset($_GET['click'])){
                $this->click($_GET['click'],$_SESSION['tour']['Name']);
                $this->checkWin($_SESSION['tour']['Name']);

                $this->players->setNextTurn();
            }elseif (!isset($_GET['click'])){
                $this->start();
            }

        }
//        var_dump($_SESSION['tour']);


//        var_dump($_SESSION['morpion']);

        // RESET GAME
        if (isset($_GET['resetGame'])){

                $this->reset();
                $this->start();
        }
        if (isset($_SESSION['win'])){
            $this->infoMsg = '<div class="notification is-success">
                                              <strong>'.$_SESSION['win'].' a gagné !</strong>
                                          </div>';
            $_SESSION['win'] = "reset";

        }


        include 'src/view/view_morpion.php';

//        var_dump($_SESSION['morpion']);
    }

    public function start(){
        $_SESSION['morpion'] = array(1=>"",2=>"",3=>"",4=>"",5=>"",6=>"",7=>"",8=>"",9=>"" );
    }

    public function reset(){

        $_SESSION['morpion'] = array();
        $this->infoMsg = '<div class="notification is-success">
                                              <strong>La partie recommence !</strong>
                                          </div>';
    }

    public function click($case,$joueur){
        $_SESSION['morpion'][$case] = $joueur;

    }

    public function checkWin($player){
        foreach ($this->win as $value ){
            if ($_SESSION["morpion"][$value[0]] == $player){
                if ($_SESSION["morpion"][$value[1]] == $player){
                    if ($_SESSION["morpion"][$value[2]] == $player){
                        $_SESSION['win'] = $player;

                    }

                }
            }
        }

    }

    public function win(){

    }

    public function setCardColor($case){
        if ($_SESSION['morpion'][$case] == $_SESSION['players']['PlayerOne']['Name']){
            $color = "is-primary";
            return $color;
        }elseif ($_SESSION['morpion'][$case] == $_SESSION['players']['PlayerTwo']['Name']){
            $color = "is-link";
            return $color = "is-link";
        }
    }

}