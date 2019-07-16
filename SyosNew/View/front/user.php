<!DOCTYPE html>
<html lang="fr">
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
				<a class="navbar-brand" href="../index.php/"><img src="../../resources/img/logo.png" alt="Progressus HTML5 template"></a>
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
<div class="jumbotron">
  <h1 class="display-4">Votre profil !</h1>
  <h2><?php echo $_SESSION['email'];?></h2>
  <p class="lead">Sur la page, ci-dessous, les informations inhérantes à votre profil utilisateur !</p>
  <hr class="my-4">
  <p>Petit tips, si vous voulez acheter des produits je vous mets un petit bouton vers la boutique</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="boutique" role="button">Boutique</a>
  </p>
</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Entreprise</th>
      <th scope="col">Adresse</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Mail</th>
      <th scope="col">N° Client</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>SASSADY</td>
      <td>Vanpasone</td>
      <td>BNP</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
</div>

</body>







		<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">S
				<div class="row">

					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+33 6 74 14 74 34<br>
								<a href="mailto:#">quentin.le.thiec@efrei.net</a><br>
								<br>
								30- 32 Avenue de la République, 94800 Villejuif
							</p>
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Nous suivre</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href="https://www.efrei.fr" target="_blank"><i class="fa fa-twitter fa-2"></i></a>
								<a href="https://www.efrei.fr" target="_blank"><i class="fa fa-dribbble fa-2"></i></a>
								<a href="https://www.efrei.fr" target="_blank"><i class="fa fa-github fa-2"></i></a>
								<a href="https://www.efrei.fr" target="_blank"><i class="fa fa-facebook fa-2"></i></a>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Projet Web Design L3 App RI</h3>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="../index.php/">Home</a> |
								<a href="about">A propos</a> |
								<a href="boutique">Boutique</a> |
								<b><a href="register">Se connecter</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2019, Projet. Designed by <a href="https://www.linkedin.com/in/vanpasone-sassady-a6a389124/" target="_blank">SASSADY</a>, <a href="https://www.linkedin.com/in/mohamed-ibrahim-gadiaga-3238b4166/" target="_blank">GADIAGA</a>, <a href="https://www.linkedin.com/in/le-thiec" target="_blank">LE THIEC</a></a>
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>





	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../../public/js/headroom.min.js"></script>
	<script src="../../public/js/jQuery.headroom.min.js"></script>
	<script src="../../public/js/template.js"></script>
</body>
</html>
