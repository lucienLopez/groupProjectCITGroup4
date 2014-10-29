<div class="topBar">
	<div class="rightHalf">
		<?php if(!$connected){ ?>
			<form action="tools/login.php" method="post" class="loginForm">
				<input type="text" name="userName" id="userName" placeholder="Username" class="loginFormFields">
				<input type="password" name="password" id="password" placeholder="Password" class="loginFormFields">
				<input type="submit" value="Login" class="loginSubmitButton">
			</form>
            <button onclick="showRegisterPopup()" class="registerButton">Register</button>
		<?php }
		else{
			if($isAdmin){?>
				<a href="index.php?page=backofficeHomepage"><button class="loginSubmitButton">backoffice</button></a>
			<?php } ?>
			<a href="tools/logout.php"><button class="loginSubmitButton">logout</button></a>
		<?php }?>
	</div>
</div>