<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
require "/var/www/html/sandbox/git/Homework/task16/config/config.php";
require "/var/www/html/sandbox/git/Homework/task16/Entity/Article.php";
require "/var/www/html/sandbox/git/Homework/task16/Service/Interface/EntityManagerInterface.php";
class ArticleManager implements EntityManagerInterface
{

    public function getById(int $id)
    {
        $query = "SELECT * From blog WHERE id = $id";
        $selectById = mysqli_query($this->connection(), $query);
        $rows = mysqli_fetch_array($selectById, MYSQLI_ASSOC);
        $object = new Article($id,$rows['title'],$rows['text'],$rows['blogger']);
        return $object;
    }

    public function save(BaseEntity $object)
    {
        $query = "SELECT COUNT(id) AS id1 FROM blog WHERE id =".$object->getId();
        $selectById = mysqli_query($this->connection(), $query);
        $rows = mysqli_fetch_array($selectById, MYSQLI_ASSOC);
        if (empty($rows['id1'])){
            $query = "INSERT INTO `blog` (blog.id,blog.title, blog.text,blog.blogger) 
                        VALUES ('".$object->getId()."','".$object->getTitle()."','
                        ".$object->getText()."','".$object->getBlogger()."')";
        }
        else {
            $query = "UPDATE blog SET title=".$object->getTitle().", text =".$object->getText().
                ", blogger=".$object->getBlogger()."WHERE id=".$object->getId();
        }
        $selectById = mysqli_query($this->connection(), $query);

    }

    private function connection()
    {
        $link = mysqli_connect(host, user, password)
        or die ('Can\'t connect' . mysqli_error());
        mysqli_select_db($link, databaseName) or die ('Can\'t find');
        return $link;
    }
}
$artM = new ArticleManager();
$art = new Article(1220,1,12,0041);
print_r($artM->getById(2));
$artM->save($art);
