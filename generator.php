<?php

$visite=$_POST['visiteSalle'];

$duree = $_POST['duree']; //duree de location 
$utilisation = $_POST['utilisation'];//duree d'utilisation du tweetwall
$play = $_POST['play'];//duree pour DJ
$places =  $_POST['places'];//Nombre de place de parking
$nbr_chaise = $_POST['nbchaise'];//Nombre de chaises
$nbr_tr = $_POST['nbtr'];//Nombre de T-R
$nbr_tb = $_POST['nbtb'];//Nombre de T-B
$nbr_debout = $_POST['nbdebout'];//Nombre de mange debout
$titre_horaire = $_POST['titre_horaire'];//titre du horaire selectionner
$nbagent = $_POST['nbagent'];//nombre d'agent de secuite (min 2)

$somme=$_POST['totalsum'];//la somme total
/********************/
$nbvalley=$_POST['nbvalley'];
$nbreceptionniste=$_POST['nbreceptionniste'];
$nbvestiaire=$_POST['nbvestiaire'];
$nbhotesse=$_POST['nbhotesse'];
$nbserveur=$_POST['nbserveur'];
$nbbarman=$_POST['nbbarman'];
$nbparkingb=$_POST['nbparkingb'];

/********* Ce que Nassim m'a demandé d'ajouter (24.03) | Nombre d'heures ************/
$nbHDame=$_POST['nbHDame'];

$nbHVestiaire=$_POST['nbHVestiaire'];
$nbHValley=$_POST['nbHValley'];
$nbHRecept=$_POST['nbHRecept'];
$nbHHotesse=$_POST['nbHHotesse'];
$nbHAgent=$_POST['nbHAgent'];
$nbHServeur=$_POST['nbHServeur'];
$nbHBarman=$_POST['nbHBarman'];
$nbHParkingb=$_POST['nbHParkingb'];

/*******************/
// Pour la permanence
if($duree > 6 ){$plus = $duree - 6;}
if($duree < 6 ){$plus = 6 - $duree;}
if($duree == 6 ){$plus = 0;}
//Les informations du client

$company = $_POST['company'];
$email = $_POST['email'];
$date = $_POST['date'];
$event = $_POST['event'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$fax = $_POST['fax'];
$capacity = $_POST['capacity'];

//Les options obligatoire

$horaire = $_POST['horaire'];
$charges = $_POST['charges'] * $duree;
$nettoyage = $_POST['nettoyage'];
$regisseur = $_POST['regisseur1'];
$eclairage = $_POST['eclairage'];
if(isset($_POST['securite'])){$securite= $_POST['securite'] * $nbHAgent * $nbagent;}
$permanence = 500 + $plus * 50;
/*****************************/

if(isset($_POST['vip'])){$vip = $_POST['vip'];}
if(isset($_POST['dame'])){$dame = $_POST['dame'] * $nbHDame ;}
if(isset($_POST['valley'])){$valley = $_POST['valley'] * $nbHValley * $nbvalley ;}
if(isset($_POST['receptionniste'])){$receptionniste = $_POST['receptionniste'] * $nbHRecept * $nbreceptionniste;}
if(isset($_POST['vestiaire'])){$vestiaire = $_POST['vestiaire'] * $nbHVestiaire * $nbvestiaire;}
if(isset($_POST['hotesse'])){$hotesse = $_POST['hotesse'] * $nbHHotesse * $nbhotesse;}
if(isset($_POST['serveur'])){$serveur = $_POST['serveur'] * $nbHServeur *  $nbserveur ;}
if(isset($_POST['barman'])){$barman = $_POST['barman'] * $nbHBarman * $nbbarman;}
if(isset($_POST['parkingb'])){$parkingb = $_POST['parkingb'] * $nbHParkingb ;}
if(isset($_POST['parking'])){$parking = $places * $duree ;}

/******************************/

if(isset($_POST['cafe'])){$cafe = $_POST['capacity'] * 7;}
if(isset($_POST['catering'])){$catering = $_POST['capacity'] * 5;}
if(isset($_POST['traiteur'])){$traiteur = $_POST['traiteur'];}

/******************************/

if(isset($_POST['wifi'])){$wifi = $_POST['wifi'];}
if(isset($_POST['tweetwall'])){$tweetwall = $_POST['tweetwall'] * $_POST['utilisation'];}
if(isset($_POST['son'])){$son = $_POST['son'];}
if(isset($_POST['regisseur2'])){$regisseur2 = $_POST['regisseur2'];}
if(isset($_POST['dj'])){$dj = $_POST['dj'] * $_POST['play'];}
/***********/

if(isset($_POST['rdc'])){$rdc = $_POST['rdc'];}
if(isset($_POST['mezz'])){$mezz = $_POST['mezz'];}

if($_POST['lumiere1']!=0){$lumiere1 = $_POST['lumiere1'];}else{$lumiere1=0;}
if($_POST['lumiere2']!=0){$lumiere2 = $_POST['lumiere2'];}else{$lumiere2=0;}

if(isset($_POST['auchoix'])){$auchoix = $_POST['auchoix'] * ($lumiere1 + $lumiere2) ;}

/****************************************/

if(isset($_POST['podium'])){$podium = $_POST['podium'];}

if(isset($_POST['Ecran'])){$Ecran = $_POST['Ecran'];}

/*****************************/

if(isset($_POST['chaise'])){$chaise = $nbr_chaise * 2;}
if(isset($_POST['tr'])){$tr = $nbr_tr * 10;}
if(isset($_POST['tb'])){$tb = $nbr_tb * 10;}
if(isset($_POST['debout'])){$debout = $nbr_debout * 5;}

/*********************************************************************************/
$Fichier = fopen("compteur.txt","r+"); // on ouvre le fichier en lecture/écriture
$NbVisites = fgets($Fichier,4096);              // on récupère le nombre dans le fichier
  
ob_start();
?>
<style>
table{width:100%; border-collapse:collapse}
#information td{width:50%;}
#information tr{width:100%;}
#options tr{width:100%;}

.information_right{}
.information_left{padding-left:20px;}

.info_option{width:75%; 
			font-size:16px; 
			border-left: #0C9 1px solid;
			border-right: #0C9 1px solid;
			padding-left:20px;
			padding-bottom:10px;}

.prix_option{width:25%;
			text-align:right;
			font-size:16px;
			padding-right:40px;
			padding-bottom:10px;
			border-right: #0C9 1px solid;
			}

.condition_tab{width:100%; padding-top:70px;}
.condition_tab th{padding-bottom:10px;}
.condition_tab td{padding-bottom:15px;}
</style>
<page backtop="10mm" backleft="10mm" backright="10mm" backbottom="30mm" backimg="imgaes/une.jpeg">
</page>
<page backtop="40mm" backleft="10mm" backright="10mm" backbottom="30mm" backimg="imgaes/A4C.png">
<page_header backbottom="100mm" backtop="10mm">
<!--Information Client-->
<table>
	<tr>
    	<td style="width:50%; border-top:#0C9 solid 1px; border-bottom:#0C9 solid 1px; padding-bottom:20px; padding-top:20px;"><img src="imgaes/logo.png" width="270" height="77"/></td>
        <td style="width:50%; border-top:#0C9 solid 1px; border-bottom:#0C9 solid 1px; padding-bottom:20px; padding-top:20px;"><img src="imgaes/info.png" width="370" height="67"/></td>
    </tr>
    <tr><td><br /></td></tr>
	<tr><td><br /></td></tr>
</table>
</page_header>
<!--Information -->
<table style=" margin-top:20px;" id="information">
    <tr>
    	<td class="information_right">Devis en ligne N°: <b>E<?php echo sprintf('%05d', $NbVisites);?></b></td>
        <td class="information_left">Date: <b><?php echo date("d/m/Y");?></b></td>
    </tr>
    <tr><td><br /></td></tr>
	<tr>
    	<td class="information_right">Nom: <b><?php echo $name;?></b></td>
    	<td class="information_left">Société: <b><?php echo $company;?></b></td>
    </tr>
    <tr><td><br /></td></tr>
    <tr>
    	<td class="information_right">E-mail: <b><?php echo $email;?></b></td>
        <td class="information_left">Gsm: <b><?php echo $phone;?></b></td>
    </tr>
    <tr>
    	<td><br /></td>
        <td><br /></td>
    </tr>
    <tr>
    	<td colspan="2" style="color:#093;">___ Information</td>
    </tr>
    <tr><td><br /></td></tr>
    <tr>
    	<td class="information_right">Date de l'événement: <b><?php echo $date;?></b></td>
        <td class="information_left">Type de l'événement: <b><?php echo $event;?></b></td>
    </tr>
     <tr><td><br /></td></tr>
    <tr class="ligne_info">
    	<td class="information_right">Capacity: <b><?php echo $capacity;?></b></td>
        <td class="information_left">Horaire: <b><?php echo $titre_horaire;?></b></td>
    </tr>
</table>

<!--Les options-->

<!--obligatoire-->
<table style=" margin-top:30px;" id="options">
	<tr>
    	<td class="info_option" style="border-top: #0C9 1px solid; padding-top:10px;">Réservation de la salle</td>
        <td class="prix_option" style="border-top: #0C9 1px solid; padding-top:10px;"><?php echo $horaire;?>,00 €</td>
    </tr>
        
    <!--Charger energitique-->
     
    <tr>
    	<td class="info_option">Charges énergétiques</td>
        <td class="prix_option"><?php echo $charges;?>,00 €</td>
    </tr>
    
    <!--nettoyage-->
     
    <tr>
    	<td class="info_option">Nettoyage</td>
        <td class="prix_option"><?php echo $nettoyage;?>,00 €</td>
    </tr>
    
    <!--Regisseur-->
     
    <tr>
    	<td class="info_option">Régisseur</td>
        <td class="prix_option"><?php echo $regisseur;?>,00 €</td>
    </tr>
    
    <!--Dame de cours-->
     
   	<tr>
    	<td class="info_option">Dame de cours</td>
        <td class="prix_option"><?php echo $dame;?>,00 €</td>
    </tr>
        
    <!--Securité-->
      
     <?php if(isset($securite))
		{
		echo'
    <tr>
    	<td class="info_option">'.$nbagent.' agent de Securité</td>
        <td class="prix_option">'.$securite.',00 €</td>
    </tr>
			';
    	}
		?>			
     
     <!--Matériel Eclairage-->

   	<tr>
    	<td class="info_option">Matériel Eclairage</td>
        <td class="prix_option"><?php echo $eclairage;?>,00 €</td>
    </tr>
        
      <!--Permanance-->
      
     
   <tr>
    	<td class="info_option">Permanence</td>
        <td class="prix_option"><?php echo $permanence;?>,00 €</td>
    </tr>

<!--**********************************************-->
<!--ACCUEIL-->

	<!--VIP-->
    <?php if(isset($vip))
		{
		echo'
    <tr>
    	<td class="info_option">Espace VIP</td>
        <td class="prix_option">'.$vip.',00 €</td>
    </tr>
			';
    	}
		?>
     
     <!--Valley-->
     
   	<?php if(isset($valley))
		{
		echo'
    <tr>
    	<td class="info_option">'.$nbvalley.' Valley</td>
        <td class="prix_option">'.$valley.',00 €</td>
    </tr>
			';
    	}
		?>
        
        <!--Réceptionniste-->
     
   	<?php if(isset($receptionniste))
		{
		echo'
    <tr>
    	<td class="info_option">'.$nbreceptionniste.' Réceptionniste</td>
        <td class="prix_option">'.$receptionniste.',00 €</td>
    </tr>
			';
    	}
		?>   
        
        <!--vestiaire-->
     
   	<?php if(isset($vestiaire))
		{
		echo'
    <tr>
    	<td class="info_option">'.$nbvestiaire.' vestiaire</td>
        <td class="prix_option">'.$vestiaire.',00 €</td>
    </tr>
			';
    	}
		?>
        
        <!--Hôtessse-->
     
   	<?php if(isset($hotesse))
		{
		echo'
    <tr>
    	<td class="info_option">'.$nbhotesse.' Hôtessse</td>
        <td class="prix_option">'.$hotesse.',00 €</td>
    </tr>
			';
    	}
		?> 
        
        <!--Serveur-->
     
   	<?php if(isset($serveur))
		{
		echo'
    <tr>
    	<td class="info_option">'.$nbserveur.' Serveur(e)</td>
        <td class="prix_option">'.$serveur.',00 €</td>
    </tr>
			';
    	}
		?> 
        
        <!--Barman-->
     
   	<?php if(isset($barman))
		{
		echo'
    <tr>
    	<td class="info_option">'.$nbbarman.' Barman</td>
        <td class="prix_option">'.$barman.',00 €</td>
    </tr>
			';
    	}
		?> 
        
        <!--ParkingBoy-->
     
   	<?php if(isset($parkingb))
		{
		echo'
    <tr>
    	<td class="info_option">'.$nbparkingb.' ParkingBoy</td>
        <td class="prix_option">'.$parkingb.',00 €</td>
    </tr>
			';
    	}
		?> 
        
        <!--Parking-->
     
   	<?php if(isset($parking))
		{
		echo'
    <tr>
    	<td class="info_option">'.$places.' place Parking</td>
        <td class="prix_option">'.$parking.',00 €</td>
    </tr>
			';
    	}
		?>
<!--****************************************************-->
<!--CATERING & CO-->
        
     <!--Pause-café, avec bar-->
     
   	<?php if(isset($cafe))
		{
		echo'
    <tr>
    	<td class="info_option">Pause-café, avec bar</td>
        <td class="prix_option">'.$cafe.',00 €</td>
    </tr>
			';
    	}
		?>
    <!--catering-->
     
   	<?php if(isset($catering))
		{
		echo'
    <tr>
    	<td class="info_option">Catering</td>
        <td class="prix_option">'.$catering.',00 €</td>
    </tr>
			';
    	}
		?>
        
    <!--Zone treteure-->
     
   	<?php if(isset($traiteur))
		{
		echo'
    <tr>
    	<td class="info_option">traiteur</td>
        <td class="prix_option">'.$traiteur.',00 €</td>
    </tr>
			';
    	}
		?>
<!--******************************************************-->
<!--TECHNIQUE-->        
        
       <!--Wifi-->
     
   	<?php if(isset($wifi))
		{
		echo'
    <tr>
    	<td class="info_option">Wifi</td>
        <td class="prix_option">'.$wifi.',00 €</td>
    </tr>
			';
    	}
		?>
      <!--tweetwall-->
     
   	<?php if(isset($tweetwall))
		{
		echo'
    <tr>
    	<td class="info_option">'.$utilisation.'h Tweet Wall</td>
        <td class="prix_option">'.$tweetwall.',00 €</td>
    </tr>
			';
    	}
		?>
       
      <!--Matériel Son-->
     
   	<?php if(isset($son))
		{
		echo'
    <tr>
    	<td class="info_option">Matériel Son</td>
        <td class="prix_option">'.$son.',00 €</td>
    </tr>
			';
    	}
		?>
        
     <!--Régisseur Pré-Production-->
     
   	<?php if(isset($regisseur2))
		{
		echo'
    <tr>
    	<td class="info_option">Régisseur Pré-Production</td>
        <td class="prix_option">'.$regisseur2.',00 €</td>
    </tr>
			';
    	}
		?>
     
      <!--DJ-->
     
   	<?php if(isset($dj))
		{
		echo'
    <tr>
    	<td class="info_option">'.$play.'h DJ</td>
        <td class="prix_option">'.$dj.',00 €</td>
    </tr>
			';
    	}
		?>
<!-- Matériel Audio-Visuel | Projecteurs latéraux-->
 
     <!--Package RDC-->
   	<?php if(isset($rdc))
		{
		echo'
    <tr>
    	<td class="info_option">Package RDC </td>
        <td class="prix_option">'.$rdc.',00 €</td>
    </tr>
			';
    	}
		?>
        <!--Package Mezz-->
        <?php if(isset($mezz))
		{
		echo'
    <tr>
    	<td class="info_option">Package Mezz</td>
        <td class="prix_option">'.$mezz.',00 €</td>
    </tr>
			';
    	}
		?>
        <!--Au choix-->
        <?php if(isset($auchoix))
		{
		echo'
    <tr>
    	<td class="info_option">Projecteur au choix</td>
        <td class="prix_option">'.$auchoix.',00 €</td>
    </tr>
			';
    	}
		?>
<!--Podium-->
     
   	<?php if(isset($podium))
		{
		echo'
    <tr>
    	<td class="info_option">Projecteur podium  </td>
        <td class="prix_option">'.$podium.',00 €</td>
    </tr>
			';
    	}
		?>
<!--*****************************************************************-->  
 <!--Grand écran HD-->
     
   	<?php if(isset($Ecran))
		{
			if($Ecran==1000){$text_ecrant='Grand écran All-In';}
			if($Ecran==500){$text_ecrant='Grand écran';}
			if($Ecran==250){$text_ecrant='Grand écran HD';}
		echo'
    <tr>
    	<td class="info_option">'.$text_ecrant.'</td>
        <td class="prix_option">'.$Ecran.',00 €</td>
    </tr>
			';
    	}
		?>

<!--*****************************************************************-->
<!--Mobilier de base-->
      
      <!--Chaises-->
     
   	<?php if(isset($chaise))
		{
		echo'
    <tr>
    	<td class="info_option">'.$nbr_chaise.' Chaises</td>
        <td class="prix_option">'.$chaise.',00 €</td>
    </tr>
			';
    	}
		?>
        
        
       <!--Tables rondes-->
     
   	<?php if(isset($tr))
		{
		echo'
    <tr>
    	<td class="info_option">'.$nbr_tr.' Tables rondes</td>
        <td class="prix_option">'.$tr.',00 €</td>
    </tr>
			';
    	}
		?>
        
        <!--Tables de banquet-->
     
   	<?php if(isset($tb))
		{
		echo'
    <tr>
    	<td class="info_option">'.$nbr_tb.' Tables de banquet</td>
        <td class="prix_option">'.$tb.',00 €</td>
    </tr>
			';
    	}
		?>
        
        <!--Mange-Debout-->
     
   	<?php if(isset($debout))
		{
		echo'
    <tr>
    	<td class="info_option">'.$nbr_debout.' Mange-Debout</td>
        <td class="prix_option">'.$debout.',00 €</td>
    </tr>
			';
    	}
		?>
    
  
     <tr>
     	<td style="border-bottom:#0C9 1px solid;"></td>
        <td style="border-bottom:#0C9 1px solid;"></td>
     </tr>
    <tr>
    	<td class="info_option" style="border-top: #0C9 1px solid; padding-top:10px; font-size:10px;">Tous nos prix s'entendent hors TVA,</td>
        <td class="prix_option" style="border-top: #0C9 1px solid; padding-top:10px;"><?php echo $somme ?>,00 €</td>
    </tr>
    <tr>
    	<td class="info_option" style="font-size:10px;">Les taux de TVA varient selon le type de services et prestations.</td>
        <td class="prix_option"></td>
    </tr>
    <tr>
    	<td class="info_option" style="font-size:10px;">Validité: 10 jours</td>
        <td class="prix_option"></td>
    </tr>


</table>
</page>
<page backtop="40mm" backleft="10mm" backright="10mm" backbottom="20mm" backimg="imgaes/A4C.png">
<page_header backbottom="100mm" backtop="10mm">
<table>
	<tr>
    	<td style="width:50%; border-top:#0C9 solid 1px; border-bottom:#0C9 solid 1px; padding-bottom:20px; padding-top:20px;"><img src="imgaes/logo.png" width="270" height="77"/></td>
        <td style="width:50%; border-top:#0C9 solid 1px; border-bottom:#0C9 solid 1px; padding-bottom:20px; padding-top:20px;"><img src="imgaes/info.png" width="370" height="67"/></td>
    </tr>
    <tr><td><br /></td></tr>
	<tr><td><br /></td></tr>
</table>
</page_header>
<table>
	<tr>
    	<td style="font-size:17px; text-align:center; width:100%;">Contrat d'organisation d'événement</td>
    </tr>
</table>
<table class="condition_tab">
    <tr>
    	<th>Article 1 : Désignation du lieu de l'évènement</th>
    </tr>
    <tr>
    	<td>Le présent contrat concerne l’espace dénommée CLARIDGE EVENTS située <b>Chaussée de Louvain
24, 1210 Saint-Josse-ten-Noode</b> ainsi que ses dépendances qui sont désignées cidessous
[préciser les dépendances qui sont mises à disposition de l’organisateur, à savoir parking,
vestiaires ou jardin].</td>
    </tr>
    <tr>
    	<th>Article 2 : Équipements mis à disposition de l’organisateur</th>
    </tr>
    <tr>
        <td>Le bailleur s’engage à mettre à la disposition de l’organisateur [nature des équipements que le
locataire pourra utiliser]. Ce matériel devra être restitué en parfait état de propreté et de fonctionnement.
Un inventaire de ce matériel sera effectué lors des états des lieux qui seront dressés à
l’entrée et à la sortie de la salle.</td>
    </tr>
    
    <tr>
    	<th>Article 3 : Utilisation des lieux exploités </th>
    </tr>
    <tr>
        <td>L’organisateur dispose de la salle pour organiser .<b><?php echo $event ?></b></td>
    </tr>
    
    <tr>
    	<th>Article 4 : Début et fin du contrat de location</th>
    </tr>
    <tr>
        <td>L’organisateur dispose de la salle à partir du <b><?php echo $date ?></b> à <b><?php echo substr($titre_horaire, 3, 3);?></b> jusqu’au <b><?php echo $date ?></b> à <b><?php echo substr($titre_horaire, 10, 13);?></b>. Afin que
l’état des lieux d’entrée puisse être dressé, il s’engage à se présenter le jour du début de la disposition
à <?php echo substr($titre_horaire, 3, 3);?>.<br />À la fin de l'évènement , L’organisateur devra restituer la salle à l’heure prévue. Il devra rester le
temps nécessaire pour permettre l'établissement de l’état des lieux de sortie. Il s’engage à rendre
les lieux dans un état de propreté identique à celui qu’il aura constaté lors du début de la mise à
disposition.</td>
    </tr>
    
    <tr>
    	<th>Article 5 : Obligations du Prestataires </th>
    </tr>
    <tr>
        <td>Le Prestataire est tenu de mettre le local à la disposition de l’organisateur à la date et à l’heure
convenues pour le début de la mise à disposition. Il est précisé qu’en cas d’accident ou d’incendie,
sa responsabilité ne sera engagée que s’il n’y a pas plus de <b><?php echo $capacity ?></b> personnes présentes lors
de l’événement organisé par le preneur.<br />En outre, il est tenu d’assurer le chauffage de la salle pendant toute la location</td>
    </tr>
    
    <tr>
    	<th>Article 6 : Obligations de l’ organisateur</th>
    </tr>
    <tr>
        <td>Le preneur s’engage à :<br /><br />payer les arrhes, soit [x] € et le dépôt de garantie, soit [x] € lors de la signature du présent
contrat ;<br />payer le solde de la mise à disposition soit <b><?php echo $somme ?></b> € au plus tard le <b><?php echo date('d/m/Y', strtotime($Date. ' + 10 days'))?></b>;<br /><br />fournir au prestataires une attestation certifiant qui a souscrit une assurance en responsabilité
civile en vue de couvrir tout dégât qui serait causé dans les locaux loués pendant la location.<br />Il est précisé que le présent contrat sera résilié de plein droit si une somme quelconque n’était
pas payée à son échéance ou si un chèque émis par l’organisateur n’était pas honoré par sa
banque.</td>
    </tr>
    
      <tr>
    	<th>Article 7 : Contentieux</th>
      </tr>
      <tr>
        <td>Tout litige relatif à l’exécution du présent contrat sera soumis à défaut d’accord amiable aux tribunaux
dont dépend le siège social du bailleur.</td>
    </tr>
</table>
</page>
<page backtop="40mm" backleft="10mm" backright="10mm" backbottom="20mm" backimg="imgaes/A4C.png">
<page_header backbottom="100mm" backtop="10mm">
<table >
	<tr>
    	<td style="width:50%; border-top:#0C9 solid 1px; border-bottom:#0C9 solid 1px; padding-bottom:20px; padding-top:20px;"><img src="imgaes/logo.png" width="270" height="77"/></td>
        <td style="width:50%; border-top:#0C9 solid 1px; border-bottom:#0C9 solid 1px; padding-bottom:20px; padding-top:20px;"><img src="imgaes/info.png" width="370" height="67"/></td>
    </tr>
    <tr><td><br /></td></tr>
	<tr><td><br /></td></tr>
</table>
</page_header>
<table class="condition_tab">
    <tr>
    	<th>Article 8 : Sous-location</th>
   	</tr>
    <tr>
        <td>Il est interdit au preneur de consentir une quelconque location des locaux loués.
( je ne vois pas comment modifier cela)</td>
    </tr>
    
      <tr>
    	<th>Article 9 : Fournitures que le prestataire met à disposition de l’organisateur</th>
    </tr>
    <tr>
        <td>Le prestataire met à disposition de l’organisateur les fournitures suivantes [préciser si le bailleur
fournit au preneur des serviettes de table, de la vaisselle ou d’autres fournitures].Toutes autres
fournitures sont à la charge de l’organisateur.</td>
    </tr>
    
    <tr>
    	<th>Article 10 : Règlement intérieur</th>
    </tr>
    <tr>
        <td>1. Lumière<br /><br />
        • L’éclairage de la salle ne pourra être ni démonté, ni modifié. des emplacements sont prévus
pour des appareils.<br /><br />
• Tous matériels démonté et non remis en place sera facturés 50 € par heure entamée.<br /><br />
2. Musique<br /><br />Des détecteurs de DB sont installés dans les salles et limités à 103 DB, tous dégâts éventuels
causés aux appareils dus à la coupure seront à charge du client et il veillera à ce que le volume
sonore soit coupé à 2h00 précises.</td>
    </tr>
    
    <tr>
    	<th>11. Décorations</th>
    </tr>
    <tr>
        <td>• L’utilisateur ne pourra rien enlever, fixer et déplacer des murs et des plafonds. Aucune décoration
ne peut être ni clouée, ni épinglée (tout système de fixation peut être imaginé), directement
sur les tables, sur les chaises, sur les murs et les poutrelles des salles, avec notre autorisation
et à la seule condition de ne pas détériorer les parois existantes.<br /><br />
• Les matériaux et éléments de décorations doivent répondre au règlement en vigueur concernant
la sécurité (incendie, ...). Toute la décoration devra être enlevée après la soirée. Tous
travaux préparatoires seront exécutés par le client, dans le respect des règles de sécurité, sans
nuire au bon fonctionnement de la salle en question et des activités en cours.<br /><br />
• Aucun élément de décoration ou autres ne peut se trouver devant les issues de secours et les
escaliers y menant.<br /><br />
• Nous nous réservons le droit de faire démonter toute installation que nous estimerions non conforme
ou dangereuse.<br /><br />
• Tous matériels démonté et non remis en place sera facturés.</td>
    </tr>
</table>
</page>
<page backtop="40mm" backleft="10mm" backright="10mm" backbottom="20mm" backimg="imgaes/A4C.png">
<page_header backbottom="100mm" backtop="10mm">
<table>
	<tr>
    	<td style="width:50%; border-top:#0C9 solid 1px; border-bottom:#0C9 solid 1px; padding-bottom:20px; padding-top:20px;"><img src="imgaes/logo.png" width="270" height="77"/></td>
        <td style="width:50%; border-top:#0C9 solid 1px; border-bottom:#0C9 solid 1px; padding-bottom:20px; padding-top:20px;"><img src="imgaes/info.png" width="370" height="67"/></td>
    </tr>
    <tr><td><br /></td></tr>
	<tr><td><br /></td></tr>
</table>
</page_header> 
<table class="condition_tab">   
    <tr>
    	<th>12. Les locaux</th>
    </tr>
    <tr>
        <td>• Le vestiaire et la loge peuvent être utilisées pour autant qu’elles aient fait l’objet d’une demande
lors de la signature du contrat.<br /><br />
								
• Les Toilettes sont mises à votre disposition, tenu par une dame de cour 30 eur/h.<br /><br /> 	 	
			
• Nous mettons à votre disposition des tables et des chaises en fonction de votre demande , la
disposition et le dressage devront être établis par nos soins,<br /><br />
• Le client ne peut utiliser que les locaux qui ont été mis à sa disposition.</td>
    </tr>
    
    <tr>
    	<th>13. Parking</th>
    </tr>
    <tr>
        <td>Le parking Scailquin est à votre disposition à un tarif préférentiel selon les conditions de celui-ci. </td>
    </tr>
    
    <tr>
    	<th>14. Sécurité</th>
    </tr>
    <tr>
        <td>• L’accès aux locaux utilisé devra être contrôlé d’une manière stricte.<br /><br />
• En fonction du type d’événement , il sera exigé par 200 personnes attendues, 1 à 2 stewards,
afin d’éviter tout problème éventuel à l’intérieur et/ou à l’extérieur du bâtiment.<br /><br />
• Si lors de la location, la manifestation prévue dégénère (bruits importants, dégâts, bagarres, nuisances
diverses, ...), le responsable des lieux est tenu obligatoirement de faire arrêter ladite manifestation
; si besoin, il fera appel aux forces de l’ordre.</td>
    </tr>
    
    <tr>
    	<th>15. Nettoyage</th>
    </tr>
    <tr>
        <td>• La remise en ordre des locaux devra être effectuée immédiatement après utilisation , le client
devra remettre tous le(s) local(aux) occupé(s) ainsi que les couloirs y donnant accès dans l’état
dans lequel il en a pris possession.<br /><br />
• Le locataire devra nettoyer et ranger tous les locaux occupés ainsi que les ustensiles, les appareils,
les fournitures et le matériel mis à sa disposition (frigos, pompe à bière, évier, cintres,
sono, chaises, etc. ...) et devra ranger les vidanges.<br /><br />
• Nous assurons le nettoyage à l’eau des sols de la salle et à l’enlèvement des déchets que vous
aurez soigneusement mis dans les sacs poubelles (sacs blanc pour les déchets divers et bleu
pour les bouteilles en plastique et gobelets). a récupérer le jour de l’événement </td>
    </tr>
    
    <tr>
    	<th>16. Non-respect des conditions</th>
    </tr>
    <tr>
        <td>Nous nous réservons le droit de refuser ou d’annuler en tout temps, toute évènement ne disposant
pas d’assez de garanties au niveau de son bon déroulement ; ne correspondant pas à nos
critères (ex : évènement à risques) ou de fait non précisés lors de la réservation, et cela sans
compensation financière.<br /><br />
Si nous constatons que le public ne correspond pas au type d'évènement d’écrit lors de la réservation,
que votre type d'évènement a déjà été considéré à risque lors d’autres manifestations ,
que la musique et le public ne correspondent pas à nos conditions, nous sommes en droit d’arre-
̂ter l'évènement et de faire évacuer les lieux.<br />
En cas d’annulation, aucun des montants que nous avons perçus ne vous sera remboursé.</td>
    </tr>
</table>
</page>
<page backtop="40mm" backleft="10mm" backright="10mm" backbottom="20mm" backimg="imgaes/A4C.png">
<page_header backbottom="100mm" backtop="10mm">
<table>
	<tr>
    	<td style="width:50%; border-top:#0C9 solid 1px; border-bottom:#0C9 solid 1px; padding-bottom:20px; padding-top:20px;"><img src="imgaes/logo.png" width="270" height="77"/></td>
        <td style="width:50%; border-top:#0C9 solid 1px; border-bottom:#0C9 solid 1px; padding-bottom:20px; padding-top:20px;"><img src="imgaes/info.png" width="370" height="67"/></td>
    </tr>
    <tr><td><br /></td></tr>
	<tr><td><br /></td></tr>
</table>
</page_header>
<table class="condition_tab">
    <tr>
    	<th>17. Publicité</th>
    </tr>
    <tr>
        <td>• Toute amende ou sanction dû à un affichage interdit sera à charge du client .<br /><br />
• Sur toute publicité annonçant votre évènement publique, vous devrez obligatoirement indiqué
les informations suivantes :<br /><br />
						
- ne pas jeter sur la voie publique ;<br />
- pour le bon déroulement de la soirée veillé respecter le voisinage ;<br />
- le non respect du voisinage peut entraîner l’annulation de l’événement ;<br />
- coordonnées de l’éditeur responsable ;<br /><br />
La maquette devra nous être présentée avant impression, et ne pourra être imprimé et diffuser
qu’après notre accord écrit.<br /><br />
En cas de non-respect nous seront en droit d’annuler la mise à disposition sans préavis.</td>
    </tr>
    
    <tr>
    	<th>18. Traiteur</th>
    </tr>
    <tr>
        <td>• Vous êtes libre de travailler avec le traiteur de votre choix.<br />	 	 	
• Un coin traiteur est mis à la disposition selon les conditions préalablement
convenu</td>
    </tr>
    
    <tr>
    	<th>19. Facturation</th>
    </tr>
    <tr>
        <td>S’il y a paiement hors délais de la facture vous étant adressée, le dossier sera remis entre les
mains d’un avocat qui se chargera de recouvrir les montants par voie de justice et il se verra
porter en compte des intérêts de retard au taux légal ainsi que des frais de constitution de
dossier.</td>
    </tr>
    
    <tr>
    	<th>20. Chargement</th>
    </tr>
    <tr>
        <td>Aucun matériel ne pourra être rechargé dans la rue avant 8h du matin. </td>
    </tr>
    
    <tr>
    	<th>21. Bruit</th>
    </tr>
    <tr>
        <td>Le locataire veillera auprès de chacun de ses convives pour qu’après l’événement les départs
se fassent en respectant le repos du voisinage.</td>
    </tr>
</table>
</page>
<page backtop="40mm" backleft="10mm" backright="10mm" backbottom="20mm" backimg="imgaes/A4C.png">
<page_header backbottom="100mm" backtop="10mm">
<table>
	<tr>
    	<td style="width:50%; border-top:#0C9 solid 1px; border-bottom:#0C9 solid 1px; padding-bottom:20px; padding-top:20px;"><img src="imgaes/logo.png" width="270" height="77"/></td>
        <td style="width:50%; border-top:#0C9 solid 1px; border-bottom:#0C9 solid 1px; padding-bottom:20px; padding-top:20px;"><img src="imgaes/info.png" width="370" height="67"/></td>
    </tr>
    <tr><td><br /></td></tr>
	<tr><td><br /></td></tr>
</table>
</page_header>
<table class="condition_tab">

    <tr>
    	<th>22. Interdiction de fumer</th>
    </tr>
    <tr>
    <td>Depuis le 1er juillet 2011, l’interdiction de fumer est d’application dans l’ensemble des lieux
publics fermés.<br />
L’organisateur est tenu de l’obligation de veiller au respect de l’application de la loi et sera seul
responsable en cas de contrôle.<br /><br />
			 			
Il sera encore permis de fumer dans les différents pièces spécialement aménagé en fumoir, mais
ne peut être une zone de transit et seules des boissons peuvent y être emportées. Le service de
boissons ou de nourriture y est donc interdit mais également la présence de tous les types de distributeurs
automatiques.<br /><br />
						
Cette location est accordée et acceptée par les parties en cause moyennant la stricte observation
des conditions générales.<br /><br />
Chacune des parties reconnaît avoir reçu un exemplaire de la présente. En cas de contestation,
seuls les tribunaux de Bruxelles resteront compétents pour trancher toutes les contestations
généralement quelconques pouvant naître du présent règlement ainsi que du contrat de location
établi entre les parties.<br /><br />
						
Tous les frais de procédure seront à charge du locataire. </td>
    </tr>
    </table>
    <table style="padding-top:30px;">
    <tr>
    	<td style="width:50%;">
        	<p>Client</p><br />
            <p>Brussels, ........../........../..........</p><br />
        </td>
        
        <td style="width:50%;">
        	<p>Client</p><br />
            <p>Brussels, ........../........../..........</p><br />
        </td>
    </tr>
</table>
</page>


<!--Generation du pdf-->
<?php
$content = ob_get_clean();

require('html2pdf/html2pdf.class.php');

try{
	//incremontaion du numero de devis	
	$NbVisites++;                                 // on incrémente le nombre de visites de + 1
	fseek($Fichier,0);                            // on se place en début de fichier
	fputs($Fichier,$NbVisites);                   // on écrit dans le fichier lenombre incrémenté
	fclose($Fichier);
	//Creation du pdf
	$pdf=new HTML2PDF('p','A4','fr');
	$pdf->writeHTML($content);
	$nom_fichier='devis_claridge_'.rand().'.pdf';
	$pdf->output("devis/".$nom_fichier, 'F');
	$fichier = "http://www.claridge.be/online/devis/".$nom_fichier;
	
	//envoi du mail 
	require 'PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;
	
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp-mail.outlook.com';  						// Specify main and backup SMTP servers  smtp-mail.outlook.com
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'claridge.be@outlook.be';                 // SMTP username 
	$mail->Password = 'Clari2015+';                          // SMTP password Clari2015+
	$mail->SMTPSecure = 'tls';                            	// Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to
	$mail->From = 'claridge.be@outlook.com';
	$mail->FromName = 'Claridge Events';
	$mail->addAddress($email, $name );     // Add a recipient
	$mail->addAddress('contact@claridge.be', 'Devis en ligne' );     // Add a recipient*/
	$mail->addReplyTo('claridge.be@outlook.be' , 'Information');
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = 'Devis en ligne Claridge Events';
	$mail->Body    = '<body style="margin:0px; padding:0px; -webkit-text-size-adjust:none;">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#C4D9C8" >
        <tbody>
            <tr>
                <td align="center" bgcolor="#C4D9C8">
                    <table  cellpadding="0" cellspacing="0" border="0">
                        <tbody>                            
                            <tr>
                                <td class="w640"  width="640" height="10"></td>
                            </tr>
                            <tr>
                                <td class="w640"  width="640" height="10"></td>
                            </tr>


                            <!-- entete -->
                            <tr class="pagetoplogo">
                                <td class="w640"  width="640">
                                    <table  class="w640"  width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#F2F0F0">
                                        <tbody>
                                            <tr>
                                                <td class="w30"  width="30"></td>
                                                <td  class="w580"  width="350" valign="middle" align="left">
                                                    <div class="pagetoplogo-content" align="center">
                                                        <img class="w580" style="text-decoration: none; display: block; color:#476688; font-size:30px;" src="http://www.claridge.be/online/imgaes/logo.png" alt="Claridge Events" width="320" height="91"/>
                                                    </div>
                                                </td> 
                                                <td class="w30"  width="30"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <!-- separateur horizontal -->
                            <tr>
                                <td  class="w640"  width="640" height="1" bgcolor="#d7d6d6"></td>
                            </tr>

                             <!-- contenu -->
                            <tr class="content">
                                <td class="w640" class="w640"  width="640" bgcolor="#ffffff">
                                    <table class="w640"  width="640" cellpadding="0" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td  class="w30"  width="30"></td>
                                                <td  class="w580"  width="580">
                                                    <!-- une zone de contenu -->
                                                    <table class="w580"  width="580" cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>                                                            
                                                            <tr>
                                                                <td class="w580"  width="580">
                                                                    <div align="left" class="article-content">
																		<p><br/></p>
                                                                        <p> Devis pour la reservation de la salle claridge</p>
																		<p>Cher(e) <b>'.$name.'</b></p>
                                                                        <p>vous trouverez ci jointes votre devis en format PDF en ligne.</p>
                                                                        <p><a href="'.$fichier.'">Cliquez ici pour telecharger votre devis</a></p>
																		<p>Le jour de visite que vous avez choisie est le '.$visite.'</p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w580"  width="580" height="1" bgcolor="#c7c5c5"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- fin zone -->                                                   

                                                    <!-- une autre zone de contenu -->
                                                    <table class="w580"  width="580" cellpadding="0" cellspacing="0" border="0">
                                                        <tbody>                                                            
                                                            <tr>
                                                                <td class="w580"  width="580">
                                                                    <h2 style="color:#0E7693; font-size:22px; padding-top:12px;">
                                                                        Claridge Events </h2>

                                                                    <div align="left" class="article-content">
                                                                        <p>Pour plus d \'information veuillez nous contacter: </p>
                                                                        <p>
                                                                            <b>Email:</b> contact@claridge.be<br/><br/>
																			<b>Mobile:</b> +32 483 11 10 31<br/><br/>
																			<b>Address</b>:<br/><br/>
																			Chauss&eacute;e de Louvain 24 1210 - Saint-Josse-ten-Noode<br/>
																			 	
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w580"  width="580" height="1" bgcolor="#c7c5c5"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td class="w30" class="w30"  width="30"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <!--  separateur horizontal de 15px de  haut-->
                            <tr>
                                <td class="w640"  width="640" height="15" bgcolor="#ffffff"></td>
                            </tr>

                            <!-- pied de page -->
                            <tr class="pagebottom">
                                <td class="w640"  width="640">
                                    <table class="w640"  width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#c7c7c7">
                                        <tbody>
                                            <tr>
                                                <td colspan="5" height="10"></td>
                                            </tr>
                                            <tr>
                                                <td class="w30"  width="30"></td>
                                                <td class="w580"  width="580" valign="top">
                                                    <p align="right" class="pagebottom-content-left">
                                                        <a style="color:#255D5C;" href="www.claridge.be"><span style="color:#255D5C;">www.claridge.be</span></a>
                                                    </p>
                                                </td>

                                                <td class="w30"  width="30"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" height="10"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="w640"  width="640" height="128" ></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>';
	
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	
	if(!$mail->send()){header('location:reservation_acomplii.html'); } 
	
	else {header('location:reservation_acompli.html');}
		
	}

catch(HTML2PDF_exception $e){die($e);}
?>
