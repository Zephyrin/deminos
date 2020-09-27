<?php
include 'src/view/header.php';

if (isset($_GET['setPlayers'])){
      echo '<form method="post" action="?page=home&setPlayer">
                <div class="field">
                  <label class="label">Nom du joueur 1</label>
                  <div class="control">
                    <input class="input" type="text" name="player0Name">
                  </div>
                </div>
            
                <div class="field">
                  <label class="label">Nom du joueur 2</label>
                  <div class="control">
                    <input class="input" type="text" name="player1Name">
                  </div>
                </div>
                
                <input type="submit" class="button is-fullwidth is-success" value="Validez vos choix">
            </form>';
}

include 'src/view/footer.php';
