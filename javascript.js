<script>

function getSum(){
	totalvalue=0
	obj=document.myform.chkbox
	for(i=0;i<obj.length;i++){
		if(obj[i].checked){
		totalvalue+=parseInt(obj[i].value)
		alert(totalvalue);
		}
	}

	if(totalvalue==0) {
	alert("Please select atleast one product!!");
	document.myform.totalsum.value=""
	alert(totalvalue);
	}else{
	document.myform.totalsum.value=totalvalue
    alert(totalvalue); 
	}
}



</script>