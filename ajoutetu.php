
<?php

require 'requet.php';
Autoloader::register();
    
//require 'Nonboursier.php';

if(isset($_POST['Valider'])){
  $test= new EtudiantService();
  //$abdou=new Boursier($_POST['matricule'],$_POST['nom'],$_POST['prenom'],$_POST['telephone'],$_POST['email'],$_POST['idetudiant'],$_POST['typebourse']);
  $abdou=new Nonboursier($_POST['matricule'],$_POST['nom'],$_POST['prenom'],$_POST['telephone'],$_POST['email'],$_POST['idetudiant'],$_POST['adresse']);
  //$abdou=new Boursier($_POST['matricule'],$_POST['nom'],$_POST['prenom'],$_POST['telephone'],$_POST['email'],$_POST['idetudiant'],$_POST['typebourse'],$_POST['idboursier'],$_POST['idchambre']);

  $test->add($abdou);

  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="menfoot.css">
<!------ Include the above in your HEAD tag ---------->
    <title>Document</title>
</head>
<body>
<nav>
  <div class="toggle"><i class="fas fa-bars menu"></i></div>
    <ul>
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="listeetudiants.php">Liste des étudiants</a></li>
        <li><a href="listeboursier.php">Boursiers</a></li>
        <li><a href="listenonboursier.php">Non boursiers</a></li>
        <li><a href="listeloger.php">Logés</a></li>
    </ul>
</nav>  

     <div id="fullscreen_bg" class="fullscreen_bg"/>
    <div >    
 <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Enregistrer un étudiant</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><</div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                       
                                <div class="form-group">
                                    <label for="matricule" class="col-md-3 control-label">Matricule</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="matricule" placeholder="Matricule">
                                    </div>
                                </div>
                  
                  
                           <div class="form-group">
                                    <label for="nom" class="col-md-3 control-label">Nom</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="nom" placeholder="Nom">
                                    </div>
                                </div>
                                    
                                
                            <div class="form-group">
                                    <label for="prenom" class="col-md-3 control-label">Prénom</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="prenom" placeholder="Prénom">
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <label for="telephone" class="col-md-3 control-label">Téléphone</label>
                                    <div class="col-md-9">
                                        <input type="numner" class="form-control" name="telephone" placeholder="Téléphone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" placeholder="E-mail">
                                    </div>
                                </div>
                                    <center>
                                <div  class="haut">
                                            <br>
                                        <input type="radio" name="Etudiant" id="Boursier" value="Boursier">
                                        <label for="Boursier">Boursier</label>
                                        <input type="radio" name="Etudiant" id="NonBoursier" value="Nonboursier">
                                        <label for="NonBoursier">Non boursier</label>
                                        <input type="radio" name="Etudiant" id="Loger" value="loger" checked>
                                        <label for="Loger">Loger</label>

                                           
                                       
                                    </center>
                                    <br> <br>
                                    <div class="form-group">
                                    <label for="typebourse" class="col-md-3 control-label">Type de bourse</label>
                                    <div class="col-md-9">
                                    <input type="number" class="form-control " id="inputTypebourse" placeholder="Type de bourse" name="typebourse">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="adresse"  id="inputAdresse" class="col-md-3 control-label">Adresse</label>
                                    <div class="col-md-9">
                                    <input type="text" class="form-control " id="inputAdresse" placeholder="Adresse" name="adresse">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="idboursier" id="inputIdboursier" class="col-md-3 control-label">ID Boursier</label>
                                    <div class="col-md-9">
                                    <input type="number" class="form-control" id="inputIdboursier" placeholder="ID Boursier" name="idboursier">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="idboursier" id="inputIdchambre" class="col-md-3 control-label">Numéro chambre</label>
                                    <div class="col-md-9">
                                    <input type="number" class="form-control " id="inputIdchambre" placeholder="Numéro chambre" name="idchambre">
        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-primary"  name="Valider" >Enregistrer </button>
                                       
                                    </div>
                                </div>
                                
             
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
<br><br>

<footer id="footer" class="clearfix">
      <div id="footer-widgets">

        <div class="container-fluid">

        <div id="footer-wrapper">

          <div class="row">
            <div class="col-sm-6 col-md-2">
              <div id="meta-3" class="widget widgetFooter widget_meta">
              <h4 class="widgettitle">Pages importantes :</h4>
              <ul>
    		  <li><a href="accueil.php"><i class="fa fa-home fa-fw"></i>Accueil</a></li>
			  <li><a href="privacypolicy.php"><i class="fa fa-link"></i>Liste des étudiants</a></li>
			  <li><a href="#"><i class="fa fa-envelope fa-fw"></i>Nos contacts</a></li>
             </ul>
</div>      </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-2">
              		<div id="recent-posts-3" class="widget widgetFooter widget_recent_entries">
                    <h4 class="widgettitle">Réseaux sociaux :</h4>
                    <ul>
					<li>
				     <a href="https://www.facebook.com/mr.dauod" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
					</li>
					<li>
				      <a href="https://www.twitter.com/ayatquranCom" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
					</li>
					<li>
				      <a href="http://www.youtube.com/user/sonsofye" target="_blank"><i class="fa fa-youtube"></i> Youtube</a>
				   </li>
				</ul>
		</div>            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-4">
              <div id="meta-4" class="widget widgetFooter widget_meta">
              <h4 class="widgettitle">S'inscrir:</h4>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">E-mail :</span>
                  <input class="form-control" placeholder="Votre email.." type="text">
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">Téléphone :</span>
                  <input class="form-control" placeholder="+221773658401" type="text">
                   <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">S'inscrir !</button>
                  </span>
                </div>
              </div>


              </div>
             </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-4">
              <div id="search-3" class="widget widgetFooter widget_search"><h4 class="widgettitle">Recherche dans l'université:</h4>

                <div class="form-group">
                                <label class="control-label">Ecrivez ce que vous voulez rechercher  :</label>
                                <div class="input-group">
                                  <span class="input-group-addon">Mot-clé :</span>
                                  <input class="form-control" placeholder="Keyword for search ..." type="text">
                                   <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">Rechercher !</button>
                                  </span>
                                </div>
                              </div>

                </div>            </div> <!-- end widget1 -->

          </div> <!-- end .row -->

        </div> <!-- end #footer-wrapper -->

        </div> <!-- end .container -->
      </div> <!-- end #footer-widgets -->

    </footer>
    
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script>
    $(document).ready(function() {
      $(".menu").click(function() {
        $("ul").slideToggle().toggleClass('active');    
      });
    });
</script>
</body>
<script >
    var boursier=document.getElementById("Boursier");
    var nonboursier=document.getElementById("NonBoursier");
    var Loge=document.getElementById("Loger");
    var adresse=document.getElementById("inputAdresse");
    var typebourse= document.getElementById("inputTypebourse");
    var idboursier=document.getElementById("inputIdboursier");
    var idchambre= document.getElementById("inputIdchambre");
 
    boursier.onchange=function(){
       
        adresse.style.display="none";
        typebourse.style.display="block";
        idboursier.style.display="none";
        idchambre.style.display="none";
    }

    nonboursier.onchange=function(){
       
        adresse.style.display="block";
        typebourse.style.display="none";
        idboursier.style.display="none";
        idchambre.style.display="none";
    }
    Loge.onchange=function(){
        adresse.style.display="none";
        typebourse.style.display="block";
        idboursier.style.display="block";
        idchambre.style.display="bloc";
    }



</script>
<style>
   /* 
 .fullscreen_bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: 100% 100%;
    background-image: url('http://cleancanvas.herokuapp.com/img/backgrounds/color-splash.jpg');
    background-repeat:repeat;
  }
  */
</style>
</html>