<?php


class Home
{   private $title;
    private $infoMsg;
    private $players;

    public function __construct()
    {
        $this->title = 'Home page';
        $this->infoMsg = '';
        $this->players = new Players();

    }
    public function manage()
    {
        if (isset($_GET['setPlayer'])) {

            if (isset($_POST['player0Name']) and isset($_POST['player1Name'])) {

                if ($_POST['player0Name'] == "" or $_POST['player1Name'] == "") {
                    $this->infoMsg = '<div class="notification is-danger">
                                              <strong> Merci de renseigner les deux champs ! </strong>
                                          </div>';

                }else {
                $this->players->set($_POST['player0Name'], $_POST['player1Name']);
                $this->infoMsg = '<div class="notification is-success">
                                              <strong>Players are set</strong>
                                          </div>';
                }
            }
        }
        if (isset($_GET['setPlayer'])){
            if ($_GET['setPlayer'] == 'reset'){
                $this->players->resetAll();
                $this->infoMsg = '<div class="notification is-success">
                                              <strong>Tout a été réinitialisé</strong>
                                          </div>';
            }
        }
        var_dump($_SESSION);



        include 'src/view/view_home.php';
    }
}