<?php
session_start();
require '../model/model.php';
$articles = getArticles();
$chosen_articles = chosenArticles();

require '../views/view_index.php';
