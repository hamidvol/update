function selbankfunc(element) {
    var text = element.options[element.selectedIndex].text;
    document.getElementById("myHeader").innerText = text ;
    document.getElementById("myHeader2").innerText = text ;
    document.getElementById("bnk").value = text ;
	document.getElementById('from').value = 'INFO';

    
}

$('#selbank').change(function() {
  $('#bnq_image').attr('src', $('#selbank').val());
});

  $("#selmsg").change(function(){
        if ($(this).val() === 'pv') {
		  $("span#spanmontant").text($("#montant").val());
		  $('#selbank').attr("disabled", "disabled");
		  $("span#spanmarchant").text($("#marchant").val());
		var a=$("#divpv").text();
		var b=$("#msg").val(a);
		var c=$("#bnk").val();
		var d=$("#msg").val();
		var e=$("#message2").val(c+d);
		$("#message").val($("#message2").val());
		$("#to").val($("#num").val());
		
		

	} else if ($(this).val() === 'pa') {
      $("span#spanmontant").text($("#montant").val());
	  $('#selbank').attr("disabled", "disabled");
      $("span#spanmarchant").text($("#marchant").val());
		var a=$("#divpa").text();
		var b=$("#msg").val(a);
		var c=$("#bnk").val();
		var d=$("#msg").val();
		$("#message2").val(c+d);
		$("#message").val($("#message2").val());
		$("#to").val($("#num").val());

		
     
	} else if ($(this).val() === 'auth') {
      $("span#spanmontant").text($("#montant").val());
	  $('#selbank').attr("disabled", "disabled");
      $("span#spanmarchant").text($("#marchant").val());
		var a=$("#divauth").text();
		var b=$("#msg").val(a);
		var c=$("#bnk").val();
		var d=$("#msg").val();
		$("#message2").val(c+d);
		$("#message").val($("#message2").val());
		$("#to").val($("#num").val());
	  
    } else if ($(this).val() === 'psa') {
      $("span#spanservice").text($("#service").val());
		var a=$("#divpsa").text();
		var b=$("#msg").val(a);
		var c=$("#bnk").val();
		var d=$("#msg").val();
		$("#message2").val(c+d);
		$("#to").val($("#num").val());
	  
    }else if ($(this).val() === 'aps') {
      $("span#spanservice").text($("#service").val());
	  $('#selbank').attr("disabled", "disabled");
		var a=$("#divaps").text();
		var b=$("#msg").val(a);
		var c=$("#bnk").val();
		var d=$("#msg").val();
		$("#message2").val(c+d);
		$("#message").val($("#message2").val());
		$("#to").val($("#num").val());
		
	}else if ($(this).val() === 'opp') {
		$('#selbank').attr("disabled", "disabled");
		var a=$("#divopp").text();
		var b=$("#msg").val(a);
		var c=$("#bnk").val();
		var d=$("#msg").val();
		$("#message2").val(c+d);
		$("#message").val($("#message2").val());
		$("#to").val($("#num").val());		
		
	}else if ($(this).val() === 'rc') {
		$('#selbank').attr("disabled", "disabled");
		var a=$("#divrc").text();
		var b=$("#msg").val(a);
		var c=$("#bnk").val();
		var d=$("#msg").val();
		$("#message2").val(c+d);	
		$("#message").val($("#message2").val());
		$("#to").val($("#num").val());
		
	}else if ($(this).val() === 'ab') {
		$('#selbank').attr("disabled", "disabled");
		var a=$("#divab").text();
		var b=$("#msg").val(a);
		var c=$("#bnk").val();
		var d=$("#msg").val();
		$("#message2").val(c+d);
		$("#message").val($("#message2").val());
		$("#to").val($("#num").val());	
    }
});

  