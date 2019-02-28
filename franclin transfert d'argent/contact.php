<?php 
    $firstname = $name = $email = $phne = $message = "";
    $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        $firstname = $_POST["firstname"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];


        if(empty($name))
        {
            $nameError = "Le nom est obligatoire!!!";
        }
        if(empty($firstname))
        {
            $firstnameError = "Le prénom aussi est obligatoire!!!";
        }
        if(empty($message))
        {
            $messageError = "Il faut obligatoirement un message!!!";
        }
        if (!isEmail($email)) {
        	$emailError="veuillez entrer un vrai email svp";
        }


    }
    function isEmail($var){
    	return filter_var($var, FILTER_VALIDATE_EMAIL);
    }

    function verifyInput($var)
    {
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);

        return $var;
    }
 ?>



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
		  	<li><a href="index.html">présentation</a>
		  	<li><a href="index.html">nos offres</a>
		  	<li><a href="index.html">notre organisation</a>
		  	</li>
		  </ul>
		</li>
		<li class="menu-reservation"><a href="Espaceclient.php">Espace Client</a>
		  <ul class="submenu">
		  	<li><a href="Espaceclient.php">choisir un dépot</a>
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
		<li class="menu-contact"><a href="#">contact</a></li>
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
<section id="section1">
 <div class="container">
	<div class="divider"></div>
	<div class="heading"><h2> contactez-moi</h2></div>
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
			<form class="contact-form" method="post" action="" role="form" >
				<div class="row">
					<div class="col-md-6">
						<label for="name">Nom</label>
						<input type="text" id="name" name="name" class="form-control" placeholder="entrez votre nom">
						<p class="commentaire"><?php echo $nameError; ?></p>
					</div>
					<div class="col-md-6">
						<label for="firstname">Prénom</label>
						<input type="text" id="firstname" name="firstname" class="form-control" placeholder="entrez votre prénom">
						<p class="commentaire"><?php echo $firstnameError; ?></p>
					</div>
					<div class="col-md-6">
						<label for="email">Email  </label>
						<input type="email" id="email" name="email" class="form-control" placeholder="entrez votre email">
						<p class="commentaire"><?php echo $emailError; ?></p>
					</div>
					<div class="col-md-6">
						<label for="phone">Téléphone</label>
						<input type="tel" id="phone" name="phone" class="form-control" placeholder="entrez votre téléphone">
						<p class="commentaire"><?php echo $phoneError; ?></p>
					</div>
					<div class="col-md-12">
						<label for="message">Message</label>
						<textarea id="message" name="message" class="form-control" placeholder="Veuillez laisser un mot svp..." rows="4"></textarea>
						<p class="commentaire"><?php echo $messageError; ?></p>
					</div>
					<div class="col-md-12">
						<input type="submit" class="button1" value="Envoyer" >
					</div>
				</div>
				<p class="merci">votre Message a bien été envoyé</p>
			</form>
		</div>
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