<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
require "config.php";

class ArticleForBlog
{
    public $title;
    public $text;
    public $blogger;
    public $isPublish = false;

    public function publish()
    {
        $this->isPublish = true;
        echo "The article was published <br>";
    }

    public function save()
    {
        $query = "INSERT INTO `blog` (title, text,blogger) VALUES ('$this->title','$this->text','$this->blogger')";
        mysqli_query($this->connection(), $query, MYSQLI_STORE_RESULT);
        echo "The information was saved <br>";
    }

    private function connection()
    {
        $link = mysqli_connect(host, user, password)
        or die ('Can\'t connect' . mysqli_error());
        mysqli_select_db($link, databaseName) or die ('Can\'t find');
        return $link;
    }
}