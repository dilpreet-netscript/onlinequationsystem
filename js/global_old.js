$(document).ready(function(){

//$('#response_here').load('../php/showProductstemp.php');

//show products on button click
$('#showopt').click(function(){
	
 $.ajax({
        type: "GET",
        url: 'showProducts.php',
        data: {},
        success: function (response) {
            $('#showProducts').html(response);
            //console.log((response));
            },
        error: function () {
            $('#showProducts').html('There was an error!');
        }
    });
});

	
});