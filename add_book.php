<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Add Book to DB</title>
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"> </script>
</head>

<body>
<?php

function checker($string, $not_empty = true, $type = "post"){
    if ($type === "post"){
        if (isset($_POST[$string])){
            return $not_empty ? (!empty($_POST[$string]) ? true : false) : true;
        } 
        else {
            return false;
        }
    }
}

if (isset($_POST["hidden"])){
    if (checker("book_name") || checker("author_name") || checker("submit")){
      echo "All fields satisified";
    }
    else {
        echo "Error";
    }
}

?>
    <div id = "test"> <p> </p> </div>
    <form id = "my_form" action = "" method = "POST">
        <label for = "book_name"> Title of Book: </label>
        <input type = "text" id = "book_name" name = "book_name"> <br>
        <label for = "author_name"> Author Name: </label>
        <input type = "text" id = "author_name" name = "author_name"> <br>
        <label for = "isbn"> ISBN (Accepts both 10 and 13 digits): </label>
        <input type = "text" id = "isbn" name = "isbn"> <br>
        <input type = "hidden" name = "hidden">
        <input type = "submit" value = "submit" id = "submit_button">
    </form>
    <div> <p id = "error_display"> </p></div>

<script src="add_book.js"></script>
</body>
</html>

