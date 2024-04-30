<?php

require('class.php');

class Post
{

    public $title;
    public $category;
    public $tag;

    public function __construct($title, Category $category, $tag)
    {
        $this->title = $title;
        $this->category = $category;
        $this->tag = $tag;
    }

    public function displayPost()
    {
        echo "Titolo: {$this->title}\n";
        echo "Categoria: ";
        $this->category->getMyCategory();
        echo "Tag: {$this->tag}\n";
    }
}

$post1 = new Post("La partita perfetta", new Sport, "1234");
$post2 = new Post("Il matrimonio perfetto", new Gossip, "1256");

$post1->displayPost();
$post2->displayPost();
