<?php
require "/var/www/html/sandbox/git/Homework/task16/Service/ArticleManager.php";
$articleM = new ArticleManager();
$article = new Article(1222,"Test", "This article for test interface EntityManager","Me");
print_r($article);
$articleM->save($article);
print_r($articleM->getById(1222));
