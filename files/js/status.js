$(function() {
	light1 = <?php echo $light1 ?>;
	light2 = <?php echo $light2 ?>;
	light3 = <?php echo $light3 ?>;
	light4 = <?php echo $light4 ?>;
	light5 = <?php echo $light5 ?>;
	light6 = <?php echo $light6 ?>;
	light7 = <?php echo $light7 ?>;
	light8 = <?php echo $light8 ?>;
	
	if(light1 === 1) {
	    $("#check1").prop("checked", false);
	    $light1 = 1;
	} else {
	    $("#check1").prop("checked", true);
	    $light1 = 0;
	}
	
	if(light2 === 1) {
	    $("#check2").prop("checked", false);
	    $light2 = 1;
	} else {
	    $("#check2").prop("checked", true);
	    $light2 = 0;
	}
	
	if(light3 === 1) {
	    $("#check3").prop("checked", false);
	    $light3 = 1;
	} else {
	    $("#check3").prop("checked", true);
	    $light3 = 0;
	}
	
	if(light4 === 1) {
	    $("#check4").prop("checked", false);
	    $light4 = 1;
	} else {
	    $("#check4").prop("checked", true);
	    $light4 = 0;
	}
	
	if(light5 === 1) {
	    $("#check5").prop("checked", false);
	    $light5 = 1;
	} else {
	    $("#check5").prop("checked", true);
	    $light5 = 0;
	}
	
	if(light6 === 1) {
	    $("#check6").prop("checked", false);
	    $light6 = 1;
	} else {
	    $("#check6").prop("checked", true);
	    $light6 = 0;
	}
	
	if(light7 === 1) {
	    $("#check7").prop("checked", false);
	    $light7 = 1;
	} else {
	    $("#check7").prop("checked", true);
	    $light7 = 0;
	}
	
	if(light8 === 1) {
	    $("#check8").prop("checked", false);
	    $light8 = 1;
	} else {
	    $("#check8").prop("checked", true);
	    $light8 = 0;
	}
});
