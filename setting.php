<?php

include("includes/includedfiles.php")


?>

<div class="entityInfo">

	<div class="centerSection">

		<div class="userInfo">
			<h1><?php echo $userLoggedIn->getFirstAndLastname(); ?></h1>
			<div class="buttonItems">
				<button class="button" onclick="openPage('updateDetails.php')">USER DETAIL</button>
				<button class="button"  onclick="logout()">LOGOUT</button>
			</div>
		</div>

	</div>

</div>