<div class="group" >
    <div class="container" >
        <h1>Διαθέσιμα Βιβλία<h1>
        <ul id="books">
        <?php
            foreach ( $books as $id => $book ) {
        ?>
            <li class="book-preview" >
                <div class="card" >
                    <img src="<?php echo $book[ 'img' ]; ?>" />
                </div>
                <div class="details" >
                    <h2><?php echo $book[ 'title' ]; ?></h2>
                    <p class="description" ><?php echo $book[ 'description' ]; ?></p>
                <?php
                        if ( isset( $addBookMode ) ) {
                ?>
                    <a href="add_book_cp.php?bid=<?php echo $book[ 'bid' ] ?>">Δήλωση για ανταλλαγή</a>
                <?php
                        }
                    else {
                ?>
                    <a href="book.php?bid=<?php echo $id ?>">Διαβάστε περισσότερα</a>
                </li>
                <?php
                        }
                    }
                ?>
                </div>
        </li>
    </div>
</div>