<?php
 include("connexion/connexion.php");
 if(isset($_POST['connecter'])){
  require_once("Scripts/control.php");
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>B.R (Bar-Resto)</title>
	<!--Gestion du logo-->
	<link rel="icon" type="image/png" href="images/cartebdi.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
	<link rel="stylesheet" type="text/css" href="style_android.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<!--[if IE 6]-->
	<link rel="stylesheet" type="text/css" href="iecss.css" />
	<!--[endif]-->
</head>
<body>
<div id="main_container">

	<div class="top_bar">
	<!--<p>
		<h1 style="font-size:18px;padding-left:650px;text-shadow: 22px 12px 4px #ffffff;">
		<font color='#ffca00'><i>Bienvenu au logiciel de getion Store_Bar</i></font></h1>
	</p>-->
	
        <div class="top_search"><!-- files/authentification.php -->
          	<form action="#" Method="POST" enctype="Multipart/form-data" autocomplete="off">
 				<div class="input-group col-xs-12">
				 	<input type="text" name="rech" value="" class="form-control" placeholder="Votre recherche...">
 					<div class="input-group-btn">
					 <button type="submit" name="ok" class="btn btn-default">Recherche</button></td>
					</div>
				</div>
		  	</form>
        </div>	
    </div>
	
	<div id="header">
        <div id="logo">
            <a href="index.php"><img src="Photos/logo.png" alt="" title="Photo d'ensemble" width="150" height="130" /></a>
	    </div>
       <div class="oferte_content">
           <div class="top_divider"><img src="images/header_divider.png" alt="" title="" width="1" height="164" /></div>
	       <div id="slider" align="center">
		    <ul>				
			<?php
	         /*$etat='publier';
	         $req=$con->query("SELECT * FROM produits_image WHERE etat_img='$etat'");
	         while($data=$req->fetch()){*/
			?>				
			  <!--<li><img src="<?php echo ' Files/logo/'.$data['description_img'];?>" width="350" height="200" alt="Css Template Preview" /></li>-->
			<?php
			 //}
			?>					
			 </ul>
			</div>
        </div> <!-- end of oferte_content-->
    </div>
    
    <div id="main_content"> 
      <div id="menu_tab">
       <div class="left_menu_corner"></div>
		<?php
		 require_once("menu.php");
		?>
       <div class="right_menu_corner"></div>
      </div><!-- end of menu tab -->
	</div>
            
  <div class="crumb_navigation">  
    <div class="content2" style="background:#FFF !important;">
     <!--<div class="bloc_menu_haut">-->
   <div class="bloc_sup_menu">
    <div class="bloc_date"><b><font color="blue">Bujumbura, nous sommes le
     <SCRIPT LANGUAGE=JavaScript><!--
	  var dDate = new Date() ;
	  var Jours = new Array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi") ;
	  var Mois = new Array("Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre");

	  document.write(dDate.getDate() + "   " + Mois[dDate.getMonth()] + "   " + dDate.getFullYear()) ;
     </SCRIPT></b></font color="blue">
    </div>     
   </div>
  </div>
  
   <div class="left_content">
    <div class="title_box">Du nouveau Store_Bar!! MUTIMA</div>
      <ul class="left_menu">
		<li></li>
      </ul>
	  <div class="border_box">
       <div class="prod_price"><a href="http://www.yahoo.fr/"><img src="images/yahoo.jpg" width="60" height="30" alt="Yahoo" /></a>
	   <a href="https://www.facebook.com/"><img src="images/face.jpg" width="50" height="30" alt="Yahoo" /></a>
	   <a href="http://www.skype.com/fr/"><img src="images/skype.jpg" width="50" height="30" alt="Yahoo" /></a></div>
      </div>
    </div><!-- end of left content -->
   <?php
    if(isset($_GET['connexion'])){
   ?>
    <div class="center_content">
   	 <!--<div class="center_title_bar"><font color="red">Formulaire d'authentification</font color></div>
	  <p align='justify'>
	   <fieldset style="background-color:#afdae1; width:530px"><!--<legend style="color:green;"><b><i>Connectez-vous!</i></b></legend>-->
		<!--<center><form action="#" Method="POST" enctype="multipart-data/form" autocomplete="off" onsubmit="augmente()">
         <table>
          <tr>
		   <td>Nom d'utilisateur</td><td><input type="text" name="user" value="" maxlength="20" autofocus placeholder="Votre nom ou email!"style="width:145px;height:25px;font-size:14px"></td>
		  </tr>
		  <tr>
		   <td>Mot de passe</td><td><input type="password" name="pswd" value="" maxlength="20" style="width:145px;height:25px;font-size:25px; color:blue" required></td>
		  </tr>
		  <tr>
		   <td colspan="2"><input type="submit" name="connecter" value="Connexion" style="width:110px; height:30px; font-size:13px;" onclick="p.value=p.value+10">
		   <input type="submit" name="quit" value="Quitter" style="width:120px; height:30px; font-size:13px;"></td>
		  </tr>
         </table>
        </form>
		<p>Progression :
		 <progress id="p" max=100 value=80></progress>
		</p>
		</fieldset>
	  </p>-->
	</div><!-- end of center content -->
   <?php
	}
	else{
   ?>
    <div class="center_content">
   	 <div class="center_title_bar"><font color="red">SOMMAIRE</font color></div>
	  <p align='justify'><?php $chaine="Avec les technologies de l'informatique, vous pouvez consulter tous les produits de n'importe quelle entreprise ou société du monde  et leurs constituants dans le but de vendre les produits de bonne qualité à toute personne qui existe sur cette terre.
	  Ces nouvelles technologies, permettront à vous tous d'effectuer une ou plusieurs commandes des differents produits à savoir:"; echo $chaine;?></p>
    	<?php
		 $req=$con->query("SELECT * FROM produits_image pmg, prix pr  WHERE pr.IdPF=pmg.IdPF AND pmg.etat_img='publier' GROUP BY pmg.IdPF");
         while($data=$req->fetch()){
		?>
		<div class="prod_box">
        	<div class="top_prod_box"></div>
            <div class="center_prod_box">            
              <div class="product_title"><?php echo $data['titre'];?></div>
               <div class="product_img">
				  <img src="<?php echo 'Files/logo/'.$data['description_img'];?>" width="100" height="100" alt="" title="" border="0" />
			   </div>
               <div class="prod_price"><?php echo $data['PU']; ?> FBU</div>                  
            </div>
            <div class="bottom_prod_box"></div>             
            <!--<div class="prod_details_tab">
             <a href="details.php?idp=<?php //echo $data['IdPF'];?>" class="prod_details">details</a>
     		</div>--> 
        </div>
		<?php
		 }
		?>
	  </div><!-- end of center content -->
    <?php
	 }
	?>
   	<div class="right_content">
    <div class="title_box">PRODUITS DE QUALITE!!!</div>
     <div class="banner_adds"> 
	  <font>Achetez nos produits de qualité en temps réel n'importe où sur le teritoire du Burundi</font color="red">
	  <img src="images/Ani2h.gif" width="186" height="102" /><br/><img src="images/Animation1.gif" width="150" height="30" />
	 </div> 
    <div class="border_box">
     <div class="prod_price"><a href="http://www.google.bi/" target="_blank"><img src="images/google1.jpg" width="80" height="30" alt="Yahoo" /></a>
	 <a href="https://twitter.com/" target="_blank"><img src="images/twitter.jpg" width="50" height="30" alt="Yahoo" /></a>
	 <a href="https://www.youtube.com/" target="_blank"><img src="images/YouTube.jpg" width="50" height="30" alt="Yahoo" /></a></div> 
     </div>	 
   	</div><!-- end of right content -->         
   	</div><!-- end of main content -->
	<!-- end of main_container -->

	<div id="loginModal" class="modal fade" role="dialog"><!-- Modal -->
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>Formulaire d'authentification</h4>
			</div>
			<div class="modal-body">
				<form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
					<div class="row">
	 					<div class="col-xs-2"></div>
						<div class="col-xs-8">
						 	<div class="form-group col-xs-12">
								<input type="text" name="user" id="user" class="form-control" placeholder="Nom d'utilisateur..." autofocus required />
							</div>
							<div class="form-group col-xs-12">
								<input type="password" name="pswd" id="pswd" class="form-control" placeholder="Votre mot de passe..." required />
							</div>
							<div class="form-group col-xs-12">
	 							<button type="submit" name="connecter" class="btn btn-primary">Connexion</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div><!-- Modal -->

 <div class="footer">
 &#169; Brain Speed Software, Computer Science Clinic && MATECH || Logiciel de gestion du Bar et Restaurent WorkSystem-Burundi Edition 2016      
 </div>
</body>
	<script type="text/javascript" src="js/boxOver.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/easySlider1.7.js"></script>
	<script src="js/jquery.js"></script>
		
	<script src="js/prettify.js"></script>
	<!--<script src="js/bootstrap-transition.js"></script>-->
	<script src="js/bootstrap-alert.js"></script>
	<script src="js/bootstrap-modal.js"></script>
	<script src="js/bootstrap-dropdown.js"></script>
	<script src="js/bootstrap-scrollspy.js"></script>
	<script src="js/bootstrap-tab.js"></script>
	<script src="js/bootstrap-tooltip.js"></script>
	<script src="js/bootstrap-popover.js"></script>
	<script src="js/bootstrap-button.js"></script>
	<script src="js/bootstrap-collapse.js"></script>
	<script src="js/bootstrap-carousel.js"></script>
	<script src="js/bootstrap-typeahead.js"></script>
	<script src="js/bootstrap-affix.js"></script>
	<script src="js/application.js"></script>
	<script src="js/jquery.cookie.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true, 
				continuous: true
			});
		});	
	</script>
<!--<script type="text/javascript">
	function noBack(){
	window.history.forward()
	}
	noBack();
	window.onload=noBack;
	window.onpageshow=function(evt){if(evt.persisted)noBack()}
	window.onunload=function(){void(0)}
  </script>-->
</html>
