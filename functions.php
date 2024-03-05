<?php



/* functie voor het initialiseren van je databaseverbinding */

function connectToDb() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=gerlijn_groceries', 'root', 'root');
    } catch (PDOException $e) {
        die('Could not connect to db.');
    }
}



function fetchAllGroceries($pdo) {
    /* to prepare an SQL query */
    $statement = $pdo->prepare('select * from groceries');

    /* to execute the statement */
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_OBJ);
}
