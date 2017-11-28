<!DOCTYPE html>

<head>
	<title>Claridge Events | Devis en ligne</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <script type="text/javascript" src="javascript.js"></script> -->
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>	
	<!-- Toujours d'abord mettre le jQuery et PUIS bootstrap car bootstrap a besoin de jQuery pour fonctionner -->
	<script type="text/javascript" src="./core/js/jquery.1.11.2.js"></script>
	<script type="text/javascript" src="./core/js/bootstrap.js"></script>
	
	<link rel="stylesheet" href="./core/css/bootstrap.css" />
	<link rel="stylesheet" href="./core/css/style.css" />
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    

</head>

<body>
<script>
 $(document).ready(function(){
	 $("form").submit(function(){
       $('#looad').css('visibility','visible'); 
      	
     });});
</script>
<div id="looad" >
 	<div id="gif"></div>
 </div>
<noscript>
    <p>You must have javascript enabled for the example div to show!</p>
</noscript>

<script>

function cocher_securite(){
	document.getElementById('securite').checked = true;
}

function cocher_dame(){
	document.getElementById('dame').checked = true;
}

function cocher_valley(){
	document.getElementById('valley').checked = true;
}

function cocher_recep(){
	document.getElementById('receptionniste').checked = true;
}

function cocher_vestiaire(){
	document.getElementById('vestiaire').checked = true;
}

function cocher_hotesse(){
	document.getElementById('hotesse').checked = true;
}

function cocher_serveur(){
	document.getElementById('serveur').checked = true;
}

function cocher_barman(){
	document.getElementById('barman').checked = true;
}

function cocher_parkingb(){
	document.getElementById('parkingb').checked = true;
}

function cocher_parking(){
	document.getElementById('parking').checked = true;
}

function cocher_tweetwall(){
	document.getElementById('tweetwall').checked = true;
}

function cocher_dj(){
	document.getElementById('dj').checked = true;
}

function cocher_chaise(){
	document.getElementById('chaise').checked = true;
}

function cocher_tb(){
	document.getElementById('tb').checked = true;
}

function cocher_tr(){
	document.getElementById('tr').checked = true;
}

function cocher_debout(){
	document.getElementById('debout').checked = true;
}
	
</script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker({
									minDate: 0, 
									altField: "#datepicker",
									closeText: 'Fermer',
									prevText: 'Précédent',
									nextText: 'Suivant',
									currentText: 'Aujourd\'hui',
									monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
									monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
									dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
									dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
									dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
									weekHeader: 'Sem.',
									dateFormat: 'dd/mm/yy'});

  });
</script>
<script>

function getSum(){
	
	// Déclarer ses variables pour pouvoir vérifier si elles ont bien été cochées

	// Mettre les horaires dans des variables
	// La durée de location dépend des horaires
	 matin6h = document.getElementById("formulaire").elements["matin6h"];
	 matin8h = document.getElementById("formulaire").elements["matin8h"];
	 aprem12h = document.getElementById("formulaire").elements["aprem12h"];
	 matin8h18h = document.getElementById("formulaire").elements["matin8h18h"];
	 soir18h = document.getElementById("formulaire").elements["soir18h"];
	 aprem14h = document.getElementById("formulaire").elements["aprem14h"];
	 allday = document.getElementById("formulaire").elements["allday"];

	 
	 // Prendre la valeur introduite
	 capacity = parseInt(document.getElementById("formulaire").elements["capacity"].value);
	 
	/*if(capacity != 0 || matin6h.checked || matin8h.checked || aprem12h.checked || matin8h18h.checked || soir18h.checked || aprem14h.checked){*/

	 // Custom Schedule
	 // horaireAuChoix = document.getElementById("formulaire").elements["horaireAuChoix"];

	 vip = document.getElementById("formulaire").elements["vip"];
	 charges = document.getElementById("formulaire").elements["charges"];
	 wifi = document.getElementById("formulaire").elements["wifi"];

	 tweetwall = document.getElementById("formulaire").elements["tweetwall"];
	 utilisation = parseInt(document.getElementById("formulaire").elements["utilisation"].value);

	 nettoyage = document.getElementById("formulaire").elements["nettoyage"];

	 regisseur1 = document.getElementById("formulaire").elements["regisseur1"];
	 regisseur2 = document.getElementById("formulaire").elements["regisseur2"];

	 // Home Cinema
	 gdEcran = document.getElementById("gdEcran");
	 gdEcranAll = document.getElementById("gdEcranAll");

	 catering = document.getElementById("formulaire").elements["catering"];
	 traiteur = document.getElementById("formulaire").elements["traiteur"];

	 dame = document.getElementById("formulaire").elements["dame"];
	 nbdame = parseInt(document.getElementById("formulaire").elements["nbdame"].value);
	 nbHDame = parseInt(document.getElementById("formulaire").elements["nbHDame"].value);

	 vestiaire = document.getElementById("formulaire").elements["vestiaire"];
	 nbvestiaire = parseInt(document.getElementById("formulaire").elements["nbvestiaire"].value);
	 nbHVestiaire = parseInt(document.getElementById("formulaire").elements["nbHVestiaire"].value);

	 //band = document.getElementById("formulaire").elements["band"];

	 valley = document.getElementById("formulaire").elements["valley"];
	 nbvalley = parseInt(document.getElementById("formulaire").elements["nbvalley"].value);
	 nbHValley = parseInt(document.getElementById("formulaire").elements["nbHValley"].value);

	 receptionniste = document.getElementById("formulaire").elements["receptionniste"];
	 nbreceptionniste = parseInt(document.getElementById("formulaire").elements["nbreceptionniste"].value);
	 nbHRecept = parseInt(document.getElementById("formulaire").elements["nbHRecept"].value);


	 hotesse = document.getElementById("formulaire").elements["hotesse"];
	 nbhotesse = parseInt(document.getElementById("formulaire").elements["nbhotesse"].value);
	 nbHHotesse = parseInt(document.getElementById("formulaire").elements["nbHHotesse"].value);

	 parkingb = document.getElementById("formulaire").elements["parkingb"];
	 nbparkingb = parseInt(document.getElementById("formulaire").elements["nbparkingb"].value);

	 securite = document.getElementById("formulaire").elements["securite"];
	 nbagent = parseInt(document.getElementById("formulaire").elements["nbagent"].value);
	 nbHAgent = parseInt(document.getElementById("formulaire").elements["nbHAgent"].value);

	 dj = document.getElementById("formulaire").elements["dj"];
	 play = parseInt(document.getElementById("formulaire").elements["play"].value);

	 // Serveur : nombre serveur * combien d'heures?
	 serveur = document.getElementById("formulaire").elements["serveur"];
	 nbserveur = parseInt(document.getElementById("formulaire").elements["nbserveur"].value);
	 nbHServeur = parseInt(document.getElementById("formulaire").elements["nbHServeur"].value);

	 barman = document.getElementById("formulaire").elements["barman"];
	 nbbarman = parseInt(document.getElementById("formulaire").elements["nbbarman"].value);
	 nbHBarman = parseInt(document.getElementById("formulaire").elements["nbHBarman"].value);

	 cafe = document.getElementById("formulaire").elements["cafe"];

	 // Prendre la valeur introduite
	 parking = document.getElementById("formulaire").elements["parking"];
	 places = parseInt(document.getElementById("formulaire").elements["places"].value);
	 nbHParkingb = parseInt(document.getElementById("formulaire").elements["nbHParkingb"].value);

	 // Prendre la valeur introduite
	 nbchaise = parseInt(document.getElementById("formulaire").elements["nbchaise"].value);
	 chaise = document.getElementById("formulaire").elements["chaise"];
	 // Prendre la valeur introduite
	 nbtr = parseInt(document.getElementById("formulaire").elements["nbtr"].value);
	 tr = document.getElementById("formulaire").elements["tr"];
	 // Prendre la valeur introduite
	 nbtb = parseInt(document.getElementById("formulaire").elements["nbtb"].value);
	 tb = document.getElementById("formulaire").elements["tb"];
	 // Prendre la valeur introduite
	 nbdebout = parseInt(document.getElementById("formulaire").elements["nbdebout"].value);
	 debout = document.getElementById("formulaire").elements["debout"];

	 son = document.getElementById("formulaire").elements["son"];
	 eclairage = document.getElementById("formulaire").elements["eclairage"];

	 // Projecteurs
	 // projecteur = document.getElementById("formulaire").elements["projecteur"];

	 rdc = document.getElementById("formulaire").elements["rdc"];
	 mezz = document.getElementById("formulaire").elements["mezz"];
	 auchoix = document.getElementById("formulaire").elements["auchoix"];

	 lumiere1 = document.getElementById("formulaire").elements["lumiere1"].value;
	 lumiere2 = document.getElementById("formulaire").elements["lumiere2"].value;

	 gdEcranT = document.getElementById("gdEcranT");
	 podium = document.getElementById("podium");

	 // Permanence
	 permanence = document.getElementById("formulaire").elements["permanence"];

	 //Visite Salle
	 visiteSalle = document.getElementById("formulaire").elements["visiteSalle"];

	 var totalvalue = 0;
	 document.myform.totalsum.value=totalvalue;
	 document.myform.totalsumreduc.value=totalvalue/2;


	// De 6 à 12h
	if(matin6h.checked){
		var matin6h = parseInt(document.getElementById("matin6h").value);
		totalvalue += matin6h;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
		
		// Options obligatoires
		document.getElementById("formulaire").elements["nettoyage"].checked=true;
		document.getElementById("formulaire").elements["regisseur1"].checked=true;
		document.getElementById("formulaire").elements["charges"].checked=true;
		// document.getElementById("formulaire").elements["dame"].checked=true;	
		document.getElementById("formulaire").elements["eclairage"].checked=true;
		document.getElementById("formulaire").elements["permanence"].checked=true;	

		if (capacity > 200){
			document.getElementById("formulaire").elements["securite"].checked=true;
		}else{
			 //document.getElementById("formulaire").elements["securite"].checked=false;
		}

		// Nombres d'heures
		var duree = 6;
		document.getElementById("formulaire").elements["duree"].value = duree;//stocker la duree pour le traitement php
		// Prix sécurité
		var security = 35;
		document.getElementById("formulaire").elements["securite"].value = security;

		//Permanence
		var option_permanence = 0;
		
		//recuperer le titre du horaire selectionner
		document.getElementById("titre_horaire").value = "De 06h à 12h";
	}
	// De 8 à 14h
	if(matin8h.checked){
		var matin8h = parseInt(document.getElementById("formulaire").elements["matin8h"].value);
		totalvalue += matin8h;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
		
		// Options obligatoires
		document.getElementById("formulaire").elements["nettoyage"].checked=true;
		document.getElementById("formulaire").elements["regisseur1"].checked=true;
		document.getElementById("formulaire").elements["charges"].checked=true;
		//document.getElementById("formulaire").elements["dame"].checked=true;	
		document.getElementById("formulaire").elements["eclairage"].checked=true;
		document.getElementById("formulaire").elements["permanence"].checked=true;	

		if (capacity > 200){
			document.getElementById("formulaire").elements["securite"].checked=true;
		}else{
			//document.getElementById("formulaire").elements["securite"].checked=false;
		}

		// Nombres d'heures
		var duree = 6;
		document.getElementById("formulaire").elements["duree"].value = duree;//stocker la duree pour le traitement php

		// Prix sécurité
		var security = 35;
		document.getElementById("formulaire").elements["securite"].value = security;

		//Permanence
		var option_permanence = 0;
		
		//recuperer le titre du horaire selectionner
		document.getElementById("titre_horaire").value = "De 08h à 14h";
		
	}
	// De 12 à 18h
	if(aprem12h.checked){
		var aprem12h = parseInt(document.getElementById("formulaire").elements["aprem12h"].value);
		totalvalue += aprem12h;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
		
		// Options obligatoires
		document.getElementById("formulaire").elements["nettoyage"].checked=true;
		document.getElementById("formulaire").elements["regisseur1"].checked=true;
		document.getElementById("formulaire").elements["charges"].checked=true;	
		//document.getElementById("formulaire").elements["dame"].checked=true;	
		document.getElementById("formulaire").elements["eclairage"].checked=true;
		document.getElementById("formulaire").elements["permanence"].checked=true;	

		if (capacity > 200){
			document.getElementById("formulaire").elements["securite"].checked=true;
		}else{
			// document.getElementById("formulaire").elements["securite"].checked=false;
		}

		// Nombres d'heures
		var duree = 6;
		document.getElementById("formulaire").elements["duree"].value = duree;//stocker la duree pour le traitement php

		// Prix sécurité
		var security = 35;
		document.getElementById("formulaire").elements["securite"].value = security;

		//Permanence
		var option_permanence = 0;
		
		//recuperer le titre du horaire selectionner
		document.getElementById("titre_horaire").value = "De 12h à 18h";
		
	}
	// De 8 à 18h
	if(matin8h18h.checked){
		var matin8h18h = parseInt(document.getElementById("formulaire").elements["matin8h18h"].value);
		totalvalue += matin8h18h;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
		
		// Options obligatoires
		document.getElementById("formulaire").elements["nettoyage"].checked=true;
		document.getElementById("formulaire").elements["regisseur1"].checked=true;
		document.getElementById("formulaire").elements["charges"].checked=true;	
		//document.getElementById("formulaire").elements["dame"].checked=true;	
		document.getElementById("formulaire").elements["eclairage"].checked=true;
		document.getElementById("formulaire").elements["permanence"].checked=true;	

		if (capacity > 200){
			document.getElementById("formulaire").elements["securite"].checked=true;
		}else{
			// document.getElementById("formulaire").elements["securite"].checked=false;
		}

		// Nombres d'heures
		var duree = 10;
		document.getElementById("formulaire").elements["duree"].value = duree;//stocker la duree pour le traitement php
		
		// Prix sécurité
		var security = 35;
		document.getElementById("formulaire").elements["securite"].value = security;

		var option_permanence = 4
		//document.getElementById("formulaire").elements["option_permanence"].value = option_permanence; // pour la permanance (si 6 ou +)
		
		//recuperer le titre du horaire selectionner
		document.getElementById("titre_horaire").value = "De 08h à 18h";
		
	}
	// De 18h à 24h
	if(soir18h.checked){
		var soir18h = parseInt(document.getElementById("formulaire").elements["soir18h"].value);
		totalvalue += soir18h;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
		
		// Options obligatoires
		document.getElementById("formulaire").elements["nettoyage"].checked=true;
		document.getElementById("formulaire").elements["regisseur1"].checked=true;
		document.getElementById("formulaire").elements["charges"].checked=true;	
		// document.getElementById("formulaire").elements["dame"].checked=true;
		document.getElementById("formulaire").elements["eclairage"].checked=true;	
		document.getElementById("formulaire").elements["permanence"].checked=true;	

		if (capacity > 200){
			document.getElementById("formulaire").elements["securite"].checked=true;
		}else{
			// document.getElementById("formulaire").elements["securite"].checked=false;
		}

		// Nombres d'heures
		var duree = 6;
		document.getElementById("formulaire").elements["duree"].value = duree;//stocker la duree pour le traitement php

		// Prix sécurité
		var security = 40;
		document.getElementById("formulaire").elements["securite"].value = security;

		//Permanence
		var option_permanence = 0;
		
		//recuperer le titre du horaire selectionner
		document.getElementById("titre_horaire").value = "De 18h à 24h";
		
	}
	// De 14h à 24h
	if(aprem14h.checked){
		var aprem14h = parseInt(document.getElementById("formulaire").elements["aprem14h"].value);
		totalvalue += aprem14h;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
		
		// Options obligatoires
		document.getElementById("formulaire").elements["nettoyage"].checked=true;
		document.getElementById("formulaire").elements["regisseur1"].checked=true;
		document.getElementById("formulaire").elements["charges"].checked=true;	
		// document.getElementById("formulaire").elements["dame"].checked=true;	
		document.getElementById("formulaire").elements["eclairage"].checked=true;
		document.getElementById("formulaire").elements["permanence"].checked=true;	

		if (capacity > 200){
			document.getElementById("formulaire").elements["securite"].checked=true;
		}else{
			// document.getElementById("formulaire").elements["securite"].checked=false;
		}

		// Nombres d'heures
		var duree = 10;
		document.getElementById("formulaire").elements["duree"].value = duree;//stocker la duree pour le traitement php

		// Prix sécurité
		var security = 40;
		document.getElementById("formulaire").elements["securite"].value = security;
		
		// document.getElementById("formulaire").elements["duree"].value =4; // pour la permanance (si 6 ou +)
		var option_permanence = 4
		// document.getElementById("formulaire").elements["option_permanence"].value = option_permanence;
		
		//recuperer le titre du horaire selectionner
		document.getElementById("titre_horaire").value = "14h à 24h";
		
	}
	// De 08 à 24h
	if(allday.checked){
		var allday = parseInt(document.getElementById("formulaire").elements["allday"].value);
		totalvalue += allday;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
		
		// Options obligatoires
		document.getElementById("formulaire").elements["nettoyage"].checked=true;
		document.getElementById("formulaire").elements["regisseur1"].checked=true;
		document.getElementById("formulaire").elements["charges"].checked=true;	
		// document.getElementById("formulaire").elements["dame"].checked=true;	
		document.getElementById("formulaire").elements["eclairage"].checked=true;
		document.getElementById("formulaire").elements["permanence"].checked=true;	

		if (capacity > 200){
			document.getElementById("formulaire").elements["securite"].checked=true;
		}else{
			// document.getElementById("formulaire").elements["securite"].checked=false;
		}

		// Nombres d'heures
		var duree = 16;
		document.getElementById("formulaire").elements["duree"].value = duree;//stocker la duree pour le traitement php

		// Prix sécurité
		// Variable intermédiaire entre 35 et 45 => 40 comme c'est toute la journée
		var security = 40;
		document.getElementById("formulaire").elements["securite"].value = security;
		
		// document.getElementById("formulaire").elements["duree"].value =4; // pour la permanance (si 6 ou +)
		var option_permanence = 10
		// document.getElementById("formulaire").elements["option_permanence"].value = option_permanence;
		
		//recuperer le titre du horaire selectionner
		document.getElementById("titre_horaire").value = "08 à 24h";
		
	}
	// 500€/heure supplémentaire 
	/*if(horaireAuChoix.checked){
		totalvalue = 0;
		document.myform.totalsum.value=totalvalue;
		var from = parseInt(document.getElementById("formulaire").elements["from"].value);
		var to = parseInt(document.getElementById("formulaire").elements["to"].value);
		var customDuree = to - from;
		if(customDuree >= 5){
			var customPrix = customDuree * 500;
			totalvalue += customPrix;
			document.myform.totalsum.value=totalvalue;
		} else {
			alert ('Veuillez choisir minimum 5 heures de location');
		}
		
	}*/
	if(vip.checked){
		var vip = parseInt(document.getElementById("formulaire").elements["vip"].value);
		totalvalue += vip;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(charges.checked){
		var charges = parseInt(document.getElementById("formulaire").elements["charges"].value);
		totalvalue += charges * duree;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(wifi.checked){
		var wifi = parseInt(document.getElementById("formulaire").elements["wifi"].value);
		totalvalue += wifi;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(tweetwall.checked){
		var tweetwall = parseInt(document.getElementById("formulaire").elements["tweetwall"].value);
		totalvalue += tweetwall * utilisation;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(nettoyage.checked){
		var nettoyage = parseInt(document.getElementById("formulaire").elements["nettoyage"].value);
		totalvalue += nettoyage;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(regisseur1.checked){
		var preprod = parseInt(document.getElementById("formulaire").elements["regisseur1"].value);
		totalvalue += preprod;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(regisseur2.checked){
		var postprod = parseInt(document.getElementById("formulaire").elements["regisseur2"].value);
		totalvalue += postprod;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(gdEcran.checked){
		var gdEcranPrix = parseInt(document.getElementById("formulaire").elements["gdEcran"].value);
		totalvalue += gdEcranPrix;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(gdEcranAll.checked){
		var gdEcranAllPrix = parseInt(document.getElementById("formulaire").elements["gdEcranAll"].value);
		totalvalue += gdEcranAllPrix;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(catering.checked){
		var catering = parseInt(document.getElementById("formulaire").elements["catering"].value);
		totalvalue += catering * capacity;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(traiteur.checked){
		var traiteur = parseInt(document.getElementById("formulaire").elements["traiteur"].value);
		totalvalue += traiteur;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(dame.checked){
		var dame = parseInt(document.getElementById("formulaire").elements["dame"].value);
		totalvalue += dame * nbHDame * nbdame;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(vestiaire.checked){
		var vestiaire = parseInt(document.getElementById("formulaire").elements["vestiaire"].value);
		totalvalue += vestiaire * nbHVestiaire * nbvestiaire;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(valley.checked){
		var valley = parseInt(document.getElementById("formulaire").elements["valley"].value);
		totalvalue += valley * nbvalley * nbHValley;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(receptionniste.checked){
	var receptionniste = parseInt(document.getElementById("formulaire").elements["receptionniste"].value);
	totalvalue += receptionniste * nbreceptionniste * nbHRecept;
	document.myform.totalsum.value=totalvalue;
	document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(parkingb.checked){
	var parkingb = parseInt(document.getElementById("formulaire").elements["parkingb"].value);
	totalvalue += parkingb * nbparkingb * nbHParkingb;
	document.myform.totalsum.value=totalvalue;
	document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(hotesse.checked){
	var hotesse = parseInt(document.getElementById("formulaire").elements["hotesse"].value);
	totalvalue += hotesse * nbhotesse * nbHHotesse;
	document.myform.totalsum.value=totalvalue;
	document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(barman.checked){
	var barman = parseInt(document.getElementById("formulaire").elements["barman"].value);
	totalvalue += barman * nbbarman * nbHBarman;
	document.myform.totalsum.value=totalvalue;
	document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(dj.checked){
		var music = parseInt(document.getElementById("formulaire").elements["dj"].value);
		totalvalue += music * play;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(serveur.checked){
		var serveur = parseInt(document.getElementById("formulaire").elements["serveur"].value);
		totalvalue += serveur * nbserveur * nbHServeur;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(cafe.checked){
		var cafe = parseInt(document.getElementById("formulaire").elements["cafe"].value);
		totalvalue += cafe * capacity;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(parking.checked){
		var parking = parseInt(document.getElementById("formulaire").elements["parking"].value);
		// var places = parseInt(document.getElementById("formulaire").elements["places"].value);
		totalvalue += parking * places * duree;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(chaise.checked){
		var chaise = parseInt(document.getElementById("formulaire").elements["chaise"].value);
		totalvalue += chaise * nbchaise;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(tb.checked){
		var tb = parseInt(document.getElementById("formulaire").elements["tb"].value);
		totalvalue += tb * nbtb;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(tr.checked){
		var tr = parseInt(document.getElementById("formulaire").elements["tr"].value);
		totalvalue += tr * nbtr;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(debout.checked){
		var debout = parseInt(document.getElementById("formulaire").elements["debout"].value);
		totalvalue += debout * nbdebout;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(son.checked){
		var son = parseInt(document.getElementById("formulaire").elements["son"].value);
		totalvalue += son;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(eclairage.checked){
		var eclairage = parseInt(document.getElementById("formulaire").elements["eclairage"].value);
		totalvalue += eclairage;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}

	// Projecteur
	/*if(projecteur.checked){
		var projecteur = parseInt(document.getElementById("formulaire").elements["projecteur"].value);
		totalvalue += projecteur;
		document.myform.totalsum.value=totalvalue;
	}*/
	if(rdc.checked){
		var vrdc = parseInt(document.getElementById("formulaire").elements["rdc"].value);
		totalvalue += vrdc;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(mezz.checked){
		var vmezz = parseInt(document.getElementById("formulaire").elements["mezz"].value);
		totalvalue += vmezz;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	// Disabled au choix quand mezz et rdc sont cochés
	if(mezz.checked && rdc.checked){
		document.getElementById("formulaire").elements["auchoix"].checked=false;
	}
	if(auchoix.checked){
		var auchoix1 = lumiere1 * 100;
		var auchoix2 = lumiere2 * 100;
		var auchoixtotal = auchoix1 + auchoix2
		totalvalue += auchoixtotal;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(gdEcranT.checked){
		var gdEcranT = parseInt(document.getElementById("formulaire").elements["gdEcranT"].value);
		totalvalue += gdEcranT;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(podium.checked){
		var podium = parseInt(document.getElementById("formulaire").elements["podium"].value);
		totalvalue += podium;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	
	// Permanence
	if(permanence.checked){
		var permanence = parseInt(document.getElementById("formulaire").elements["permanence"].value);
		var totalp = permanence + (option_permanence * 50);
		totalvalue += totalp
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	if(securite.checked){
		totalvalue +=  security * nbHAgent * nbagent;
		document.myform.totalsum.value=totalvalue;
		document.myform.totalsumreduc.value=totalvalue/2;
	}
	

/*}//fin de if

else{alert('veuillez preciser une capacité et une option horaire'); document.getElementById("formulaire").querySelectorAll.cheked = false}*/

}//fin de function getSum

// JavaScript for Bootstrap

// Pour tous les tooltip
$(function(){
		$('[data-toogle="tooltip"]').tooltip({'placement':'top'});
});

// Pour le tooltip "actualiser"
//$(document).ready(function(){
//$(".appear").tooltip("show");
//});
/*****************************************************************************************************/

/*****************************************************************************************************/
/*function cocher(monid) {
	
    var papa = monid.id;
	alert($('#nbvalley').prev().id);
	
}
$(document).ready(cocher);*/
</script>


	<div class="container-fluid header">
		<div class="row">

			<div class="container">
				<div class="row">
				    <!-- Logo -->
					<div class="col-md-12 hidden-sm hidden-xs text-left"> <!-- Better to user col-md-12 and center the image -->
						<img src="./core/images/logo.png" class="img-responsive logo"/>
				    </div>

				    <div class="col-xs-12 hidden-sm hidden-md hidden-lg" style="width: 15em; height: 15em;"> <!-- Mettre un espace quand c'est sur iPhone -->
				    </div>

				    <div class="col-sm-12 hidden-xs hidden-md hidden-lg text-left"> <!-- Better to user col-md-12 and center the image -->
						<img src="./core/images/logo.png" class="logo2"/>
				    </div>
				</div>
			</div>
    </div>
</div>


<div class="container-fluid">
	<div class="row form-entreprise">

		<!-- CONTAINER -->
		<div class="container">
		<form name="myform" id="formulaire" role="form" method="POST" action="generator.php" >
			
		<div class="col-md-10 col-sm-10 col-xs-11">
			<div class="row">

			<!-- Full -->
			<div class="col-md-12">
		    	<h2 class="text-center"><span>Devis en ligne</span></h2>
			</div>

			<!-- Colonne de gauche -->
			<div class="col-md-6">
				<div class="form-group">
					<label for="company"><span class="star-red">*</span>Société:</label>
					<input type="text" class="form-control" id="obligatoire" name="company" required=true>
				</div>

				<div class="form-group">
					<label for="e-mail"><span class="star-red">*</span>E-mail:</label>
					<input type="e-mail" class="form-control" id="obligatoire" name="email" required=true>
				</div>

				<div class="form-group">
					<label for="date"><span class="star-red">*</span>Date:</label>
					<input type="text" class="form-control" id="datepicker" name="date" required=true>
				</div>

				<!-- "seclectEvent" pour le PHP -->
				<div class="form-group">
					<label for="event"><span class="star-red">*</span>Type d'événement:</label>
					<select class="selectEvent" name="event">
					   <option selected="selected" disabled="disabled" style="color:#CCC;">Type of event</option>
                        <option value="Anniversaire d’entreprise">Anniversaire d’entreprise</option>
                        <option value="Assemblée générale">Assemblée générale</option>
                        <option value="Cocktail">Cocktail</option>
                        <option value="Collecte de dons">Collecte de dons</option>
                        <option value="Concert">Concert</option>
                        <option value="Conférence">Conférence</option>
                        <option value="Conférence de presse">Conférence de presse</option>
                        <option value="Congrès">Congrès</option>
                        <option value="Convention">Convention</option>
                        <option value="Défile de mode">Défile de mode</option>
                        <option value="Dégustation de produit">Dégustation de produit</option>
                        <option value="Évènement commémoratif">Évènement commémoratif</option>
                        <option value="Formation">Formation</option>
                        <option value="Journée d’étude">Journée d’étude</option>
                        <option value="Journée d’information">Journée d’information</option>
                        <option value="Lancement de produit">Lancement de produit</option>
                        <option value="Meeting politique">Meeting politique</option>
                        <option value="Présentation de produit">Présentation de produit</option>
                        <option value="Réception">Réception</option>
                        <option value="Remise de prix">Remise de prix</option>
                        <option value="Repas d’affaires">Repas d’affaires</option>
                        <option value="Séance photo">Séance photo</option>
                        <option value="Soirée d’entreprise">Soirée d’entreprise</option>
                        <option value="Team building">Team building</option>
                        <option value="Tournage de film">Tournage de film</option>
                        <option value="Traduction Simultanée">Traduction Simultanée</option>
                        <option value="Vente aux enchères">Vente aux enchères </option>
                        <option value="Visioconférence">Visioconférence</option>
                        <option value="Autre ">Autre </option>
				  	</select>
				</div>
		    </div> <!-- .col-md-6 -->

		    <!-- Colonne de droite -->
		    <div class="col-md-6">
		    	<div class="form-group">
					<label for="name"><span class="star-red">*</span>Nom & Prénom:</label>
					<input type="text" class="form-control" id="obligatoire" name="name" required=true>
				</div>

				<div class="form-group">
					<label for="phone"><span class="star-red">*</span>GSM:</label>
					<input type="tel" class="form-control" id="obligatoire" name="phone" required=true>
				</div>

				<div class="form-group">
					<label for="capacity"><span class="star-red">*</span>Capacité:</label>
					<!-- Style en CSS -->
					<div class="form-inline">
						<!-- Re-calculer en fonction de la capacité -->
						<input type="number" name="capacity" id="obligatoire" min="0" max="500" rel="tooltip" value="0" data-toogle="tooltip" title="Le nombre de personnes choisi sera réutilisé dans le calcul du montant prenant le nombre de personnes en paramètre" class="form-control" onchange="getSum()" onKeyUp="getSum()" onscroll="getSum()" required=true>
						<!-- <span class="glyphicon glyphicon-refresh" rel="tooltip" data-toogle="tooltip" title="Actualiser" onchange="getSum()"></span> -->
					</div>
                    <input type="hidden" name="duree" >
			    </div>


		    </div> <!-- .col-md-6 -->

		    <!-- Horaire .col-md-12 -->
		    <div class="col-md-12">
		    	<h2 class="text-center"><span>Horaire</span></h2>
		    	<p class="fond-vert">Réservation de la salle en fonction du nombre d'invités, du nombre d'heures ainsi que du choix des options.
				Le nombre d'heures sera réutilisé dans le calcul du montant prenant le nombre d'heures en paramètre
				Par défaut, à chaque sélection d'un horaire, le nettoyage, le régisseur et le calcul des charges énergétiques
				sont automatiquement ajoutés
				</p>
				
                <input type="hidden" id="titre_horaire" name="titre_horaire">
                
				<!-- Mise en forme particulière pour les "radio-inline" -->
				<!-- De 6 à 12h-->
				<label class="radio-inline" for="matin6h">
					<input type="radio" name="horaire" id="matin6h" rel="tooltip" data-toogle="tooltip" title="1500€" value="1500" onchange="getSum()">
					<span class="radio">De 6 à 12h</span>
				</label>

				<!-- De 8 à 14h-->
				<label class="radio-inline" for="matin8h">
					<input type="radio" name="horaire" id="matin8h" rel="tooltip" data-toogle="tooltip" title="2250€" value="2250" onchange="getSum()"> 
					<span class="radio">De 8 à 14h</span>
				</label>

				<!-- De 12 à 18h-->
				<label class="radio-inline" for="aprem12h">
					<input type="radio" name="horaire" id="aprem12h" rel="tooltip" data-toogle="tooltip" title="2250€" value="2250" onchange="getSum()"> 
					<span class="radio">De 12 à 18h</span>
				</label>
				
				<!-- De 8 à 18h-->
				<label class="radio-inline" for="matin8h18h">
					<input type="radio" name="horaire" id="matin8h18h" rel="tooltip" data-toogle="tooltip" title="4250€" value="4250" onchange="getSum()">  
					<span class="radio">De 8 à 18h</span>
				</label>

				<!-- De 18h à 24-->
				<label class="radio-inline" for="soir18h">
					<input type="radio" name="horaire" id="soir18h" rel="tooltip" data-toogle="tooltip" title="3000€" value="3000" onchange="getSum()">
					<span class="radio">De 18 à 24h</span>
				</label>
				
				<br>

				<!-- De 14h à 24-->
				<label class="radio-inline" for="aprem14h">
					<input type="radio" name="horaire" id="aprem14h" rel="tooltip" data-toogle="tooltip" title="5000€" value="5000" onchange="getSum()">   
					<span class="radio">De 14 à 24h</span>
				</label>

				<!-- De 8h à 24h-->
				<label class="radio-inline" for="allday">
					<input type="radio" name="horaire" id="allday" rel="tooltip" data-toogle="tooltip" title="6500€" value="6500" onchange="getSum()">   
					<span class="radio">De 08 à 24h</span>
				</label>

				<!-- Hidden pour éviter l'écart gauche -->
				<br class="hidden-lg hidden-md">
				<!-- Hidden pour éviter l'écart gauche -->
				<br class="hidden-sm hidden-xs">

				<!-- Horaire au choix 
				<div class="form-group">
					<label class="radio-inline col-md-2" for="horaireAuChoix">
						<input type="radio" name="horaire" id="horaireAuChoix" rel="tooltip" data-toogle="tooltip" title="500€/h" value="500" onchange="getSum()" onKeyUp="getSum()"> 
						<span class="radio">Au choix :</span>
					</label>
						
					<div class="col-md-1" style="margin-top: -0.5em;">
						<div class="input-group text-left">
							<span class="input-group-addon" style="background-color:#c4d9c9; color: white; font-size: 1.5em;">De</span>
							<input type="number" name="from" value="0" min="0" max="24" onchange="getSum()" onKeyUp="getSum()">

							<span class="input-group-addon" style="background-color:#c4d9c9; color: white; font-size: 1.5em;">à</span>
							<input type="number" name="to" value="0" min="0" max="24" onchange="getSum()" onKeyUp="getSum()">
						</div>
					</div>				
				</div> -->


	
		    	<p class="fond-vert">
		    	500€ le prix d' une heure supplémentaire sur les options précédentes
				</p>

			</div> <!-- .col-md-12 -->

			<!-- Image de fond .col-md-12 -->
			<div class="col-md-12 bg-horaire">
					<img src="core/images/salle.png" style="width: 100%" class="img-responsive" />
			</div>

			<!------------------------------------------------ Options Obligatoires ------------------------------------------>
			<div class="col-md-12">
				<h2 class="text-center"><span>Options Obligatoires</span></h2>
			</div>

			<div class="col-md-12" style="margin-left: 20px;">

			<!-- Charges énergétiques -->
			<div class="row text-left">
				<div class="col-md-4 checkbox">
					<input type="checkbox" name="charges" id="charges" rel="tooltip" data-toogle="tooltip" title="45€/h" value="45" onchange="getSum()" onclick="return false" > 
					<label class="checkbox-inline" for="charges">
						<span class="prixCheck">Charges énergétiques</span>
					</label>	 
				</div>
				<div class="col-md-4">	
				</div>
				<div class="col-md-4">
					<span class="prixOption">45€/h</p>
				</div>
			</div>

			<!-- Nettoyage -->
			<!-- Disabled if a basic option is choosen-->
			<div class="row text-left">
				<div class="col-md-4 checkbox">
					<input type="checkbox" name="nettoyage" id="nettoyage" rel="tooltip" data-toogle="tooltip" title="450€" value="450" onchange="getSum()" onclick="return false">   
					<label class="checkbox-inline" for="nettoyage">
						<span class="prixCheck">Nettoyage</span>
					</label> 
				</div>
				<div class="col-md-4">	
				</div>
				<div class="col-md-4">
					<span class="prixOption">450€</p>
				</div>
			</div>

			<!-- Régisseur | Pré-production obligatoire -->
			<!-- Disabled if a basic option is choosen-->
			<div class="row text-left">
				<div class="col-md-4 checkbox">
					<input type="checkbox" name="regisseur1" id="regisseur1" rel="tooltip" data-toogle="tooltip" title="500€" value="500" onchange="getSum()" onclick="return false">
					<label class="checkbox-inline" for="regisseur1">
						<span class="prixCheck">Régisseur</span>
					</label>	
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<span class="prixOption">500€</span>
				</div>
			</div>

			<!-- Securité -->
			<div class="row text-left">
				<div class="col-md-4 checkbox" for="securite">
					<input type="checkbox" name="securite" id="securite" rel="tooltip" data-toogle="tooltip" title="De 6h à 20h : 35h/h | De 20h à 00h : 40€/h | De 00h à 06h : 45€/h" onchange="getSum()">
					<label>
						<span class="prixCheck">Securité</span>
						<span class="small">Minimum 2 agents</span>
					</label>
				</div>
				<div class="col-md-4">
					<input type="number" name="nbagent" id="nbagent" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre d'agent"  value="2" min="2" max="30" onchange="getSum();cocher_securite" onKeyUp="getSum()" onScroll="getSum()">
					<input type="number" name="nbHAgent" id="nbHAgent" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre d'heure"  value="2" min="2" max="30" onchange="getSum();cocher_securite" onKeyUp="getSum()" onScroll="getSum()"> 
					<!-- <span class="glyphicon glyphicon-refresh" rel="tooltip" data-toogle="tooltip" title="Actualiser" onClick="getSum()"> agents</span> -->
				</div>
				<div class="col-md-4">
					<span class="prixOption">35h/h à 45€/h</span>
				</div>
			</div>

			<!-- Matériel Eclairage -->
			<div class="row text-left">
				<div class="col-md-4 checkbox" for="eclairage">
					<input type="checkbox" name="eclairage" id="eclairage" rel="tooltip" data-toogle="tooltip" title="250€" value="250" onchange="getSum()" onclick="return false">
					<label class="checkbox-inline" for="eclairage">
						<span class="prixCheck">Matériel Eclairage</span>	
						<br>
						<span class="small"> Ciel étoilé, lunes, strip led multi-couleurs, l'ensemble de l'éclairage diable </span> 
					</label>
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<span class="prixOption">250€/package</span>
				</div>
			</div>

			<!-- Permanence -->
			<div class="row text-left">
				<div class="col-md-4 checkbox">
					<input type="checkbox" name="permanence" id="permanence" rel="tooltip" data-toogle="tooltip" title="500€/6h et 50€/h suppl." value="500" onchange="getSum()" onclick="return false">
					<label class="checkbox-inline" for="permanence">
						<span class="prixCheck">Permanence</span>
					</label>
					<br>
					<span class="petit">Administrative & Technique</span> 
					<input type="hidden" name="option_permanence" ><!--input pour stocker si c 6h ou plus -->
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<span class="prixOption">250€/6h et 50€/h suppl.</span>
				</div>
			</div>

			</div> <!-- .col-md-12 -->

			<!------------------------------------------------ Accueil ------------------------------------------>
			<div class="col-md-12">
				<h2 class="text-center"><span>Accueil</span></h2>
			</div>

			<div class="col-md-12">

				<!-- Espace VIP -->
				<div class="row text-left">
					<div class="col-md-4 checkbox">
						<label class="checkbox-inline" for="vip">
							<input type="checkbox" name="vip" id="vip" rel="tooltip" data-toogle="tooltip" title="500€" value="500" onchange="getSum()">
							<span class="prixCheck">Espace VIP</span>
						</label>   
					</div>
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<span class="prixOption">500 €</span>
					</div>
				</div>

				<!-- Dame de cours -->
				<div class="row text-left">
					<div class="col-md-4 checkbox">
						<label class="checkbox-inline" for="dame">
							<input type="checkbox" name="dame" id="dame" rel="tooltip" data-toogle="tooltip" title="30€/h" value="30" onchange="getSum()" onclick="return false">
							<span class="prixCheck">Dame de cours</span>
						</label>
					</div>
					<div class="col-md-4">
						<input type="number" name="nbdame" id="nbdame" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre de dame" value="0" min="0" max="30" onchange="getSum();cocher_dame()" onKeyUp="getSum()" onScroll="getSum()" onClick="cocher(this)"> 
						<input type="number" name="nbHDame" id="nbHDame" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre d'heure" value="0" min="0" max="30" onchange="getSum();cocher_dame()" onKeyUp="getSum()" onScroll="getSum()" onClick="cocher(this)"> 
					</div>
					<div class="col-md-4">
						<span class="prixOption">30 € par H</span>
					</div>
				</div>

				<!-- Valley -->
				<div class="row text-left">
					<div class="col-md-4 checkbox">
						<label class="checkbox-inline" for="valley">
							<input type="checkbox" name="valley" id="valley" rel="tooltip" data-toogle="tooltip" title="45€/h" value="45" onchange="getSum()">
							<span class="prixCheck">Valley</span>
						</label>	  
					</div>
					<div class="col-md-4">
						<input type="number" name="nbvalley" id="nbvalley" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre de valley" value="0" min="0" max="30" onchange="getSum();cocher_valley()" onKeyUp="getSum()" onScroll="getSum()" onClick="cocher(this)"> 
						<input type="number" name="nbHValley" id="nbHValley" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre d'heure" value="0" min="0" max="30" onchange="getSum();cocher_valley()" onKeyUp="getSum()" onScroll="getSum()" onClick="cocher(this)"> 
						<!--<span class="glyphicon glyphicon-refresh" rel="tooltip" data-toogle="tooltip" title="Actualiser" onClick="getSum()"> valley</span> -->
					</div>
					<div class="col-md-4">
						<span class="prixOption">45 € par H</span>
					</div>
				</div>

				<!-- Réceptionniste -->
				<div class="row text-left">
					<div class="col-md-4 checkbox">
						<label class="checkbox-inline" for="receptionniste">
							<input type="checkbox" name="receptionniste" id="receptionniste" rel="tooltip" data-toogle="tooltip" title="45€/h" value="45" onchange="getSum()" >
							<span class="prixCheck">Réceptionniste</span>
						</label>	  
					</div>
					<div class="col-md-4">
						<input type="number" name="nbreceptionniste" id="nbreceptionniste" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre de réceptionniste" value="0" min="0" max="30" onchange="getSum();cocher_recep()" onKeyUp="getSum()" onClick="getSum()" onScroll="getSum()"> 
						<input type="number" name="nbHRecept" id="nbHRecept" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre d'heure" value="0" min="0" max="30" onchange="getSum();cocher_recep()" onKeyUp="getSum()" onClick="getSum()" onScroll="getSum()"> 
						<!--<span class="glyphicon glyphicon-refresh" rel="tooltip" data-toogle="tooltip" title="Actualiser" onClick="getSum()"> valley</span> -->
					</div>
					<div class="col-md-4">
						<span class="prixOption">45 € par H</span>
					</div>
				</div>

				<!-- Vestiairiste -->
				<div class="row text-left">
					<div class="col-md-4 checkbox">
						<label class="checkbox-inline" for="vestiaire">
							<input type="checkbox" name="vestiaire" id="vestiaire" rel="tooltip" data-toogle="tooltip" title="35€/h" value="35" onchange="getSum()">
							<span class="prixCheck">Vestiairiste</span>  
						</label> 
					</div>
					<div class="col-md-4">
						<input type="number" name="nbvestiaire" id="nbvestiaire" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre de vestiairiste" value="0" min="0" max="30" onchange="getSum();cocher_vestiaire()" onKeyUp="getSum()" onScroll="getSum()"> 
						<input type="number" name="nbHVestiaire" id="nbHVestiaire" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre d'heure" value="0" min="0" max="30" onchange="getSum();cocher_vestiaire()" onKeyUp="getSum()" onScroll="getSum()"> 
						<!-- <span class="glyphicon glyphicon-refresh" rel="tooltip" data-toogle="tooltip" title="Actualiser" onClick="getSum()"> hotesse(s)</span> -->
					</div>
					<div class="col-md-4">
						<span class="prixOption">35 € par H</span>
					</div>
				</div>

				<!-- Hôtesse -->
				<div class="row text-left">
					<div class="col-md-4 checkbox">
						<label class="checkbox-inline" for="hotesse">
							<input type="checkbox" name="hotesse" id="hotesse" rel="tooltip" data-toogle="tooltip" title="35€/h" value="35" onchange="getSum()">
							<span class="prixCheck">Hôtesse </span>  
						</label> 
					</div>
					<div class="col-md-4">
						<input type="number" name="nbhotesse" id="nbhotesse" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre d'hôtesse" value="0" min="0" max="30" onchange="getSum();cocher_hotesse()" onKeyUp="getSum()" onScroll="getSum()"> 
						<input type="number" name="nbHHotesse" id="nbHHotesse" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre d'heure" value="0" min="0" max="30" onchange="getSum();cocher_hotesse()" onKeyUp="getSum()" onScroll="getSum()"> 
						<!-- <span class="glyphicon glyphicon-refresh" rel="tooltip" data-toogle="tooltip" title="Actualiser" onClick="getSum()"> hotesse(s)</span> -->
					</div>
					<div class="col-md-4">
						<span class="prixOption">35 € par H</span>
					</div>
				</div>

				<!-- Serveur -->
				<div class="row text-left">
					<div class="col-md-4 checkbox">
						<label class="checkbox-inline" for="serveur">
							<input type="checkbox" name="serveur" id="serveur" rel="tooltip" data-toogle="tooltip" title="35€/h" value="35" onchange="getSum()">
							<span class="prixCheck">Serveur(se)</span>
						</label>
					</div>
					<div class="col-md-4">
						<input type="number" name="nbserveur" id="nbserveur" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre de serveur" value="0" min="0" max="24" onchange="getSum();cocher_serveur()" onKeyUp="getSum()" onScroll="getSum()"> 
						<input type="number" name="nbHServeur" id="nbHServeur" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre d'heure" value="0" min="0" max="24" onchange="getSum();cocher_serveur()" onKeyUp="getSum()" onScroll="getSum()"> 
						<!-- <span class="glyphicon glyphicon-refresh" rel="tooltip" data-toogle="tooltip" title="Actualiser" onclick="getSum()"> heures</span> -->
					</div>
					<div class="col-md-4">
						<span class="prixOption">35€/h</span>
					</div>
				</div>

				<!-- Barman -->
				<div class="row text-left">
					<div class="col-md-4 checkbox">
						<label class="checkbox-inline" for="barman">
							<input type="checkbox" name="barman" id="barman" rel="tooltip" data-toogle="tooltip" title="35€/h" value="35" onchange="getSum()">
							<span class="prixCheck">Barman</span>
						</label>
					</div>
					<div class="col-md-4">
						<input type="number" name="nbbarman" id="nbbarman" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre de barman" value="0" min="0" max="24" onchange="getSum();cocher_barman()" onKeyUp="getSum()" onScroll="getSum()"> 
						<input type="number" name="nbHBarman" id="nbHBarman" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre d'heure" value="0" min="0" max="24" onchange="getSum();cocher_barman()" onKeyUp="getSum()" onScroll="getSum()"> 
						<!-- <span class="glyphicon glyphicon-refresh" rel="tooltip" data-toogle="tooltip" title="Actualiser" onclick="getSum()"> heures</span> -->
					</div>
					<div class="col-md-4">
						<span class="prixOption">35€/h</span>
					</div>
				</div>

				<!-- Parking boy -->
				<div class="row text-left">
					<div class="col-md-4 checkbox">
						<label class="checkbox-inline" for="parkingb">
							<input type="checkbox" name="parkingb" id="parkingb" rel="tooltip" data-toogle="tooltip" title="35€/h" value="35" onchange="getSum()">
							<span class="prixCheck">Parking boy</span>  
						</label> 
					</div>
					<div class="col-md-4">
						<input type="number" name="nbparkingb" id="nbparkingb" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre de parking boy" value="0" min="0" max="30" onchange="getSum();cocher_parkingb()" onKeyUp="getSum()" onScroll="getSum()"> 
						<input type="number" name="nbHParkingb" id="nbHParkingb" rel="tooltip" data-toogle="tooltip" title="Veuillez indiquer le nombre d'heure" value="0" min="0" max="30" onchange="getSum();cocher_parkingb()" onKeyUp="getSum()" onScroll="getSum()"> 
						<!-- <span class="glyphicon glyphicon-refresh" rel="tooltip" data-toogle="tooltip" title="Actualiser" onClick="getSum()"> hotesse(s)</span> -->
					</div>
					<div class="col-md-4">
						<span class="prixOption">35 € par H</span>
					</div>
				</div>

				<!-- Parking -->
				<div class="row text-left">
					<div class="col-md-4 checkbox">
						<label class="checkbox-inline" for="parking">
							<input type="checkbox" name="parking" id="parking" min="0" max="500" rel="tooltip" data-toogle="tooltip" title="places/h" value="1" onchange="getSum()">
							<span class="prixCheck">Parking</span>
						</label>
					</div>
					<div class="col-md-4">
						<input type="number" name="places" id="places" value="0" min="0" max="500" onchange="getSum();cocher_parking()" onKeyUp="getSum()" onScroll="getSum()"> 
						<!--<span class="glyphicon glyphicon-refresh" rel="tooltip" data-toogle="tooltip" title="Actualiser" onClick="getSum()"> places</span> -->
					</div>
					<div class="col-md-4">
						<span class="prixOption">1€ par H</span>
					</div>
				</div>
			</div> <!-- .col-md-12 -->

			<!------------------------------------------------ Catering & Co ------------------------------------------>
			<div class="col-md-12">
				<h2 class="text-center"><span>Catering & Co</span></h2>
			</div>

			<div class="col-md-12" style="margin-left: 20px;">

			<!-- Pause Café -->
			<div class="row text-left">
				<div class="col-md-4 checkbox">
					<input type="checkbox" name="cafe" id="cafe" rel="tooltip" data-toogle="tooltip" title="7€/invité" value="7" onchange="getSum()">
					<label class="checkbox-inline" for="cafe">
						<span class="prixCheck">Pause-café, avec bar</span>
					</label>
					<br>
					<span class="petit">Café, thé, soft/jus, assortiment de viennoiseries, biscuits</span>
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<span class="prixOption">7€/invité pour 1 heure</span>
				</div>
			</div>

			<!-- Catering -->
			<div class="row text-left">
				<div class="col-md-4 checkbox">
					<input type="checkbox" name="catering" id="catering" rel="tooltip" data-toogle="tooltip" title="5€/invité" value="5" onchange="getSum()"> 
					<label class="checkbox-inline" for="catering"> 
						<span class="prixCheck">Catering, libre de traiteur</span>
					</label> 
				</div>
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
					<span class="prixOption">5€/invité</span>
				</div>
			</div>

			<!-- Traiteur -->
			<div class="row text-left">
				<div class="col-md-4 checkbox">
					<input type="checkbox" name="traiteur" id="traiteur" rel="tooltip" data-toogle="tooltip" title="500€" value="500" onchange="getSum()"> 
					<label class="checkbox-inline" for="traiteur"> 
						<span class="prixCheck">Zone traiteur</span>
					</label> 
				</div>
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
					<span class="prixOption">500€</span>
				</div>
			</div>

			</div> <!-- .col-md-12 -->

			<!------------------------------------------------ Technique ------------------------------------------>
			<div class="col-md-12">
				<h2 class="text-center"><span>Technique</span></h2>
			</div>

			<div class="col-md-12" style="margin-left: 20px;">

			<!-- Wifi -->
			<div class="row text-left">
				<div class="col-md-4 checkbox">
					<input type="checkbox" name="wifi" id="wifi" rel="tooltip" data-toogle="tooltip" title="200€" value="200" onchange="getSum()"> 
					<label class="checkbox-inline" for="wifi">
						<span class="prixCheck">WIFI</span>
					</label>
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<span class="prixOption">200€</span>
				</div>
			</div>

			<!-- Tweet Wall -->
			<div class="row text-left">
				<div class="col-md-4 checkbox">
					<input type="checkbox" name="tweetwall" id="tweetwall" rel="tooltip" data-toogle="tooltip" title="75€/h" value="75" onchange="getSum()">
					<label class="checkbox-inline" for="tweetwall">
						<span class="prixCheck">Tweet Wall</span>
					</label> 
				</div>
				<div class="col-md-4">
					<input type="number" name="utilisation" id="utilisation" value="0" min="0" max="24" onchange="getSum();cocher_tweetwall()" onKeyUp="getSum()" onScroll="getSum()">
					<!--<span class="glyphicon glyphicon-refresh" rel="tooltip" data-toogle="tooltip" title="Actualiser" onclick="getSum()"> heures</span> -->
				</div>
				<div class="col-md-4">
					<span class="prixOption">75€/h</span>
				</div>
			</div>

			<!-- Matériel Son -->
			<div class="row text-left">
				<div class="col-md-4 checkbox">
					<input type="checkbox" name="son" id="son" rel="tooltip" data-toogle="tooltip" title="250€" value="250" onchange="getSum()">  
					<label class="checkbox-inline" for="son">
						<span class="prixCheck">Matériel Son</span>
						<br>
						<span class="small">2 pupitres, 2 casques, 4 micro baladeur, Système Son Digital Haute Qualité</span>
					</label>
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<span class="prixOption">250€/package</span>
				</div>
			</div>

			<!-- Régisseur | Post-production optionnel -->
			<!-- Disabled if a basic option is choosen-->
			<div class="row text-left">
				<div class="col-md-4 checkbox">
					<input type="checkbox" name="regisseur2" id="regisseur2" rel="tooltip" data-toogle="tooltip" title="250€" value="250" onchange="getSum()">
					<label class="checkbox-inline" for="regisseur2">
						<span class="prixCheck">Régisseur Pré-Production</span>
					</label>	
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<span class="prixOption">250€</span>
				</div>
			</div>

			<!-- DJ -->
			<div class="row text-left">
				<div class="col-md-4 checkbox">
					<input type="checkbox" name="dj" id="dj" rel="tooltip" data-toogle="tooltip" title="150€/h" value="150" onchange="getSum()" >
					<label class="checkbox-inline" for="dj">
						<span class="prixCheck">DJ</span>
					</label> 
				</div>
				<div class="col-md-4">
					<input type="number" name="play" id="play" value="0" min="0" max="24" onchange="getSum();cocher_dj()" onKeyUp="getSum()" onScroll="getSum()">
					<!-- <span class="glyphicon glyphicon-refresh" rel="tooltip" data-toogle="tooltip" title="Actualiser" onclick="getSum()"> heures</span> -->
				</div>
				<div class="col-md-4">
					<span class="prixOption">150€/h</span>
				</div>
			</div>

			<!-- Matériel Audio-Visuel | Projecteurs latéraux -->
			<div class="row text-left">
				<h3 style="color: #5d9168;">Matériel Audio-Visuel | Projecteurs latéraux</h3>
				<div class="col-md-12">

				<!-- RDC -->
				<div class="row">
					<div class="col-md-4">
						<input type="checkbox" name="rdc" id="rdc" min="0" max="8" rel="tooltip" data-toogle="tooltip" title="75€/projecteur" value="600" onchange="getSum()">
						<label class="checkbox-inline" for="rdc">
							<span class="prixCheck">Package RDC</span> 
						</label>
						<br>
						<span class="petit"> Package de 8 projecteurs au rez-de-chaussée <br>(4 à droite & 4 à gauche)</span>
					</div>

					<div class="col-md-4">
					</div>

					<div class="col-md-4">
						<span class="prixOption">75€/projecteur</span>
					</div>
				</div>

				<!-- Mezz -->
				<div class="row">
					<div class="col-md-4">
						<input type="checkbox" name="mezz" id="mezz" min="0" max="4" rel="tooltip" data-toogle="tooltip" title="50€/projecteur" value="200" onchange="getSum()">
						<label class="checkbox-inline" for="mezz">
							<span class="prixCheck">Package Mezz</span>
						</label>
						<br>
						<span class="petit">Package de 4 projecteurs en mezzanine <br>(2 à droite et 2 à gauche)</span>
					</div>

					<div class="col-md-4">
					</div>

					<div class="col-md-4">
						<span class="prixOption">50€/projecteur</span>
					</div>
				</div>

				<!-- Au choix -->
				<div class="row">
					<div class="col-md-4">
							<input type="checkbox" name="auchoix" id="auchoix" rel="tooltip" data-toogle="tooltip" title="100€/projecteur" value="100" onchange="getSum()">
							<label class="checkbox-inline" for="auchoix">
								<span class="prixCheck">Au choix</span>
							</label>
							<br>
							<span class="petit">Choix pour RDC au Mezz</span>
					</div>

					<div class="col-md-4">
						<input type="number" name="lumiere1" id="lumiere1" value="0" min="0" max="8" onchange="getSum()" onKeyUp="getSum()" onScroll="getSum()">
						<span class="petit"> projecteur RDC </span>
						<br>
						<input type="number" name="lumiere2" id="lumiere2" value="0" min="0" max="4" onchange="getSum()" onKeyUp="getSum()" onScroll="getSum()">
						<span class="petit"> projecteur Mezze </span>  
					</div>

					<div class="col-md-4">
						<span class="prixOption">100€/projecteur</span>	
					</div>
				</div>

				<!-- Grand Ecran (avec projecteur) -->
				<div class="row">
					<div class="col-md-4">
							<input type="radio" name="Ecran" id="gdEcranT" rel="tooltip" data-toogle="tooltip" title="250" value="250" onchange="getSum()">
							<label class="radio-inline" for="gdEcranT">
								<span class="prixCheck">Grand écran HD</span>
							</label>
					</div>

					<div class="col-md-4"> 
					</div>

					<div class="col-md-4">
						<span class="prixOption">250€</span>	
					</div>
				</div>

				<!-- Projecteur sur le podium (avec télécommande) -->
				<div class="row">
					<div class="col-md-4">
							<input type="checkbox" name="podium" id="podium" rel="tooltip" data-toogle="tooltip" title="150€" value="150" onchange="getSum()">
							<label class="checkbox-inline" for="podium">
								<span class="prixCheck">Projecteur podium</span>
							</label>
							<br>
							<span class="petit">(avec télécommande)</span>
					</div>

					<div class="col-md-4"> 
					</div>

					<div class="col-md-4">
						<span class="prixOption">150€</span>	
					</div>
				</div>

				</div><!-- .col-md-12 -->	
			</div> <!-- .row -->

			</div><!-- .col-md-12 Technique -->

			<!------------------------------------------------ Home Cinema ------------------------------------------>
			<div class="col-md-12">
				<h2 class="text-center"><span>Home Cinema</span></h2>
				<p class="text-left">Pour des soirées cinéma ou concert musical</p>
			</div>

			<div class="col-md-12" style="margin-left: 20px;">

			<!-- Grand écran, son -->
			<div class="row">
				<div class="radio col-md-4 ">
					<input type="radio" name="Ecran" id="gdEcran" rel="tooltip" data-toogle="tooltip" title="500€" value="500" onchange="getSum()">
					<label class="radio-inline" for="gdEcran">
						<span class="prixCheck">Grand écran</span>
					</label>  
					<br>
					<span class="petit">Grand écran avec systeme son digital haute qualité & KALEIDESCAPE (lecteur de film Blue-Ray)</span>
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<span class="prixOption">500€</span>
				</div>
			</div>

			<!-- Grand écran, tous les autres écrans, son, 12 projecteurs-->
			<div class="row">
				<div class="radio col-md-4 ">
					<input type="radio" name="Ecran" id="gdEcranAll" rel="tooltip" data-toogle="tooltip" title="1000€" value="1000" onchange="getSum()">
					<label class="radio-inline" for="gdEcranAll">
						<span class="prixCheck">
							Grand écran All-In
						</span>
					</label> 
					<br>
					<span class="petit">Grand écran avec systeme son digital haute qualité & KALEIDESCAPE (lecteur de film Blue-Ray) et 14 projecteurs (latéraux)</span> 
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
					<span class="prixOption">1000€</span>
				</div>
			</div>

			</div> <!-- .col-md-12 -->

			<!------------------------------------------------ Mobilier de base ------------------------------------------>
			<div class="col-md-12">
				<h2 class="text-center"><span>Mobilier de base</span></h2>
			</div>
			
			<div class="col-md-12" style="margin-left: 20px;">
			<!-- Chaises -->
			<div class="row">
				<div class="checkbox col-md-4 ">
					<input type="checkbox" name="chaise" id="chaise" rel="tooltip" data-toogle="tooltip" title="2€/chaise" value="2" onchange="getSum()">
					<label class="checkbox-inline" for="chaise">
					<span class="prixCheck">Chaises</span>
					</label>  
				</div>
				<div class="col-md-4">
					<input type="number" name="nbchaise" id="nbchaise" value="0" min="0" max="500" onchange="getSum();cocher_chaise()" onKeyUp="getSum()" onScroll="getSum()"> 
					<span class="petit"> places assises</span> 
				</div>
				<div class="col-md-4">
					<span class="prixOption">2€/chaise</span>
				</div>
			</div>

			<!-- T-R : -->
			<div class="row">
				<div class="checkbox col-md-4 ">
					<input type="checkbox" name="tr" id="tr" rel="tooltip" data-toogle="tooltip" title="10€/T-R" value="10" onchange="getSum()">
					<label class="checkbox-inline" for="tr">
					<span class="prixCheck">Tables rondes</span>
					</label>
				</div>
				<div class="col-md-4">
					<input type="number" name="nbtr" id="nbtr" value="0" min="0" max="500" onchange="getSum();cocher_tr()" onKeyUp="getSum()" onScroll="getSum()">  
					<span class="petit"> places</span> 
				</div>
				<div class="col-md-4">
					<span class="prixOption">10€/T-R</span>
				</div>
			</div>

			<!-- T-B : -->
			<div class="row">
				<div class="checkbox col-md-4 ">
					<input type="checkbox" name="tb" id="tb" rel="tooltip" data-toogle="tooltip" title="10€/T-B" value="10" onchange="getSum()">
					<label class="checkbox-inline" for="tb">
					<span class="prixCheck">Tables de banquet</span>
					</label>
				</div>
				<div class="col-md-4">
					<input type="number" name="nbtb" id="nbtb" value="0" min="0" max="500" onchange="getSum();cocher_tb()" onKeyUp="getSum()" onScroll="getSum()">
					<span class="petit"> places</span>
				</div>
				<div class="col-md-4">
					<span class="prixOption">10€/T-B</span>
				</div>
			</div>

			<!-- Mange-Debout: -->
			<div class="row">
				<div class="checkbox col-md-4 ">
					<input type="checkbox" name="debout" id="debout" rel="tooltip" data-toogle="tooltip" title="5€/table" value="5" onchange="getSum()">
					<label class="checkbox-inline" for="debout">
						<span class="prixCheck">Mange-Debout</span>
					</label>
				</div>
				<div class="col-md-4">
					<input type="number" name="nbdebout" id="nbdebout" value="0" min="0" max="200" onchange="getSum();cocher_debout()" onKeyUp="getSum()" onScroll="getSum()"> 
					<span class="petit"> tables</span> 
				</div>
				<div class="col-md-4">
					<span class="prixOption">5€/table</span>
				</div>
			</div>

			</div> <!-- .col-md-12 "Mobilier" -->

			<!------------------------------------------------ Demande de visiter la salle ------------------------------------------>
			<!--<div class="col-md-12">
				<h2 class="text-center"><span>Demande de visite</span></h2>
			</div>

			<div class="col-md-12">-->

			<!-- Demande de visiter la salle -->	
			<!--<div class="form-group">
				<label class="radio-inline">
					<input type="radio" name="visiteSalle" id="lundi1" value="lundi 23 mars">
					<span class="radio">Lundi 23 mars</span>
				</label>
				<label class="radio-inline">
					<input type="radio" name="visiteSalle" id="lundi2" value="lundi 30 mars">
					<span class="radio">Lundi 30 mars</span>
				</label>
				<label class="radio-inline">
					<input type="radio" name="visiteSalle" id="lundi3" value="lundi 6 avril">
					<span class="radio">Lundi 6 avril</span>
				</label>
			</div>-->

			<!-- Submit devis -->
			<div class="row" style="margin-top: 2.5em; margin-bottom: 10em;">
				<div class="form-horizontal col-md-12 col-sm-12 col-xs-2">
                <input type="submit" name="submit" class="text-center" style="background-color: #c4d9c9; color: white; font-size: 1.15em; border: 0.5em white; width: 100%; padding-top: 1em; padding-bottom: 1em;" value="Demande de devis" >
					<label for="submit">
							<!-- Envoyer le formulaire pour le recevoir en PHP et PDF -->
							
							<!-- essayer avec .input-block-level -->
					</label>
				</div>
			</div>

			</div> <!-- .col-md-12 -->

			</div> <!-- .row-->
			</div><!-- .col-md-10-->

			<!-- Prix Total -->
			<div class="col-md-2 col-sm-2 col-xs-1">
				<div class="form-group" id="affichesomme">

					<div class="col-md-12 inbox input-group" style="padding-left: 0.5em; padding-right: 6.5em;">
							<label style="color: black;">Prix Total :</label>
							<input type="text" name="totalsum" readonly style="width: 75%;"> 
							<span class="input-group-addon text-left" style="background-color: #c4d9c9; color: black; border: 0px; padding-top: 2.8em; font-size: 1em;">€HTVA</span>	
					</div>
					
                    <div class="col-md-12 inbox input-group" style="padding-left: 0.5em; padding-right: 6.5em;">
							<label style="color: RED; font-size:10px">Promotion de mois de juin -50%:</label>
							<input type="text" name="totalsumreduc" readonly style="width: 75%;"> 
							<span class="input-group-addon text-left" style="background-color: #c4d9c9; color: RED; border: 0px; padding-top: 2.8em; font-size: 1em;">€HTVA</span>	
					</div>
                    
					<div class="col-md-12 inbox">
						<p id="prixTotal">
						Prix total comprenant la réservation, les charges énergétiques,
						le nettoyage, le régisseur et la sécurité
						</p>
						<a href="http://claridge.be/" target="blank">Accueil</a>
						<a href="http://claridge.be/index.php/galleryphotos" target="blank" >Gallerie Photo</a>
						<a href="http://claridge.be/index.php/contact" target="blank" >Contact</a>
					</div>

				</div>
			</div> <!-- .col-md-2 -->

			</form> <!-- form-->
			</div> <!-- fin .container-->
			
	</div> <!-- .row -->
</div> <!-- .container-fluid -->

	
</body>

</html>