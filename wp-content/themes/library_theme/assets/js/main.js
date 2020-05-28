jQuery(document).ready(function(){
	jQuery('#user_register_btn').click(function(e){
		e.preventDefault();
		var user_name = jQuery('#user_name').val();
		var user_email = jQuery('#user_email').val();
		var user_pass = jQuery('#user_pass').val();
		var user_ticket = jQuery('#user_ticket').val();
		var error= '';
		if(user_name==""){
			error = 'Вы не вели имя';
		}else if(user_email ==""){
			error = "Вы не вели эл.адрес";
		}else if(user_ticket==""){
			error = "Вы не вели номер билета";
		}else if(user_pass == ""){
			error = 'Вы не вели пароль';
		};
		if(error !=""){
			jQuery('.register_error').text(error);
		}else{
			$.ajax({
			  url: ,
			  type: "POST",
			  data: data,
			  success: success,
			  dataType: dataType
});
		}

	})
})