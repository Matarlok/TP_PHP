
<!-- Register form (popUp window)_______________________________________________________________________________________
------------------------------------------------------------------------------------------------------------------------->
<div class="modal fade" id="inscription">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Form title and corner close button ____________________________________________________________________
            ------------------------------------------------------------------------------------------------------------->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Inscription</h4>
            </div>

            <!-- Input fields __________________________________________________________________________________________
            ------------------------------------------------------------------------------------------------------------->
            <div class="modal-body">
                <!-- Form start ________________________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <form action="" method="post"

                <!-- Input error message _______________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <div id="errorMessage" class="col-lg-12 alert alert-danger hidden text-center" role="alert">
                    Vous devez completer TOUS les champs du formulaire
                </div>

                <!-- Password error message ____________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <div id="errorMessagePassword" class="col-lg-12 alert alert-danger hidden text-center" role="alert">
                    Les mots de passe ne correspondent pas
                </div>

                <!-- Name field ________________________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <div class="col-lg-6">
                    <div class="form-group" id="nameField">
                        <label for="inputName">Prenom</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Prenom" name="first_name">
                    </div>
                </div>

                <!-- Last name field ___________________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <div class="col-lg-6">
                    <div class="form-group" id="lastNameField">
                        <label for="inputLastName">Nom</label>
                        <input type="text" class="form-control" id="inputLastName" placeholder="Nom" name="last_name">
                    </div>
                </div>

                <!-- Username field ____________________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <div class="col-lg-12">
                    <div class="form-group" id="userNameField">
                        <label for="inputUserName">Nom utilateur</label>
                        <input type="text" class="form-control" id="inputUserName" placeholder="Nom utilateur" name="username">
                    </div>
                </div>

                <!-- Email field _______________________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <div class="col-lg-12">
                    <div class="form-group" id="emailField">
                        <label for="inputEmail">Adresse courriel</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Adresse courriel" name="email">
                    </div>
                </div>

                <!-- Password field ____________________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <div class="col-lg-12">
                    <div class="form-group" id="passwordField">
                        <label for="inputPassword">Mot de passe</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" name="password">
                    </div>
                </div>

                <!-- Password confirm field ____________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <div class="col-lg-12">
                    <div class="form-group" id="confirmPasswordField">
                        <label for="inputConfirmPassword">Confirmez votre mot de passe</label>
                        <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirmez votre mot de passe" name="confirm_password">
                    </div>
                </div>

                <!-- Small checkbox ____________________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <div class="col-lg-12">
                    <div class="checkbox ">
                        <label id="sendScrap">
                            <input  id="srap" type="checkbox" name="optin" value="1"> J'accepte de recevoir de la scrap dans mon inbox.
                        </label>
                    </div>
                </div>

                <!-- Form complete message _____________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <div id="success" class="col-lg-12 alert alert-success hidden text-center" role="alert">
                    Merci d'avoir tout remplie!
                </div>

                <!-- Srap accept message _______________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <div id="scrapSucess" class="col-lg-12 alert alert-success hidden text-center" role="alert">
                    Tu as accepter de recevoir de la scrap dans ton email
                </div>

                <!-- Submit button _____________________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <div class="modal-footer" style="border-top: 0">
                    <input id="formSubmit" type="submit" class="btn btn-primary" name="submitbt" value="Inscrivez-vous"/>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Login form (popUp window)__________________________________________________________________________________________
------------------------------------------------------------------------------------------------------------------------->
<div class="modal fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Form title and corner close button ____________________________________________________________________
            ------------------------------------------------------------------------------------------------------------->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Connexion</h4>
            </div>

            <!-- Input fields __________________________________________________________________________________________
            ------------------------------------------------------------------------------------------------------------->
            <div class="modal-body">
                <!-- Form start ________________________________________________________________________________________
                --------------------------------------------------------------------------------------------------------->
                <form action="" method="post"

                    <!-- Username field ________________________________________________________________________________
                    ----------------------------------------------------------------------------------------------------->
                    <div class="col-lg-12">
                        <div class="form-group" id="userNameLoginField">
                            <label for="inputUserNameLogin">Nom utilateur</label>
                            <input type="text" class="form-control" id="inputUserNameLogin" placeholder="Nom utilateur" name="username">
                        </div>
                    </div>

                    <!-- Password field ________________________________________________________________________________
                    ----------------------------------------------------------------------------------------------------->
                    <div class="col-lg-12">
                        <div class="form-group" id="passwordLoginField">
                            <label for="inputPassword">Mot de passe</label>
                            <input type="password" class="form-control" id="inputLoginPassword" placeholder="Mot de passe" name="password">
                        </div>
                    </div>

                    <!-- Submit button _________________________________________________________________________________
                    ----------------------------------------------------------------------------------------------------->
                    <div class="modal-footer" style="border-top: 0">
                        <input id="loginSubmit" type="submit" class="btn btn-primary" name="submitbt" value="Connexion"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>