!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="menfoot.css">
<!------ Include the above in your HEAD tag ---------->
<title>Accueil</title>
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
        <section class="newsletter">

	<div class="input-group">
         <input type="text" class="form-control" placeholder="Rechercher un étudiant">
         <span class="input-group-btn">
         <button class="btn" type="submit">Rechercher</button>
         </span>
          </div>
	</div>
</section>  
        <div>
            
        <div class="table-responsive" id="sailorTableArea">
    <table id="sailorTable" class="table table-striped table-bordered" width="100%">
        <tr>

             <th>Matricule</th>
             <th>Nom</th>
            <th>Pénom</th> 
           <th>Numéro de télephone</th>
         <th> Email</th>
         <th> Type de bourse</th>
         <th> Numéro chambre</th>
           </tr>
           </thead>
           <tbody>
            
             <?php
             require "Etudiantservice.php";

             

                 $cet= new Etudiantservice();
               //foreach(
                 $resultat = $cet->findAllloger();
                 while ($row=$resultat->fetch()) {
                  
                
                 echo "
                 <tr>

                   <th>".$row['Matricule']."</th>
                      <th>".$row['Nom']."</th>
                      <th>".$row['Prenom']."</th> 
                       <th>".$row['Telephone']."</th>
                       <th>".$row['Email']."</th>
                       <th>".$row['id_type']."</th>
                       <th>".$row['id_chambre']."</th>
                      
               </tr>";
              
                  
                 }





            

             
             ?>



        </div>
        </tbody>

        </table>


        </center>



        </div>




<footer id="footer" class="clearfix">
      <div id="footer-widgets">

        <div class="container">

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
