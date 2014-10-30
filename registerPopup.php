<div id="registerPopup">
    <form action="tools/register.php" method="post" class="registerForm">
        <div class="registerFormLine">
            <label for="registerFormUsername" class="registerFormLabel">Username</label>
            <input type="text" name="userName" placeholder="Username" id="registerFormUsername" class="registerFormField" onchange="registerFormCheckUsername()">
        </div>
        <div class="registerFormLine">
            <label for="registerFormPassword" class="registerFormLabel">Password</label>
            <input type="password" name="password" placeholder="Password" id="registerFormPassword" class="registerFormField" onchange="registerFormCheckConfirmPassword()">
        </div>
        <div class="registerFormLine">
            <label for="registerFormPasswordConfirm" class="registerFormLabel">Confirm password</label>
            <input type="password" name="passwordConfirm" placeholder="Confirm password" id="registerFormPasswordConfirm" class="registerFormField" onchange="registerFormCheckConfirmPassword()">
        </div>
        <div class="registerFormLine">
            <label for="registerFormEmail" class="registerFormLabel">E-mail</label>
            <input type="email" name="email" placeholder="E-mail" id="registerFormEmail" class="registerFormField" onchange="registerFormCheckConfirmEmail()">
        </div>
        <div class="registerFormLine">
            <label for="registerFormEmailConfirm" class="registerFormLabel">Confirm e-mail</label>
            <input type="email" name="emailConfirm" placeholder="Confirm e-mail" id="registerFormEmailConfirm" class="registerFormField" onchange="registerFormCheckConfirmEmail()">
        </div>
        <div class="registerFormLine">
            <div class="registerFormSubmitButtonDiv">
                <input type="submit" value="Register" class="registerFormSubmitButton" id="registerFormSubmitButton" disabled/></div
            ><div class="registerFormSubmitButtonDiv">
                <button type="button" class="registerFormSubmitButton" onclick="hideRegisterPopup()">Cancel</button>
            </div>
        </div>
    </form>
</div>