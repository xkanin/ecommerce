<?php
$html	=	<<<HTML
<form method = "POST" action = "../private/controllers/login.php">
	<label for = "userName">User Name</label>
	<input type = "text" id = "userName" name = "userName"/>
	<label for = "password">User Name</label>
	<input type = "text" id = "password" name = "password"/>
	<button type = "submit" name = "login">Submit</button>
</form>
HTML;

return $html;
?>