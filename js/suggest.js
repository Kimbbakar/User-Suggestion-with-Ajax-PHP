$(document).ready(function(){

	$('#input').keyup( function()  { 
		var str = this.value;
	    $.ajax({
	        url: 'suggest.php',
	        type: 'GET',
	        data:{'q':str } ,
	        dataType: 'html',
	        success: function (data) { 
	            $('#output').html(data);
	        }
	    });
	} );
});
 



