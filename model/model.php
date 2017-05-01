<?php

// Add a member
function addMember($lastname, $firstname, $username, $email, $password){
  require 'database_access.php';
  $addMember = $bdd->prepare('INSERT INTO signup (lastname, firstname, username, email, password) VALUES(:lastname, :firstname, :username, :email, :password)');

  $addMember->execute(array(
    'lastname' => $lastname,
    'firstname' => $firstname,
    'username' => $username,
    'email' => $email,
    'password' => $password
  ));
}

// Return all members
function getMembers(){
  require 'database_access.php';
  $members = $bdd->query('SELECT username, password FROM signup');
  return $members;
}

// Add an article
function addArticle($country, $title, $year, $first_paraph, $second_paraph, $third_paraph){
  require 'database_access.php';
  $addArticle = $bdd->prepare('INSERT INTO articles (country, year, title, first_paraph, second_paraph, third_paraph, date_modification) VALUES(:country, :year, :title, :first_paraph, :second_paraph, :third_paraph, NOW())');

  $addArticle->execute(array(
    'country'=> $country,
    'year'=> $year,
    'title' => $title,
    'first_paraph' => $first_paraph,
    'second_paraph' => $second_paraph,
    'third_paraph' => $third_paraph
  ));
}

// Return all articles
function getArticles(){
  require 'database_access.php';
  $articles = $bdd->query('SELECT * FROM articles ORDER BY year DESC LIMIT 0, 8');
  return $articles;
}

// Return chosen article
function chosenArticles(){
  $country = $_GET['country'];
  require 'database_access.php';
  $chosen_articles = $bdd->query('SELECT * FROM articles WHERE country="'.strtoupper($country).'"');
  return $chosen_articles;
}

// Update articles
function updateArticle($newcountry, $newtitle, $newyear, $newfirst_paraph, $newsecond_paraph, $newthird_paraph){
  require 'database_access.php';
  $updateArticle = $bdd->prepare('UPDATE articles SET
    country= :newcountry,
    year= :newyear,
    title= :newtitle,
    first_paraph= :newfirst_paraph,
    second_paraph= :newsecond_paraph,
    third_paraph= :newthird_paraph
     WHERE country="'.strtoupper($country).'"');

  $updateArticle->execute(array(
    'country' => $_GET['country'],
    'newcountry'=> $newcountry,
    'newyear'=> $newyear,
    'newtitle' => $newtitle,
    'newfirst_paraph' => $newfirst_paraph,
    'newsecond_paraph' => $newsecond_paraph,
    'newthird_paraph' => $newthird_paraph

  ));
}





 ?>
