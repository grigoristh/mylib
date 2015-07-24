<?php
    $authorsNum = getAuthorsNum( $_GET );
    $genres = getGenres();
?>
<div>Συμπληρώστε τα επίσημα στοιχεία του αρχικού βιβλίου</div>
<form action="add_book.php?authors=<?php echo $authorsNum ?>" method="post" enctype="multipart/form-data" >
    <input type="text" name="title" id="title" placeholder="Τίτλος Βιβλίου" />
    <textarea name="description" id="description" >Περίληψη Βιβλίου</textarea>
    <input type="file" name="cover_img" id="cover_img" placeholder="Εικόνα Εξωφύλλου" />
    <?php
        for ( $i = 0; $i < $authorsNum; $i++ ) {
    ?>
            <input type="text" name="authors[]" placeholder="Συγγραφέας" />
    <?php
        }
    ?>
    <select multiple name="genres[]" >
    <?php
        foreach ( $genres as $id => $genre ) {
    ?>
      <option value="<?php echo $id; ?>"><?php echo $genre; ?></option>
    <?php
        }
    ?>
    </select>
    <input type="text" name="isbn" id="isbn" placeholder="ISBN" />
    <input type="submit" value="Καταχώριση Βιβλίου" />

</form>
