<div class="profle">
    <ul class="details">
    <li>Όνομα προφίλ χρήστη : <?php echo $data[ 'username' ];?></li>
    <li>Όνοματεπώνυμο χρήστη : <?php echo $data[ 'firstname' ]." ". $data[ 'lastname' ];?> </li>
    <li>Διέυθυνση ηλεκτρονικού ταχυδρομείου : <?php echo $data[ 'email' ] ?></li>
    <?php
        if ( $_GET[ 'uid' ] == $_SESSION [ 'userid' ] ) {
            echo '<li>';
            echo '<a href="editprofile.php">Επεξεργασία Προφίλ</a>';
            echo '</li>';
        }
    ?>
    </ul>
<div>

