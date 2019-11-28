<?php
include_once 'data.php';
class Publication
{
    public $id;
    public $title;
    public $date;
    public $short_content;
    public $content;
    public $preview;
    public $author_name;
    public $type;

    function __construct($row)
    {
        $this->id            = $row['id'];
        $this->title         = $row['title'];
        $this->date          = $row['date'];
        $this->short_content = $row['short_content'];
        $this->content       = $row['content'];
        $this->preview       = $row['preview'];
        $this->author_name   = $row['author_name'];
        $this->type          = $row['type'];
    }
}

class NewsPublication extends Publication
{
    public function printItem()
        {
            print '<h3 class="title_news">' . $this->title . '</h3>';
            print "<img class='img_news' src='$this->preview'><br />";
            print '<span class="short_content">' . $this->short_content . '</span><br />';
            print '<button>more</button>';
        }
}

class ArticlePublication extends Publication
{
    public function printItem()
        {
            print '<h3 class="title_news">' . $this->title . '</h3>';
            print "<img class='img_news' src='$this->preview'><br />";
            print '<span class="short_content">' . $this->short_content . '</span><br />';
            print '<span class="author_name">' . $this->author_name . '</span><br />';
            print '<button>more</button>';
        }
}

class PhotoReportPublication extends Publication
{
    public function printItem()
        {
            print '<h3 class="title_news">' . $this->title . '</h3>';
            print "<img class='img_news' src='$this->preview'><br />";
            print '<span class="short_content">' . $this->short_content . '</span><br />';
            print '<span class="author_name">' . $this->author_name . '</span><br />';
            print '<span class="date">' . $this->date . '</span><br />';
            print '<button>more</button>';
        }
}