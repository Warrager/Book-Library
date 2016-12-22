<?php require_once 'login.php';

$db_server = new PDO($db_hostname . $db_database . $db_charset, $db_username, $db_password);
$db_server->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (!$db_server) die ("Unable to connect." );


try {
    $query = "CREATE TABLE isbn_to_authors (
    author_id INT NOT NULL,
    isbn CHAR(13) NOT NULL,
    FOREIGN KEY (author_id) references authors (author_id),
    FOREIGN KEY (isbn) references books (isbn)
)";

    $db_server->exec($query);
    echo "table created successfully";
    }
    catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

?> 
