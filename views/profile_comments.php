<div>
Aφήστε το σχόλιο σας :
    <form action = "addcomment.php?profileid=<?php echo $_GET[ 'uid' ]; ?> " method = "post">
        <input type = "text" name = "comment" placeholder = "Σχολιάστε"/>
        <input type = "submit" value = "Αποστόλη">
    </form>
Σχολια :
     <ul> 
            <?php
                 if ( empty($comments ) ) {
                    die("no comments found");
                 }
                 foreach ( $comments as $value ) {
            ?>
                <li><?php echo $value[ 'comment' ]." authored by : ".$value[ 'author' ];?></li>
            <?php }
            ?>
     </ul>
</div>



