<div class="group" >
    <div class="container" >
        <form action = "<?php echo createUrl( 'add_book_cp.php', [], [ 'bid' ] ); ?>" method = "POST" enctype="multipart/form-data">
            <textarea type = "text" name = "description" >Περιγράψτε την κατάσταση στην οποια βρίσκεται το αντίτυπο σας, τη γλώσσα και οτιδήποτε άλλο θεωρείτε σκόπιμο να αναφέρετε</textarea>
            <label for="bcopyimage">Φωτογραφία του αντιτύπου σας:</label>
            <input type = "file" name = "bcopyimage" id ="bcopyimg" />
            <input type = "submit" value = "Καταχώρυση αντιτύπου"/>
        </form>
    </div>
</div>
