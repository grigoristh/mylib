<?php

//return an array with bcopies that maatch the specified bid , on failure return false 
 function getBcopiesByBid( $bid ) {
        global $db ;
        $sql_query = "SELECT
                         bcopies.bcid, users.uid , bcopies.timecreated, bcopies.sold, bcopies.description, bcopies.image 
                    FROM 
                        users CROSS 
                    JOIN bcopies ON users.uid = bcopies.uid CROSS 
                    JOIN books ON books.bid = bcopies.bid 
                    WHERE bcopies.bid = ? 
                    ORDER BY timecreated DESC";

        $stmt = mysqli_prepare( $db, $sql_query );
        mysqli_stmt_bind_param( $stmt, 'i', $bid );
        mysqli_stmt_execute( $stmt );
        mysqli_stmt_store_result( $stmt );
        mysqli_stmt_bind_result($stmt, $bcid, $uid, $timecreated, $sold, $description, $image);
        $i=0;
        while(mysqli_stmt_fetch( $stmt ) ) {
            $books[ $i ][ 'bcid' ] = $bcid;
            $books[ $i ][ 'uid' ] = $uid;
            $books[ $i ][ 'timecreated' ] = $timecreated;
            $books[ $i ][ 'sold' ] = $sold;
            $books[ $i ][ 'description' ] = $description;
            $books[ $i ][ 'image' ] = $image;
            $i++;
        }
        if (!isset( $books ) ) {
            return false ;
        }
        return $books ;
    }

//return an array with Bcopies that belong to the user specified from uid , on failure returns false
    function getBcopiesByUid( $uid ) {
        global $db ;
        $sql_query = "SELECT
                         bcid, title, timecreated, sold, bcopies.description, image 
                    FROM 
                        users CROSS 
                    JOIN bcopies ON users.uid = bcopies.uid CROSS 
                    JOIN books ON books.bid = bcopies.bid 
                    WHERE users.uid = ? 
                    ORDER BY timecreated DESC";

        $stmt = mysqli_prepare( $db, $sql_query );
        mysqli_stmt_bind_param( $stmt, 'i', $uid );
        mysqli_stmt_execute( $stmt );
        mysqli_stmt_store_result( $stmt );
        mysqli_stmt_bind_result($stmt, $bcid, $title, $timecreated, $sold, $description, $image);
        $i=0;
        while(mysqli_stmt_fetch( $stmt ) ) {
            $books[ $i ][ 'bcid' ] = $bcid;
            $books[ $i ][ 'title' ] = $title;
            $books[ $i ][ 'timecreated' ] = $timecreated;
            $books[ $i ][ 'sold' ] = $sold;
            $books[ $i ][ 'description' ] = $description;
            $books[ $i ][ 'image' ] = $image;
            $i++;
        }
        if (!isset( $books ) ) {
            return false ;
        }
        return $books ;
    }


    function getLatestBooks( $number ) {
        global $db;
        $sql_query = 'SELECT books.bid, books.title, books.coverimage
            FROM bcopies CROSS
            JOIN books ON books.bid = bcopies.bid
            GROUP BY books.bid
            ORDER BY bcopies.timecreated DESC
            LIMIT ?
            ';
        $stmt = mysqli_prepare( $db, $sql_query );
        mysqli_stmt_bind_param( $stmt, 'i', $number );
        mysqli_stmt_execute( $stmt );
        mysqli_stmt_store_result( $stmt );
        mysqli_stmt_bind_result( $stmt, $bid, $title, $image );
        while( mysqli_stmt_fetch( $stmt ) ) {
            $books[ $bid ][ 'bid' ] = $bid;
            $books[ $bid ][ 'img' ] = $image ;
            $books[ $bid ][ 'title' ] = $title ;
         }
         return $books;
    }

 //Returns false if bookcp not found, otherwise an array with bookcp details
    function getBookcpDetails( $bcid ) {
        global $db;
        $sql_query = "SELECT `description`, `bid`, `image` FROM `bcopies` WHERE bcid = ?";
        $stmt = mysqli_prepare( $db, $sql_query );
        mysqli_stmt_bind_param( $stmt, 'i', $bcid );
        mysqli_stmt_execute( $stmt );
        mysqli_stmt_store_result( $stmt );
        mysqli_stmt_bind_result( $stmt, $description, $bid, $image );
        if( mysqli_stmt_fetch( $stmt ) ) {
            $bcopy[ 'description' ] = $description ;
            $bcopy[ 'image' ] = $image ;
            $bcopy[ 'bid' ] = $bid ;
            return $bcopy ;
         }
         return false;
    }


?>