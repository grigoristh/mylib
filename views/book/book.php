<h1 ><?php echo $book[ 'title' ]; ?></h1>
<div class="row">
    <div class="col-md-7"><?php
        require 'views/book/book_info.php';
    ?></div>
    <div class="col-md-5"><?php
        require 'views/book/book_copies_table.php';
    ?></div>
</div>
