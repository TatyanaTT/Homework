<?php

use Entity\Article;
use Entity\User;

error_reporting(E_ALL);
ini_set('display_errors','On');
require "/var/www/html/sandbox/git/Homework/task17/vendor/autoload.php";

try {
    $user = new User(20,'Alladin','Black','ab@example');
    $userM = new \Service\UserManager();
    $userM->save($user);
    $article = new Article(100,"Article with user","This is test",$user);
    $articleM = new \Service\ArticleManager();
    $articleM->save($article);
    print_r($articleM->getById(100));

} catch (Exception $e) {
    die("Mistake: {$e->getMessage()}\n");
}

