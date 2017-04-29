<?php
session_start();

session_unset();

session_destroy();

header('Location:http://localhost/~olivia/CHEFOEUVRE/NOUVEAU/web/index.php');
