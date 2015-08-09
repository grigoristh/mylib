<div class="panel panel-default">
    <h2 class="panel-heading">Λίστα βιβλίων</h2>
    <ul class="list-group" id="books"><?php
        foreach ( $books as $id => $book ) {
            ?><li class="list-group-item book-preview">
                <div class="row">
                    <div class="card col-md-4">
                        <img src="<?php echo $book[ 'img' ]; ?>" />
                    </div>
                    <div class="details col-md-8">
                        <h2><?php echo $book[ 'title' ]; ?></h2>
                        <p class="description"><?php echo $book[ 'description' ]; ?></p><?php
                        if ( isset( $addBookMode ) ) {
                            ?><a href="add_book_cp.php?bid=<?php echo $book[ 'bid' ] ?>">Δήλωση για ανταλλαγή</a><?php
                        }
                        else {
                            ?><a href="book.php?bid=<?php echo $id ?>">Διαβάστε περισσότερα</a><?php
                        }
                    ?></div>
                </div>
            </li><?php
        }
    ?></ul>
</div>
