
$(document).ready(function(){

	
 
	$(".open").click(function(){
		var user = $('input[name=inlineRadioOptionsuser]:checked').val(); 
		var door = $('input[name=inlineRadioOptionsdoor]:checked').val(); 
  		
		$.ajax({
            url:"/api/check/"+user+"/"+door,
            type: "GET",
            async: true,
            success: function (data)
            {
                console.log(data);

                if (data == 1) {
                	$( ".output" ).removeClass( "failed" ).addClass( "success" );
                	$('.output').html('Opened (permitted)');
                }else{
                	$( ".output" ).removeClass( "success" ).addClass( "failed" );
                	$('.output').html("Cant be opened (not permitted)");
                }
                
            },
            error: function(xhr, textStatus, errorThrown){
                console.log('request failed');
            }
        });

	});


});