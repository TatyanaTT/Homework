<?php
require "ArticleForBlog.php";

$article = new ArticleForBlog();
$article->title = $_POST['title'];
$article->text = $_POST['text'];
$article->blogger = $_POST['blogger'];
$article->publish();
print_r($article->isPublish);
if (isset($_POST['title']) or isset($_POST['text']) or isset($_POST['blogger'])){
    $article->save();
}
