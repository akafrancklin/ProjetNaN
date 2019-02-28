<!DOCTYPE html>
<html>
<head>
	<title>mon premier site web</title>
	<meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
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

		<li class="menu-accueil"><a href="index.php">accueil</a>
		  <ul class="submenu">
		    <li><a href="espaceclient.php">faire un dépot</a>
		  	<li><a href="index.php">présentation</a>
		  	<li><a href="index.php">nos offres</a>
		  	<li><a href="index.php">notre organisation</a>
		  	</li>
		  </ul>
		</li>
		<li class="menu-reservation"><a href="#">Espace Client</a>
		  <ul class="submenu">
		  	<li><a href="#reservationsec">faire un dépot</a>
		  	<li><a href="#reservationsec1">faire un retrait</a>
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

<section id="reservationsec">
 <div class="container">
	<div class="heading"><h2>espace clientel</h2></div>
	<div class="heading2"><h3>Faire un Dépot</h3></div>
	<div class="row">
			<form class="contact-form" method="post" action="traitement.php" role="form" >
				<div class="row">
				    <div class="col-md-6">
						<label for="name">Nom</label>
						<input type="text" id="name" name="name" class="form-control" placeholder="entrez votre nom">
					</div>
					<div class="col-md-6">
						<label for="firstname">Prénom</label>
						<input type="text" id="firstname" name="firstname" class="form-control" placeholder="entrez votre prénom">
					</div>
					<div class="col-md-6">
						<label for="montant">Montant</label>
						<input type="text" id="Montant" name="montant" class="form-control" placeholder="entrer montant">
						<p></p>
					</div>
					<div class="col-md-6">
						<label for="Pays">Pays</label>
						
						<select name="pays" id="pays" class="form-control" placeholder="entrer nom du Pays">
              <option>choissir un pays</option>
              <option>france</option>
              <option>cote d'Ivoire</option>
              <option>espange</option>
              <option>Italy</option>
              <option>chine</option>
              <option>japon</option>
              <option>ghana</option>
              <option>mali</option>
              <option>cameroon</option>
                     </select>
					</div>
					<div class="col-md-12">
						<label for="phone">Numéro</label>
						<input type="tel" id="phone" name="phone" class="form-control" placeholder="entrez Numéro du receveur">
						<p></p>
					</div>
					<div class="col-md-12">
						<label for="phone">Mot de pass </label>
						<input type="tel" id="phone" name="phone" class="form-control" placeholder="entrez votre Mot de pass">
						<p></p>
					</div>
					<div class="col-md-12">
					    <input type="submit" class="button1" value="Transferer">
					</div>
        		</div>
            </form>	
    </div>        
</section>

<section id="reservationsec1">
	<div class="container">
	<div class="heading2"><h3>Faire un Retrait</h3></div>
	<div class="row">
			<form class="contact-form" method="post" action="trait.php" role="form" >
				<div class="row">
				    <div class="col-md-6">
						<label for="name">Nom</label>
						<input type="text" id="name" name="name" class="form-control" placeholder="entrez votre nom">
					</div>
					<div class="col-md-6">
						<label for="firstname">Prénom</label>
						<input type="text" id="firstname" name="firstname" class="form-control" placeholder="entrez votre prénom">
					</div>
					<div class="col-md-6">
						<label for="montant">Montant</label>
						<input type="text" id="montant" name="montant" class="form-control" placeholder="entrer Montant">
						<p></p>
					</div>
					<div class="col-md-6">
						<label for="Pays">Pays</label>
						
						<select name="pays" id="pays" class="form-control" placeholder="entrer nom du Pays">
              <option>choissir un pays</option>
              <option>france</option>
              <option>cote d'Ivoire</option>
              <option>espange</option>
              <option>Italy</option>
              <option>chine</option>
              <option>japon</option>
              <option>ghana</option>
              <option>mali</option>
              <option>cameroon</option>
                     </select>
					</div>
					<div class="col-md-12">
						<label for="phone">Numéro</label>
						<input type="tel" id="phone" name="phone" class="form-control" placeholder="entrer votre Numéro ">
						<p></p>
					</div>
					<div class="col-md-12">
						<label for="phone">Mot de pass</label>
						<input type="tel" id="phone" name="phone" class="form-control" placeholder="entrez votre Mot de pass">
						<p></p>
					</div>
					<div class="col-md-12">
					    <input type="submit" class="button1" value="envoyer">
					</div>
        		</div>
            </form>	
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