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
    <title>Library</title>
  </head>
  <body>

<?php
    require_once('menu.php');
?>

<!-- MENU LATERAL -->
<div class="container">


    <div class="pos-f-t" id="left_menu">

      <div id="navbarToggleExternalContent">
        <div class="container-library p-4">
          <h4 class="text-white font-italic">Filter conversation</h4><br>

          <div class="container-date">
              <div class="DIV-formfield-checkbox-date">
                  <div class="formfield-checkbox-date">
                      <input type="checkbox" id="today" value="Today">
                      <label for="today" class="text-white">Today</label>
                  </div>

                  <div class="formfield-checkbox">
                      <input type="checkbox" id="lastWeek" value="Last week">
                      <label for="lastWeek" class="text-white">Last week</label>
                  </div>
                   <div class="formfield-checkbox">
                      <input type="checkbox" id="lastMonth" value="Last month">
                      <label for="lastMonth" class="text-white">Last month</label>
                  </div>
               </div>
           </div>
              <!-- Recherche par tag -->
              <div class="container_tag">
                    <div class="searchTAG">
                      <input  id="searchtag-input" type="text" placeholder="Search By Tag..."  >
                      <input  id="searchtag-input-BTN" type="submit" value="ok" />
                    </div>
              </div>
              <div class="container-contact">
                      <div class="searchByContact">
                        <input  id="searchtag-input" type="text" placeholder="Search By Contact...">
                        <input  id="searchtag-input-BTN" type="submit" value="ok" />
                      </div>


              </div>
        </div>
      </div>
    </div>
</div>

         <!--  CARDS CONVERSATIONS-->
<div class="container-fluid">
<div class="container-convs">
  <div class="row history">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 ">
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">
          <div class="card-pic" style="width: 6rem;">
            <img class="rounded-circle mx-auto d-block img-fluid li-el" src="img/user.png">
          </div>
          <p class="text-right text-uppercase "><small>User 2</small></p><br />
          <p class="text-right"><small>02/02/2018</small></p>
          <p class="text-right"><small>22:30</small></p>
        </div>
        <div class="card-body text-success">
          <h5 id="card-title" class="card-title"><mark>Tag 1</mark>   <mark>Tag 2</mark>   <mark>Tag 3</mark></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Parcourir</button>
            <button type="button" class="btn btn-secondary"><a href="fpdf/pdf4.php"></a>Télécharger</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 ">
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">
          <div class="card-pic" style="width: 6rem;">
            <img class="rounded-circle mx-auto d-block img-fluid li-el" src="img/user.png">
          </div>
          <p class="text-right text-uppercase "><small>User 2</small></p><br />
          <p class="text-right"><small>02/02/2018</small></p>
          <p class="text-right"><small>22:30</small></p>
        </div>
        <div class="card-body text-success">
          <h5 id="card-title" class="card-title"><mark>Tag 1</mark>   <mark>Tag 2</mark>   <mark>Tag 3</mark></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Parcourir</button>
            <button type="button" class="btn btn-secondary">Télécharger</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 ">
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">
          <div class="card-pic" style="width: 6rem;">
            <img class="rounded-circle mx-auto d-block img-fluid li-el" src="img/user.png">
          </div>
          <p class="text-right text-uppercase "><small>User 2</small></p><br />
          <p class="text-right"><small>02/02/2018</small></p>
          <p class="text-right"><small>22:30</small></p>
        </div>
        <div class="card-body text-success">
          <h5 id="card-title" class="card-title"><mark>Tag 1</mark>   <mark>Tag 2</mark>   <mark>Tag 3</mark></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Parcourir</button>
            <button type="button" class="btn btn-secondary">Télécharger</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 ">
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">
          <div class="card-pic" style="width: 6rem;">
            <img class="rounded-circle mx-auto d-block img-fluid li-el" src="img/user.png">
          </div>
          <p class="text-right text-uppercase "><small>User 2</small></p><br />
          <p class="text-right"><small>02/02/2018</small></p>
          <p class="text-right"><small>22:30</small></p>
        </div>
        <div class="card-body text-success">
          <h5 id="card-title" class="card-title"><mark>Tag 1</mark>   <mark>Tag 2</mark>   <mark>Tag 3</mark></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Parcourir</button>
            <button type="button" class="btn btn-secondary">Télécharger</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 ">
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">
          <div class="card-pic" style="width: 6rem;">
            <img class="rounded-circle mx-auto d-block img-fluid li-el" src="img/user.png">
          </div>
          <p class="text-right text-uppercase "><small>User 2</small></p><br />
          <p class="text-right"><small>02/02/2018</small></p>
          <p class="text-right"><small>22:30</small></p>
        </div>
        <div class="card-body text-success">
          <h5 id="card-title" class="card-title"><mark>Tag 1</mark>   <mark>Tag 2</mark>   <mark>Tag 3</mark></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Parcourir</button>
            <button type="button" class="btn btn-secondary">Télécharger</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 ">
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">
          <div class="card-pic" style="width: 6rem;">
            <img class="rounded-circle mx-auto d-block img-fluid li-el" src="img/user.png">
          </div>
          <p class="text-right text-uppercase "><small>User 2</small></p><br />
          <p class="text-right"><small>02/02/2018</small></p>
          <p class="text-right"><small>22:30</small></p>
        </div>
        <div class="card-body text-success">
          <h5 id="card-title" class="card-title"><mark>Tag 1</mark>   <mark>Tag 2</mark>   <mark>Tag 3</mark></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Parcourir</button>
            <button type="button" class="btn btn-secondary">Télécharger</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 ">
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">
          <div class="card-pic" style="width: 6rem;">
            <img class="rounded-circle mx-auto d-block img-fluid li-el" src="img/user.png">
          </div>
          <p class="text-right text-uppercase "><small>User 2</small></p><br />
          <p class="text-right"><small>02/02/2018</small></p>
          <p class="text-right"><small>22:30</small></p>
        </div>
        <div class="card-body text-success">
          <h5 id="card-title" class="card-title"><mark>Tag 1</mark>   <mark>Tag 2</mark>   <mark>Tag 3</mark></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Parcourir</button>
            <button type="button" class="btn btn-secondary">Télécharger</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 ">
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">
          <div class="card-pic" style="width: 6rem;">
            <img class="rounded-circle mx-auto d-block img-fluid li-el" src="img/user.png">
          </div>
          <p class="text-right text-uppercase "><small>User 2</small></p><br />
          <p class="text-right"><small>02/02/2018</small></p>
          <p class="text-right"><small>22:30</small></p>
        </div>
        <div class="card-body text-success">
          <h5 id="card-title" class="card-title"><mark>Tag 1</mark>   <mark>Tag 2</mark>   <mark>Tag 3</mark></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Parcourir</button>
            <button type="button" class="btn btn-secondary">Télécharger</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 ">
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">
          <div class="card-pic" style="width: 6rem;">
            <img class="rounded-circle mx-auto d-block img-fluid li-el" src="img/user.png">
          </div>
          <p class="text-right text-uppercase "><small>User 2</small></p><br />
          <p class="text-right"><small>02/02/2018</small></p>
          <p class="text-right"><small>22:30</small></p>
        </div>
        <div class="card-body text-success">
          <h5 id="card-title" class="card-title"><mark>Tag 1</mark>   <mark>Tag 2</mark>   <mark>Tag 3</mark></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Parcourir</button>
            <button type="button" class="btn btn-secondary">Télécharger</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 ">
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">
          <div class="card-pic" style="width: 6rem;">
            <img class="rounded-circle mx-auto d-block img-fluid li-el" src="img/user.png">
          </div>
          <p class="text-right text-uppercase "><small>User 2</small></p><br />
          <p class="text-right"><small>02/02/2018</small></p>
          <p class="text-right"><small>22:30</small></p>
        </div>
        <div class="card-body text-success">
          <h5 id="card-title" class="card-title"><mark>Tag 1</mark>   <mark>Tag 2</mark>   <mark>Tag 3</mark></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Parcourir</button>
            <button type="button" class="btn btn-secondary">Télécharger</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 ">
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">
          <div class="card-pic" style="width: 6rem;">
            <img class="rounded-circle mx-auto d-block img-fluid li-el" src="img/user.png">
          </div>
          <p class="text-right text-uppercase "><small>User 2</small></p><br />
          <p class="text-right"><small>02/02/2018</small></p>
          <p class="text-right"><small>22:30</small></p>
        </div>
        <div class="card-body text-success">
          <h5 id="card-title" class="card-title"><mark>Tag 1</mark>   <mark>Tag 2</mark>   <mark>Tag 3</mark></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Parcourir</button>
            <button type="button" class="btn btn-secondary">Télécharger</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 ">
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">
          <div class="card-pic" style="width: 6rem;">
            <img class="rounded-circle mx-auto d-block img-fluid li-el" src="img/user.png">
          </div>
          <p class="text-right text-uppercase "><small>User 2</small></p><br />
          <p class="text-right"><small>02/02/2018</small></p>
          <p class="text-right"><small>22:30</small></p>
        </div>
        <div class="card-body text-success">
          <h5 id="card-title" class="card-title"><mark>Tag 1</mark>   <mark>Tag 2</mark>   <mark>Tag 3</mark></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Parcourir</button>
            <button type="button" class="btn btn-secondary">Télécharger</button>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-12 ">
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">
          <div class="card-pic" style="width: 6rem;">
            <img class="rounded-circle mx-auto d-block img-fluid li-el" src="img/user.png">
          </div>
          <p class="text-right text-uppercase "><small>User 2</small></p><br />
          <p class="text-right"><small>02/02/2018</small></p>
          <p class="text-right"><small>22:30</small></p>
        </div>
        <div class="card-body text-success">
          <h5 id="card-title" class="card-title"><mark>Tag 1</mark>   <mark>Tag 2</mark>   <mark>Tag 3</mark></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer bg-transparent border-success">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Parcourir</button>
            <button type="button" class="btn btn-secondary">Télécharger</button>
        </div>
      </div>
    </div>


  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Conversation n°1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p class="text-left">Vero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum et nemo magnam veniam quam voluptas ea sapiente ab aliquid eveniet ut temporibus, enim, hic nisi eaque sunt doloribus, voluptates? Vero.</p>
          <br /><br />
          <p class="text-right">Vero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum et nemo magnam veniam quam voluptas ea sapiente ab aliquid eveniet ut temporibus, enim, hic nisi eaque sunt doloribus, voluptates? Vero.</p>
          <br /><br />
          <p  class="text-left">Vero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum et nemo magnam veniam quam voluptas ea sapiente ab aliquid eveniet ut temporibus, enim, hic nisi eaque sunt doloribus, voluptates? Vero.</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->

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
