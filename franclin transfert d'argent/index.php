<!DOCTYPE html>
<html>
<head>
	<title>mon premier site web</title>
	<meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>,
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="menu-deroulant-responsive.css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>
<header></header>
<nav>
	<label for="menu-mobile" class="menu-mobile">Menu</label>
	<input type="checkbox" id="menu-mobile" role="button">

   
    
   
    <ul class="list-unstyled list-inline text-center ">

		<li class="menu-accueil"><a href="#">accueil</a>
		  <ul class="submenu">
            <li><a href="espaceclient.php">faire un dépot</a>
		  	<li><a href="#">présentation</a>
		  	<li><a href="#secondsec">nos offres</a>
		  	<li><a href="#firstsec">notre organisation</a>
		  	</li>
		  </ul>
		</li>
		<li class="menu-reservation"><a href="espaceclient.php">espace client</a>
		  <ul class="submenu">
		  	<li><a href="Espaceclient.php">faire un dépot</a>
		  	<li><a href="Espaceclient.php">faire un retrait</a>
		  	</li>
		  </ul>
		</li>
		<li class="menu-inscription"><a href="information.php">information</a>
		  <ul class="submenu">
		  	<li><a href="information.php">présentation</a>
		  	<li><a href="information.php">voir information</a>
		  	</li>
		  </ul>
		</li>
		<li class="menu-contact"><a href="contact.php">contact</a></li>
	</ul>

      <ul class="list-unstyled list-inline text-center rigth">
	        <li class="list-inline-item">
	          <a href="https://fr-fr.facebook.com/" class="btn-floating btn-fb mx-1">
	            <i class="im1 fab fa-facebook-f"> </i>
	          </a>
	        </li>
	        <li class="list-inline-item">
	          <a href="https://twitter.com" class="btn-floating btn-tw mx-1">
	            <i class=" im2 fab fa-twitter"> </i>
	          </a>
	        </li>
	        <li class="list-inline-item">
	          <a href="https://www.google.com/" class="btn-floating btn-gplus mx-1">
	            <i class="im6 fab fa-youtube-square"></i>
	          </a>
	        </li>
	</ul> 

</nav>
<section id="evader">
        <div class="container">
            <div id="myCarousel" class="carousel slide col-sm-12" data-ride="carousel">
                <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li> 
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/transfert.jpg">
                        <div class="carousel-caption">
                        	<h2>trasferez de l'argent<br><strong>en toute sécurité</strong></h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/ordi.jpg">  
                        <div class="carousel-caption">
                            <h2>trasferez de l'argent<br><strong>en toute sécurité</strong></h2>
                        </div>    
                    </div>
                     <div class="item">
                       <img src="images/meuf.jpg">  
                        <div class="carousel-caption">
                        	<h2>trasferez de l'argent<br><strong>en toute sécurité</strong></h2>
                        </div>   
                    </div>
                     
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>  
    </section>
    <section id="secondsec">
        <div class="container">
    	    <div class="red-divider"></div>
    	    <div class="heading">
    	    	<h2><strong>envoyer de l'argent</strong></h2>
    	    </div>
    	    <div class="row">
    	        <div class="col-sm-6">
    	        	<div class="secondsec-block">
    	        		<img src="images/transfert.jpg" class="image">
    	        	</div>
    	        </div> 	
    	    <div class="col-sm-6">
    	        	<div class="secondsec-block">
    	        		<img src="images/money.jpg" class="image">
    	        	</div>
    	        </div> 
    	    </div>
        </div>
    	
    </section>
    <section id="firstsec">
    <div class="container">
    	<div class="diaporama">
    		
    	</div>
    </div>
    </section>
<footer>
	 <div class="wrapper">
                <h1>TRANSFERT D'ARGENT<span class="bleu">.</span></h1>
                <div class="copyright">Copyright @ 2019. site web transfert d'argent.<br> transfert mobile étandu au monde entier<br>Entreprise Aka Transfert D'argent vous remercie pour votre fidelité <br>Pour plus D'information :francklin@gmail.com</div>
			</div>
</footer>
</body>
</html>