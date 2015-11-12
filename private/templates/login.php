<?php
$html	=	<<<HTML
<div id = "loginForm">
<form id = "login" method = "POST" action = "../private/controllers/login.php">
	<label for = "userName">User Name</label>
	<input type = "text" id = "userName" name = "userName"/>
	<label for = "password">Password</label>
	<input type = "text" id = "password" name = "password"/>
	<button type = "submit" name = "login">Submit</button>
</form>
</div>
HTML;

return $html;
?>