<?php


$dbc = new PDO("mysql:host=localhost;dbname=syos" , "root", "root");
$action = (isset($_POST["act"])) ? $_POST["act"] : "";
$id = (isset($_POST["id"])) ? $_POST["id"] : "";


$id_utilisateur_upd       = "";
$nom_utilisateur_upd      = "";
$prenom_utilisateur_upd   = "";
$mail_upd      = "";
$nom_entreprise_upd  = "";
$adresse_postale_upd  = "";
$profil_upd  = "";
$telephone_upd  = "";


if ($action == "N"){

    $id_utilisateur     = (isset($_POST["id_utilisateur"]))? $_POST["id_utilisateur"] : '';
    $nom_utilisateur     = (isset($_POST["nom_utilisateur"]))? $_POST["nom_utilisateur"] : '';
    $prenom_utilisateur  = (isset($_POST["prenom_utilisateur"]))? $_POST["prenom_utilisateur"] : '';
	$nom_entreprise  = (isset($_POST["nom_entreprise"]))? $_POST["nom_entreprise"] : '';
	$adresse_postale  = (isset($_POST["adresse_postale"]))? $_POST["adresse_postale"] : '';
    $telephone     = (isset($_POST["telephone"]))? $_POST["telephone"] : '';
    $mail = (isset($_POST["mail"]))? $_POST["mail"] : '';
	$profil = (isset($_POST["profil"]))? $_POST["profil"] : '';


    if ($id_utilisateur == ""){
        $cmd = ('INSERT INTO utilisateurs (nom_utilisateur, prenom_utilisateur, nom_entreprise, adresse_postale, telephone, mail, profil)
				VALUES ("'.$_POST["nom_utilisateur"].'","'.$_POST["prenom_utilisateur"].'","'.$_POST["nom_entreprise"].'","'.$_POST["adresse_postale"].'","'.$_POST["telephone"].'","'.$_POST["mail"].'","'.$_POST["profil"].'")');


    }

	else{
        $cmd = " update utilisateurs set id_utilisateur='$id_utilisateur' , nom_utilisateur='$nom_utilisateur',
                                   prenom_utilisateur='$prenom_utilisateur' , nom_entreprise='$nom_entreprise', adresse_postale='$adresse_postale', telephone='$telephone',
                                   mail='$mail' , profil='$profil'
                                   where id_utilisateur = '$id_utilisateur';
                ";
    }

    $dbc->query($cmd);

}

if ($action == "M"){

    $cmd = "select * from utilisateurs where id_utilisateur = '$id' ;";
    $res = $dbc->query($cmd);
    $line = $res->fetch();

    $id_utilisateur_upd      = $line["id_utilisateur"];
    $nom_utilisateur_upd      = $line["nom_utilisateur"];
    $prenom_utilisateur_upd   = $line["prenom_utilisateur"];
    $mail_upd      = $line["mail"];
    $nom_entreprise_upd  = $line["nom_entreprise"];
    $adresse_postale_upd  = $line["adresse_postale"];
    $profil_upd  = $line["profil"];
    $telephone_upd  = $line["telephone"];



}

if ($action == "S"){
    $cmd = "delete from utilisateurs where id_utilisateur='$id' ; ";
    $dbc->query($cmd);
}



$cmd= "select * from utilisateurs";
$res = $dbc->query($cmd);
$table = $res->fetchAll();

?>



<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

	<title>SYOS</title>

	<link rel="shortcut icon" href="../../resources/img/gt_favicon.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../public/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../../public/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="../../public/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="../../resources/img/logo.png" alt="Progressus php5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="../index.php/">Home</a></li>
					<li><a href="boutique">Boutique</a></li>
					<li><a href="about">A propos </a></li>
					<li><a class="btn" href="connexion">Se connecter</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->
	<header id="head" class="secondary"></header>

	<body>
<div class="container">
<h1> Fichier utilisateur</h1>

<table class="table table-hover">
	<thead>
		<td>N° utilisateur</td>
		<td>Nom utilisateur</td>
		<td>Prénom utilisateur</td>
		<td>Nom d'entreprise</td>
		<td>adresse_postale</td>
		<td>telephone</td>
		<td>mail</td>
		<td>profil</td>

	</thead>
	<thead>
		<form action="gestion_usr.php" method="post">
		<input type="hidden" name="act" value="N">
		<!-- <input type="hidden" name="id" value="<?php echo $id_utilisateur ; ?>"> -->
		<td><input type="text" name="id_utilisateur" value="<?php echo $id_utilisateur_upd ; ?>" placeholder="N° utilisateur"></td>
		<td><input type="text" name="nom_utilisateur" value="<?php echo $nom_utilisateur_upd ; ?>" placeholder="Nom"></td>
		<td><input type="text" name="prenom_utilisateur" value="<?php echo $prenom_utilisateur_upd ; ?>"  placeholder="Prénom"></td>
		<td><input type="text" name="nom_entreprise" value="<?php echo $nom_entreprise_upd ; ?>"  placeholder="bnpparibas"></td>
		<td><input type="text" name="adresse_postale" value="<?php echo $adresse_postale_upd ; ?>"  placeholder="Adresse"></td>
		<td><input type="text" name="telephone" value="<?php echo $telephone_upd ; ?>"  placeholder="093484124"></td>
		<td><input type="text" name="mail" value="<?php echo $mail_upd ; ?>"  placeholder="azer@gmail.com"></td>
		<td><input type="text" name="profil" value="<?php echo $profil_upd ; ?>"  placeholder="Structure"></td>
		<td><input type="submit" value="Ok"></td>
		<td></td>
		</form>
	</thead>


	<?php foreach ($table as $row ) { ?>
	<tr>
		<td><?php echo $row["id_utilisateur"]?></td>
		<td><?php echo $row["nom_utilisateur"]?></td>
		<td><?php echo $row["prenom_utilisateur"]?></td>
		<td><?php echo $row["nom_entreprise"]?></td>
		<td><?php echo $row["adresse_postale"]?></td>
		<td><?php echo $row["telephone"]?></td>
		<td><?php echo $row["mail"]?></td>
		<td><?php echo $row["profil"]?></td>
		<td>
    		<form action="gestion_usr.php" method="post">
    			<input type="hidden" name="id" value="<?php echo $row["id_utilisateur"]?>">
    			<input type="hidden" name="act" value="M">
    			<input type="submit" value="M">
    		</form>
		</td>
		<td>
    		<form action="gestion_usr.php" method="post">
    			<input type="hidden" name="act" value="S">
    			<input type="hidden" name="id" value="<?php echo $row["id_utilisateur"]?>">
    			<input type="submit" value="S">
    		</form>
		</td>
	</tr>
	<?php } ?>
</table>
</div>
</body>
</html>
