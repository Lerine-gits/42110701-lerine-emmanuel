<?php
include 'dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_id = $_POST['book_id'];
    $book_name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $year_of_publication = $_POST['year_of_publication'];

    $sql = "INSERT INTO books (book_id, book_name, author_name, year_of_publication) VALUES ('$book_id', '$book_name', '$author_name', '$year_of_publication')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
