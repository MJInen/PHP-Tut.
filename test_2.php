<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php
            class Book
            {
//                !!!!!!!!!
//                var $title;
//                var $author;
//                var $pages;
//                !!!!!!!
                function __construct($aTitle, $aAuthor, $aPages)
                {
                    $this->title = $aTitle;
                    $this->author = $aAuthor;
                    $this->pages = $aPages;
                }
            }

            $book1 = new Book("ABC", "Ktoś", 1237);

            echo $book1->author;

            $book2 = new Book("Second book", "Też Ktoś", 4711);
            $book2->xyz2 = "------???";
            echo "<br>$book2->xyz2";

        ?>

    </body>
</html>
