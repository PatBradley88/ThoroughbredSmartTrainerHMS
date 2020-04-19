$(document).ready(function() {

	$("#hideLogin").click(function() { //click #hideLogin
		$("#loginForm").hide();		   //hide #loginForm
		$("#registerForm").show();	   //show #registerForm
	});
	$("#hideRegister").click(function() {  //click #hideRegister
		$("#loginForm").show();			   //show #loginFOrm
		$("#registerForm").hide();		   //hide #registerForm
	});
});