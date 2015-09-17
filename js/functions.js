
/*-- ONLOAD EXECUTE ALL FUNCTIONS ______________________________________________________________________________________
-------------------------------------------------------------------------------------------------------------------------*/
$(document).ready(function () {


/*-- Image 1 ___________________________________________________________________________________________________________
-------------------------------------------------------------------------------------------------------------------------*/
		/*-- OnClick on id "pop_image1" toggle modal function (visible) -------------------------------------------------*/
		$('#pop_image1').click(function() {
			$('#image1').modal('toggle');
		});

		/*-- OnClick on id "popout_image1" toggle modal function (invisible) --------------------------------------------*/
		$('#popout_image1').click(function() {
			$('#image1').modal('toggle');
		});


/*-- Image 2 ___________________________________________________________________________________________________________
-------------------------------------------------------------------------------------------------------------------------*/
		/*-- OnClick on id "pop_image2" toggle modal function (visible) -------------------------------------------------*/
		$('#pop_image2').click(function() {
			$('#image2').modal('toggle');
		});

		/*-- OnClick on id "popout_image2" toggle modal function (invisible) --------------------------------------------*/
		$('#popout_image2').click(function() {
			$('#image2').modal('toggle');
		});


/*-- Image 3 ___________________________________________________________________________________________________________
-------------------------------------------------------------------------------------------------------------------------*/
		/*-- OnClick on id "pop_image3" toggle modal function (visible) -------------------------------------------------*/
		$('#pop_image3').click(function() {
			$('#image3').modal('toggle');
		});

		/*-- OnClick on id "pop_image3" toggle modal function (invisible) -----------------------------------------------*/
		$('#popout_image3').click(function() {
			$('#image3').modal('toggle');
		});


/*-- Inscription window ________________________________________________________________________________________________
-------------------------------------------------------------------------------------------------------------------------*/
		/*-- OnClick on id "pop_inscription" toggle modal function (visible) --------------------------------------------*/
		$('#pop_inscription').click(function() {
			$('#inscription').modal('toggle');
		});


/*-- Login window ________________________________________________________________________________________________
 ------------------------------------------------------------------------------------------------------------------------*/
		/*-- OnClick on id "pop_inscription" toggle modal function (visible) ----------------------------------------------------*/
		$('#pop_login').click(function() {
			$('#login').modal('toggle');
		});


/*-- FORM CHECK FUNCTION _______________________________________________________________________________________________
-------------------------------------------------------------------------------------------------------------------------*/
	$("#formSubmit").click(function() {


/*-- POPUP MESSAGES ____________________________________________________________________________________________________
-------------------------------------------------------------------------------------------------------------------------*/
		/*-- if any field is empty show error message __________________________________________________________________
		-----------------------------------------------------------------------------------------------------------------*/
		if (   $("#inputName")           .val() == ""
			|| $("#inputLastName")       .val() == ""
			|| $("#inputEmail")          .val() == ""
			|| $("#inputPassword")       .val() == ""
			|| $("#inputConfirmPassword").val() == ""
		    ){
			$("#errorMessage").removeClass("hidden");

		}else{
			$("#errorMessage").addClass("hidden");
		}

		/*-- if password dont match show password error message ________________________________________________________
		-----------------------------------------------------------------------------------------------------------------*/
        if ($("#inputPassword").val() != $("#inputConfirmPassword").val()) {
            $("#errorMessagePassword").removeClass("hidden");

        }else{
            $("#errorMessagePassword").addClass("hidden");
        }

		/*-- if checkBox is not true show checkBox error message _______________________________________________________
		-----------------------------------------------------------------------------------------------------------------*/
		if ($('#srap').is(":checked") == true) {
			$("#scrapSucess").removeClass("hidden");

		}else{
			$("#scrapSucess").addClass("hidden");
		}

		/*-- if everything is in order show success message ____________________________________________________________
		-----------------------------------------------------------------------------------------------------------------*/
        if (    $("#inputName")           .val() != ""
			&&  $("#inputLastName")       .val() != ""
			&&  $("#inputUserName")       .val() != ""
			&&  $("#inputEmail")          .val() != ""
			&&  $("#inputPassword")       .val() != ""
			&&  $("#inputConfirmPassword").val() != ""
			&& ($("#inputPassword")       .val() ==  $("#inputConfirmPassword").val() )
		    ){
			$("#success").removeClass("hidden");

        }else{
            $("#success").addClass("hidden");
        }


/*-- HIGHTLIGHTS _______________________________________________________________________________________________________
-------------------------------------------------------------------------------------------------------------------------*/
		/*-- if name is empty highlight inputName field_________________________________________________________________
		-----------------------------------------------------------------------------------------------------------------*/
		if ($("#inputName").val() == "") {
			$("#nameField").addClass("has-error");

		}else{
			$("#nameField").removeClass("has-error");
		}

		/*-- if last name is empty highlight inputLastName field _______________________________________________________
		-----------------------------------------------------------------------------------------------------------------*/
		if ($("#inputLastName").val() == "") {
			$("#lastNameField").addClass("has-error");

		}else{
			$("#lastNameField").removeClass("has-error");
		}

		/*-- if user name is empty highlight inputUserName field _______________________________________________________
		-----------------------------------------------------------------------------------------------------------------*/
		if ($("#inputUserName").val() == "") {
			$("#userNameField").addClass("has-error");

		}else{
			$("#userNameField").removeClass("has-error");
		}

		/*-- if email is empty highlight inputEmail field ______________________________________________________________
		-----------------------------------------------------------------------------------------------------------------*/
		if ($("#inputEmail").val() == "") {
			$("#emailField").addClass("has-error");

		}else{
			$("#emailField").removeClass("has-error");
		}

		/*-- if password is empty highlight inputPassword field ________________________________________________________
		-----------------------------------------------------------------------------------------------------------------*/
		if (    $("#inputPassword").val() == ""
			|| ($("#inputPassword").val() != $("#inputConfirmPassword").val() )
		    ){
			$("#passwordField").addClass("has-error");

		}else{
			$("#passwordField").removeClass("has-error");
		}

		/*-- if confirm password is empty highlight inputConfirmPassword field _________________________________________
		-----------------------------------------------------------------------------------------------------------------*/
		if (    $("#inputConfirmPassword").val() == ""
			|| ($("#inputConfirmPassword").val() != $("#inputPassword").val() )
		    ){
			$("#confirmPasswordField").addClass("has-error");

		}else{
			$("#confirmPasswordField").removeClass("has-error");
		}
	});
});