<?php

require "/var/www/html/sandbox/git/Homework/task16/Entity/BaseEntity.php";
class Article extends BaseEntity
{
    private $title;
    private $text;
    private $blogger;
    private $isPublish;

    /**
     * Article constructor.
     * @param $title
     * @param $text
     * @param $blogger
     *
     */
    public function __construct($id,$title, $text, $blogger)
    {
        $this->setId($id);
        $this->title = $title;
        $this->text = $text;
        $this->blogger = $blogger;

    }

    public function publish()
    {
        $this->isPublish=true;
        echo "The article was published <br>";
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return mixed
     */
    public function getBlogger()
    {
        return $this->blogger;
    }

}
