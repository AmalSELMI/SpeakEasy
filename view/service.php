<?php
  session_start();

    if(isset($_SESSION['user'])){

        if(isset($_SESSION['erreur'])){
          echo $_SESSION['erreur'];
          unset($_SESSION['erreur']);     // A remplacer par une pop-up
        }

        // Récupérer les informations dans la session de l'utilisateur.
        require_once(__DIR__.'/../model/Membre.class.php');
        $user = unserialize($_SESSION['user']);

        require_once(__DIR__.'/../control/Securite.class.php');
?>
        <!DOCTYPE html>
        <html>
          <head>
<?php
            require_once('CDN.php');      // Ajout des CDN.
?>
            <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
            <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
            <title>Appel</title>
          </head>
          <body>
            <!-- MENU -->
<?php
    require_once('menu.php');
?>


            <!-- contacts card -->

            <div class="card card-default float-left card_contacts " id="card_contacts">
                  <div id="search-container" class="p-2 center">
                    <input type="text" placeholder="Search Contact here.."  >
                    <button id="search"><i class="fa fa-search float-right" aria-hidden="true"></i></button>
                  </div>
                    <ul class="list-group pull-down pre-scrollable listecontacts" id="contact-list">
                        <li class="list-group-item">
<?php
                            // Charger la liste des personnes connectées.
                            require_once(__DIR__.'/../control/serviceForm.php');
                            $requete = rechercherMembreEnLigne($user->getID());
                            if($requete){               // Des personnes sont en ligne.
                                foreach($requete as $pseudo => $value) {
?>
                                    <div class="row w-20" style="width: 150px;">
                                        <div class="col-sm-8 col-md-3 px-0 d-flex flex-row">
                                            <img src="img/user.png" class="rounded-circle mx-auto d-block img-fluid li-el">
                                            <label class="p-2 "><?php echo $value ?></label>
                                            
                                        </div>
                                    </div>
<?php
                                }
                            } else {                    // La liste des personnes connectés est vides.
?>
                                <div class="row w-20">
                                    <div class="col-sm-8 col-md-3 px-0 d-flex flex-row">
                                        <img src="img/user.png" class="rounded-circle mx-auto d-block img-fluid li-el">
                                        <label class="p-2 ">Aucun membre en ligne</label>
                                    </div>
                                </div>
<?php
                            }
?>
                        </li>
                    </ul>
                </div>
                <div class="container_call">
                    <div id="videocall" >
                      <div class="video-container">
                        <video id="video" autoplay></video>
                        <canvas></canvas>
                      </div>
                    </div>
                    <div id="text_area">
                      <textarea id="textarea"></textarea>
                    </div>



                    <div class="buttons">
                      <button type="button" class="btn btn-success btn-circle btn-lg mobile-menu-button" title="contact" id="contact"><i class="fas fa-user-plus"></i></button>
                      <button type="button" class="btn btn-success btn-circle btn-lg" id="call" onclick="toggleStartStop()"><i class="fas fa-phone"></i></button>
                      <button type="button" class="btn btn-primary btn-circle btn-lg disabled" title="Download-File" id="download"><i class="fas fa-download"></i></button>
                    </div>
                    <div class="input">
                      <input type="text" name="tags" id="tags" class="tags" placeholder=" insert tags here..">
                      <input type="button" name="SaveTags" value="SaveTags" id="SaveTags" class="btn btn-success SaveTags disabled">

                    </div>
                    <div class="detect_tags" id="detect_tags"><ul></ul></div>
              </div>
              <?php 
               require_once("footer.php");
               ?>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
          <script type="text/javascript" src="javascript.js"></script>
          </body>
        </html>
<?php
    } else {
        // Redirection pour obliger la connexion.
        header('Location: home.php');
        exit();
    }
