

$(document).ready(function(){
	// $('#username').blur(function(){
	// 	$.ajax({
	// 	  method: "POST",
	// 	  url: "checkusername",
	// 	  data: { 
	// 	  	username: $(this).val(),
	// 	  	'_token': $('meta[name="csrf-token"]').attr('content')
	// 	  },
	// 	  success: function(data)
	// 	  {
	// 	  	if(data == 'false')
	// 	  	{
	// 	  		$('#duplicateusernamewarning').text('Username exists! Please choose another');
	// 	  	}
	// 	  }

	// 	})
	// 	.done(function( msg ) {
	// 		//alert( "Data Saved: " + msg );
	// 	});
	// });

	$( "#signup_form" ).validate({
	  rules: {
	    username: {
	      required: true,
	      remote: {
	        url: "checkusername",
	        type: "post",
	        data: {
				username: function() {
				return $( "#username" ).val();
				},
		  		'_token': $('meta[name="csrf-token"]').attr('content')

	        }
	      }
	    },
	    email: {
	      required: true,
	      remote: {
	        url: "checkemail",
	        type: "post",
	        data: {
				email: function() {
				return $( "#email" ).val();
				},
		  		'_token': $('meta[name="csrf-token"]').attr('content')

	        }
	      }
	    }
	  }
	});

	$('#email').focus(function(){		
		$('#emailinfo').removeClass('hidden');
	});

	$( "#signup_form" ).submit(function(e){
	// 	e.preventDefault();
	// 	if($( "#signup_form" ).valid()){
	// 		$(this).submit();
	// 	}

	});
	$('#proceed_signup').click(function(){
		if($( "#signup_form" ).valid()){
			$('#firststep').hide();
			$('#secondstep').show();
		}
	});







});


function addfav(e){

	userid = 1;
	favid = (e.id).match(/\d+/)[0];

	var sendFav = $.post( "users/fav", { user_id:userid, fav_id:favid}, function(data) {
	  alert( data );
	})
	.done(function() {
		// alert( "second success" );
	})
	.fail(function() {
		// alert( "error" );
	})
	.always(function() {
		// alert( "finished" );
	});


}

function showint(e){

	userid = 1;
	intid = (e.id).match(/\d+/)[0];

	var sendFav = $.post( "users/interest", { user_id:userid, int_id:intid}, function(data) {
	  alert( data );
	})
	.done(function() {
		// alert( "second success" );
	})
	.fail(function() {
		// alert( "error" );
	})
	.always(function() {
		// alert( "finished" );
	});

}