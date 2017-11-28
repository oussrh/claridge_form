
<script>
// Chaque valeur doit être traitée et réinjectée dans le "value"


if(matin6h.checked || matin8h.checked || aprem11h.checked || matin8h18h.checked || soir18h.checked || aprem14h.checked || matin11h19h.checked)
	{
		
		
			/**********************************************************************/
			
			
					
					
		document.getElementById("formulaire").elements["charges"].checked= true;
		document.getElementById("formulaire").elements["nettoyage"].checked= true;
			
		
		
		
		
}
else{
	document.getElementById("formulaire").elements["charges"].value = 45;

	totalvalue=0;

	document.myform.totalsum.value=totalvalue;
	document.getElementById("formulaire").elements["charges"].checked= false;
	document.getElementById("formulaire").elements["nettoyage"].checked= false;
}


En fonction de l'horaire choisit, le nombre d'heures sera d'autant
		 if(matin6h.checked || matin8h.checked || aprem11h.checked || soir18h.checked ){
			var duree = 6;
			var valuecharges = parseInt(document.getElementById("formulaire").elements["charges"].value);
			document.getElementById("formulaire").elements["charges"].value = duree * valuecharges;
		}else{
			var duree = 10;
			var valuecharges = parseInt(document.getElementById("formulaire").elements["charges"].value);
			document.getElementById("formulaire").elements["charges"].value = duree * valuecharges;
		}  

function getSum(){

	totalvalue=0
	obj=document.myform.chkbox
		
		for(i=0;i<obj.length;i++){
				if(obj[i].checked){
					totalvalue+=parseInt(obj[i].value)
				}
		}
	
		if(totalvalue==0){
		//alert("Veuillez sélectionner au moins un produit");
		document.myform.totalsum.value=""
		}else{
		document.myform.totalsum.value=totalvalue
		}
	

		
}


						function misenforme(){
						 capacityC= parseInt(document.getElementById("capacity").value);
						 var valueCafe = parseInt(document.getElementById("formulaire").elements["cafe"].value);
						 var totalCafe = capacityC * valueCafe ; 
						 document.getElementById("formulaire").elements["cafe"].value = totalCafe;
						 /**********************************************************************/
						var valueCatering = parseInt(document.getElementById("formulaire").elements["catering"].value);
						var capacity = parseInt(document.getElementById("formulaire").elements["capacity"].value);
						var totalCatering = capacityC * valueCatering;
						document.getElementById("formulaire").elements["catering"].value = 500 + totalCatering;
						}
                    </script>
					<!-- <input type="number" name="capacity" onchange="myFunction(this.value)">
					<script>
					function myFunction(val) {
					    var capacity = parseInt(document.getElementById("formulaire").elements["capacity"].value);
					}
					</script>
					onchange="submitform()" -->
					<!-- onkeyup="this.value=this.value.replace(/[^\d]/,'')"  -->
					<!-- type="number" min=0 max=500 value="20"  -->
				</div>

				<!-- Récupération de la variable "capacity" en Javascript et
			    conversion d'une chaîne de caractères en un nombre -->

				<script>
					// var capacity = parseInt(document.getElementById("formulaire").elements["capacity"].value);
					// alert(typeof(capacity));
				</script>

				<script>
					//function total(){
					//var valueCatering = parseInt(document.getElementById("formulaire").elements["catering"].value);
					// alert(value);
					// ok

					// Without a value, capacity is considered as NaN
					
					//var capacity = parseInt(document.getElementById("formulaire").elements["capacity"].value);
					// var capacity = document.myform.capacity.value;
					// alert(capacity); 
					// ok

					//var totalCatering = capacityC * valueCatering;
					// alert(total); 

					//document.getElementById("formulaire").elements["catering"].value = 500 + totalCatering;
					//}

				</script>

				<!-- NEW SCRIPT -->

					<script>
					//function total(){
					//var valueCafe = parseInt(document.getElementById("formulaire").elements["cafe"].value);
					// alert(value);
					// ok

					// Without a value, capacity is considered as NaN
					
					// var capacity = parseInt(document.getElementById("formulaire").elements["capacity"].value);
					// alert(capacity); 
					// ok

					//var totalCafe = capacityC * valueCafe;
					// alert(total); 

					//document.getElementById("formulaire").elements["cafe"].value = totalCafe;
					//}

				</script>


					<!-- OLD SCRIPT -->  
					<!-- value = "<script>document.write(totalparpersonne)</script>" -->
					<!-- Récupérer la quantité et la valeur en JS -->
					<script>
						// capacity doit être renconnu comme un nombre !!!
						// var capacity = document.getElementById('capacity').value;
					    // var value = 7;

						// function product (capacity,value){
							// return capacity * value;
						// }
					    
					    
					    // var totalparpersonne = capacity * value;

					    // Voir s'il y a moyen de faire par classe ou autre
					    //document.getElementsByName('cafe').value = product(capacity, value);
					    //}
					</script>


</script>