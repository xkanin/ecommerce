<?php
$html	=	<<<HTML
<header role = "banner">
	<image src = "http://placehold.it/600x160" id = "logo"/>
	<nav role = "navigation">
		<ul>
		<li><a href = "#">Home</a></li>
		<li><a href = "#">Products</a></li>
		<li><a href = "#">About</a></li>
		<li><a href = "#">Contact</a></li>
		<li><input type = "search" placeholder="Search"/></li>
		<li><a href = "?page=login">Login</a></li>
		<li><a href = "#">Register</a></li>
		</ul>
	</nav>
</header>
HTML;

return $html;
?>
