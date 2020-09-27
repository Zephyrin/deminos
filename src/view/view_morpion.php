<?php
include 'src/view/header.php';
$color = "is-warning";
if (!empty($_SESSION['players'])){
    echo '<h3 class="title is-3"> Tour de : '.$_SESSION["tour"]["Name"].'</h3>';}

var_dump($_SESSION['morpion']);
$hr = array("<hr>","<hr>", "");

echo '<div class="tile is-ancestor">
          <div class="tile is-1 is-vertical is-parent">';
          $hr = array(1=>"<hr>",2=>"<hr>",3=> "");
          for ($i=1;$i<4;$i++){
                $color = $this->setCardColor($i);
                echo '<a href="?page=morpion&click='.$i.'" >
                        <div class="tile notification '.$color.'">
                        <p> '.$i.'</p>
                          
                        </div>
                        </a>'.$hr[$i];
          }

          echo  '</div>

            <div class="tile is-1 is-vertical is-parent">';

            $hr = array(4=>"<hr>",5=>"<hr>",6=> "");
          for ($i=4;$i<7;$i++){
                $color = $this->setCardColor($i);
                echo '<a href="?page=morpion&click='.$i.'" >
                        <div class="tile notification '.$color.'">
                        <p> '.$i.'</p>
                          
                        </div>
                        </a>'.$hr[$i];
          }

            echo '</div>
            <div class="tile is-1 is-vertical is-parent">';

            $hr = array(7=>"<hr>",8=>"<hr>",9=> "");
            for ($i=7;$i<10;$i++){
                $color = $this->setCardColor($i);
                echo '<a href="?page=morpion&click='.$i.'" >
                                    <div class="tile notification '.$color.'">
                                    <p> '.$i.'</p>
                                      
                                    </div>
                                    </a>'.$hr[$i];
            }

        echo '</div>
    </div>';
include 'src/view/footer.php';
