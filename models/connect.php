<?php

  $succes = mysql_connect(
    'db16.papaki.gr:3306',
    'ourteam',
    'Aotx6!'
  );

  if ( !$succes ) {
    echo "Failed to connect with the database.";
  }

  mysql_select_db( 'mylib' );

?>
