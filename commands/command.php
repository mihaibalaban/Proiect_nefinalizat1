<?php
$db = new yii\db\Connection(...);

// return a set of rows. each row is an associative array of column names and values.
// an empty array is returned if no results
$posts = $db->createCommand('SELECT * FROM post')
            ->queryAll();

// return a single row (the first row)
// false is returned if no results
$post = $db->createCommand('SELECT * FROM post WHERE id=1')
           ->queryOne();

// return a single column (the first column)
// an empty array is returned if no results
$titles = $db->createCommand('SELECT title FROM post')
             ->queryColumn();

// return a scalar
// false is returned if no results
$count = $db->createCommand('SELECT COUNT(*) FROM post')
             ->queryScalar();