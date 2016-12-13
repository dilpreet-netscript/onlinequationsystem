	//$('#showProducts').html('');
	var idArray = new Array();	
	//var deleteitem = new Array();
	//var idArray[]={};
	//var idArray = [];
	//window.idArray = []; //remember that new should be lowercase.
	


	/*$('#selectoption option:selected').click(function() {
    //var index = $(this).index();
    var text = $(this).attr('value');
	alert(text);
	alert('a');
	idArray.push(text);
	//idArray.unique();
	//var idArray = ["Mike","Matt","Nancy","Adam","Jenny","Nancy","Carl"];
	//console.log(idArray);	
	//var uniqueArray = [];
		/*$.each(idArray, function(i, el){
			if($.inArray(el, idArray) === -1) idArray.push(el);
		});
	console.log(idArray);*/
	//});
	$('.selectoption').on('change', function() {
	//alert($(this).val());
	var v = $(this).val();
	//alert(v);
	idArray.push(v);
	
	var unique=idArray.filter(function(itm,i,idArray){
    return i==idArray.indexOf(itm);
	return idArray;
});
	
	//idArray.unique();
	console.log(idArray);
	});
	
	
	$("#btnGetQuotes").click(function(){
	
		$('.close-table-result').show('fast');
		if(idArray.length<=0) {$("#close-table-result").hide('fast');}
	
	$.ajax({
        type: "GET",
        url: 'ajax_resultTable.php',
        data: { ids: idArray },
        success: function (response) {
            $('#resultTable').html(response);
			//$('.cartitem').text($('#qnt').val());
			console.log(idArray);
             },
        error: function () {
            $('#resultTable').html('There was an error!');
        }
    });
	return idArray;
	console.log(idArray);
	});
	
	//cartAction('empty','')
	$('#emtpycart').click(function(){
		//alert('d');
		idArray.length = 0;
		$( "#deletetbl" ).empty();
		$( "#onclick").hide('fast');
		//$('#resultTable').hide('fast');
	});

	
	//var deleteitem = new Array();
	/*var q =$(this).closest('tr').find('input.qnt').val();
	
	var p =$(this).closest('tr').children('td.two').text();
	var sum = q * p;
	$(this).closest('tr').children('td.updateprice').text(sum);*/

	//$('#selectqty').load('selectopt.php');
	//$('#qtydisplay').load('quantity.php');

/*$('.submitOrder').click(function(){
		alert('your order has been submitted');
	
	$.ajax({
        type: "post",
        url: 'submitOrder.php',			
        data: { ids: idArray },
        success: function (response) {
            $('#resultTable').html(response);
            //console.log((response));
            },
        error: function () {
            $('#resultTable').html('There was an error!');
        }
    });
	});*/
	
	$("#onclick").click(function() {
//$("#contact-form").css("display", "block");
$("#contact-form").show("fast");
});
var sum = 0;

$('#tbl tr').click(function() {
    if (!this.rowIndex) return; // skip first row
	//$(this).closest('tr').remove();
//alert($('#id1').text());
 $(this).closest('tr').find("input")
    var prc = this.cells[1].innerHTML;
	/*$("input1").change(function(){
        //alert("The text has been changed.");
		var qnt = $(this).val();
		alert(prc + qnt);
    });*/

});

/*$('#dr').click(function(){         
            var $row = $(this).index();
alert(this.cells[1].innerHTML);     
        });*/ 
		
	$('#tbl').click( function(){
	$(this).closest('tr').remove();
});

	$("#tbl").on('click', '.btnDelete', function () {
		//$(this).closest('tr').remove();
		//console.log($(this).closest('tr').find('#dr').val());
		var id = $(this).closest('tr').find('#dd').val();
		//deleteitem.push(id);
		alert(id);
		$(this).closest('tr').remove();
		//var idArray = [1, 7, 5];
		//var i = idArray.indexOf('bar');
		console.log(idArray);
			
	});

	$('#tbl tr td #minusvalue').click(function(){
	
	var q =$(this).closest('tr').find('input.qnt').val();
	var down=parseInt(q)-1;
	if(q==1)
	{
		return false;
	}
	else{
		$(this).closest('tr').find('input.qnt').val('');
		$(this).closest('tr').find('input.qnt').val(down);
		var p =$(this).closest('tr').children('td.two').text();
		var sum = down * p;
		$(this).closest('tr').children('td.updateprice').text(sum);
		$(this).closest('tr').children('td.cartitem').text(q);
	}
	
	});

$('#tbl tr td #plusvalue').click(function(){
	
	var q =$(this).closest('tr').find('input.qnt').val();
	var up=parseInt(q)+1;
	
	$(this).closest('tr').find('input.qnt').val('');
	$(this).closest('tr').find('input.qnt').val(up);
	$(this).closest('tr').children('td.cartitem').text('');
	var p =$(this).closest('tr').children('td.two').text();
	var sum = up * p;
	
	$(this).closest('tr').children('td.updateprice').text(sum);
	$(this).closest('tr').children('td.cartitem').text(q);
	//$(this).closest('tr').children('td.cartitem').html(up);
	
	});
	
	$("input").change(function(){
		
	var q =$(this).closest('tr').find('input.qnt').val();
	
	var p =$(this).closest('tr').children('td.two').text();
	
	var sum = q * p;
	$(this).closest('tr').children('td.updateprice').text(sum);
	
		
    });
	
	/*function changeQuantity(qnt)
{
	//var p;
	//alert('cal');
	var pr = document.getElementById("aaa").innerHTML;
	alert(qnt);
	alert(pr);
	if (qty.length == 0) { 
        document.getElementById("aaa").innerHTML=p;
		
        return;
    } else {
		//alert('ax');
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("aaa").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "updateprice.php?q="+qnt+"&p="+pr, true);
        xmlhttp.send();
    }
	
}*/




