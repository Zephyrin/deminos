<?php
include 'src/view/header.php';
$color = "is-warning";
if (!empty($_SESSION['players'])){
    echo '<h3 class="title is-3"> Tour de : '.$_SESSION["tour"]["Name"].'</h3>';}
echo '<div class="tile is-ancestor">
          <div class="tile is-1 is-vertical is-parent">
          
            <a href="?page=morpion&click=1" >
            <div class="tile notification '.$color.'">
            <p> 1</p>
              
            </div>
            </a>
            <hr>
            <a href="?page=morpion&click=2">
            <div class="tile notification '.$color.'">
            <p> 2</p>
              
            </div>
            </a>
            <hr>
            <a href="?page=morpion&click=3">
          <div class="tile notification '.$color.'">
            <p> 3</p>
             </div> </a>
             
            </div>
            
            <div class="tile is-1 is-vertical is-parent">
            <a href="?page=morpion&click=4">
            <div class="tile notification '.$color.'">
            <p> 4</p>
              
            </div>
            </a> 
            <hr>
            <a href="?page=morpion&click=5"><div class="tile notification '.$color.'">
            <p> 5</p>
              
            </div></a>
            <hr>
            <a href="?page=morpion&click=6"><div class="tile notification '.$color.'">
            <p> 6</p>
             </div> </a>
            </div>
            <div class="tile is-1 is-vertical is-parent">
            <a href="?page=morpion&click=7"><div class="tile notification '.$color.'">
            <p> 7</p>
              
            </div></a>
            <hr>
            <a href="?page=morpion&click=8"><div class="tile notification '.$color.'">
            <p> 8</p>
              
            </div></a>
            <hr>
          <a href="?page=morpion&click=9"><div class="tile notification '.$color.'">
            <p> 9</p>
             </div> </a>
        </div>
    </div>';
include 'src/view/footer.php';
