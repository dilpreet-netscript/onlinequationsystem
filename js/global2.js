
 //$('#showProducts').html('');
	var idArray = new Array();	
	//var id='';
	//var idArray[]={};
	
	$('#selectoption li').click(function() {
    //var index = $(this).index();
    var id = $(this).attr('value');
	//alert(text);
	//addArray(id);
	idArray.push(id);
	//idArray.unique();
	//console.log(idArray);
	if (typeof(Storage) !== "undefined") {
	localStorage["idArray"] = JSON.stringify(idArray);
	}
	else {
    //document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
	console.log('Sorry, your browser does not support Web Storage...');
}
	
	});
	
	
	$("#btnGetQuotes").click(function(){
	
		$('.close-table-result').show('fast');
		if(idArray.length<=0) {$('..close-table-result').hide('fast');}
	idArray.unique();
	$.ajax({
        type: "GET",
        url: 'ajax_resultTable.php',
        data: { ids: idArray },
        success: function (response) {
            $('#resultTable').html(response);
             },
        error: function () {
            $('#resultTable').html('There was an error!');
        }
    });
	
	});
	
	//cartAction('empty','')
	$('#emtpycart').click(function(){
		//alert('d');
		idArray.length = 0;
		$( "#deletetbl" ).empty();
		$( "#onclick").hide('fast');
		//$('#resultTable').hide('fast');
	});
	
	
	
	// ajax_resultTable
	
	//var deleteitem = new Array();	


	//$('#selectqty').load('selectopt.php');
	$('#qtydisplay').load('quantity.php');

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
	

});

		
	$('#tbl').click( function(){
	$(this).closest('tr').remove();
});

	$("#tbl").on('click', '.btnDelete', function () {
		//$(this).closest('tr').remove();
		//console.log($(this).closest('tr').find('#dr').val());
		var id = $(this).closest('tr').find('#dd').val();
		//deleteitem.push(id);
		//deleteitem.unique();
		//deleteitem.push(id);
		
		//alert(id);
		removeArray(id);
		//var array = [2, 5, 9];
		//console.log(idArray);
		//console.log(id);
		//var index = idArray.indexOf(id);
		//console.log(id);
				/*if (index > -1) {
					idArray.splice(index,1);
					//return idArray;
				}*/
		//console.log(idArray);
		$(this).closest('tr').remove();
		
		/*$.ajax({
			
			type:"GET",
			//d:deleteitem, 
			//url: "ajax_resultTable.php?d="+deleteitem,
			data: {d:id}
			url: "ajax_resultTable.php",
			 success: function (response) {
            $('#resultTable').html(response);
             },
			error: function () {
				$('#resultTable').html('There was an error!');
			}
			});*/
			
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
	}
	
	});

$('#tbl tr td #plusvalue').click(function(){
	
	var q =$(this).closest('tr').find('input.qnt').val();
	var up=parseInt(q)+1;
	
	$(this).closest('tr').find('input.qnt').val('');
	$(this).closest('tr').find('input.qnt').val(up);
	var p =$(this).closest('tr').children('td.two').text();
	var sum = up * p;
	
	$(this).closest('tr').children('td.updateprice').text(sum);
	
	});
	
	$("input").change(function(){
		
	var q =$(this).closest('tr').find('input.qnt').val();
	
	var p =$(this).closest('tr').children('td.two').text();
	
	var sum = q * p;
	$(this).closest('tr').children('td.updateprice').text(sum);
	
		
    });
