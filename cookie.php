<?php

if (isset($_COOKIE['username'])) {
	echo "Dobrodošao " .$_COOKIE['username'];

} else {
	echo "Dobrodošao neznanče. | <a onclick='pali()'>Prijavi se</a>";
}


?>