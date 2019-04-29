<?PHP
include "../core/CarteC.php";
include "../core/HotelC.php";
include "../core/FavorisC.php";
session_start (); 
$Hotel1C=new HotelC();
$listeHotel=$Hotel1C->afficherHotels();
$id=recupererIdCC($_SESSION['idClient']);
$idF=recupererIdFC($_SESSION['idClient']);
$idH=recupererIdHF($_SESSION['idClient']);
$Favoris1C=new FavorisC();
$listeFavoris=recupererIdHF($_SESSION['idClient']);
//var_dump($listeClients->fetchAll());
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Travelix</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">+216 70 019 161</div>
						<div class="user_box ml-auto">
							<li class="nav-item dropdown d-none d-xl-inline-block">
								<a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
								  <span class="profile-text">Hello, <?php echo $_SESSION['prenom']?> !</span>
								  <img class="img-xs rounded-circle" src="images/faceS.jpg"  width="25" height="25"  alt="Profile image">
								</a>
								<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
								  <a class="dropdown-item p-0">
									<div class="d-flex border-bottom">
									  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
										<i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
									  </div>
									  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
										<i class="mdi mdi-account-outline mr-0 text-gray"></i>
									  </div>
									  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
										<i class="mdi mdi-alarm-check mr-0 text-gray"></i>
									  </div>
                                    </div>
                                    <a class="dropdown-item mt-2">
									Votre id :<?php echo "CL_".$_SESSION['idClient']?><br>Référence carte fidélité :<?php echo "C_".$id?>
								  </a>
								  </a>
								  <a class="dropdown-item mt-2" href="monCompte.php">
									Mon Compte
								  </a>
								  <a class="dropdown-item" href="favoris.php">
									Favoris
								  </a>
								  <a class="dropdown-item" href="reservation.html">
									Mes réservations
								  </a>
								  <a class="dropdown-item" href="#">
									Service aprés vente
								  </a>
								  <a class="dropdown-item" href="index.html">
									Dèconnexion
								  </a>
								</div>
							  </li>
						</div>
					</div>
				</div>
			</div>		
		</div>
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="connecte.php"><img src="images/logobleu.png" width="175" height="100" alt=""></a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="#">home</a></li>
								<li class="main_nav_item"><a href="about.html">about us</a></li>
								<li class="main_nav_item"><a href="offers.html">offers</a></li>
								<li class="main_nav_item"><a href="blog.html">news</a></li>
								<li class="main_nav_item"><a href="contact.html">contact</a></li>
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>

						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="about.html">about us</a></li>
				<li class="menu_item"><a href="offers.html">offers</a></li>
				<li class="menu_item"><a href="blog.html">news</a></li>
				<li class="menu_item"><a href="contact.html">contact</a></li>
			</ul>
		</div>
	</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
	<!-- Home -->

	

	<!-- Search -->

	

	<!-- Footer -->



	<!-- Copyright -->

	  
</div>

<div class="search">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Tabs -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>ajouter favoris</span></div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt="">Mes favoris</div>
						</div>		
					</div>

					<!-- Search Panel -->

					<div class="search_panel active">
						<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								
								<table border="1">
                                    <tr>
                                    <td>ID Hotel</td>
                                    <td>Nom</td>
                                    </tr>

                                    <?php
                                    foreach($listeHotel as $row){
                                    ?>
                                        <tr>
                                        <td><?PHP echo "H_".$row['idHotel']; ?></td>
                                        <td><?PHP echo $row['nomH']; ?></td>
                                        <td><a href="ajoutFavoris.php?id=<?php echo $row['idHotel'];?>">favoris</a>
                                        </td>
                                        </tr>
                                        <?PHP
                                    }
                                    ?>
                                    </table>

							</div>
							
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
								<div class="search_item">
                            
                                <table border="1">
                                <tr>
                                <td>ID Hotel</td>
                                </tr>
                                <?PHP
                                foreach($listeFavoris as $row){
                                    ?>
                                    <tr>
                                    <td><?PHP echo "H_".$row['idH']; ?></td>
                                    <td><!--<form method="POST" action="supprimerClient.php">
                                    <input type="submit" name="supprimer" value="supprimer">
                                    <input type="hidden" value="<?PHP echo $row['email']; ?>" name="email">
                                    </form>-->
                                    
                                    </td>
                                    <!--<td><a href="modifierClient.php?email=<?PHP echo $row['email']; ?>">
                                    Modifier</a></td>-->
                                    </tr>
                                    <?PHP
                                }
                                ?>
</table>
									</div>
						</form>
					</div>

					<!-- Search Panel -->
				</div>
			</div>
		</div>		
	</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>

</html>