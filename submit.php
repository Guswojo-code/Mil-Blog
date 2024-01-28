
<?php
    require "connection.php";
    require "index.php";
        
    if ($_SERVER["REQUEST_METHOD"] = "POST") { 
    
        $content = $_POST["content"];
        $title = $_POST["title"];
    }


        // Inject it to the database

        
        $sql = "INSERT INTO blog_posts (title, post)
        VALUES ('$title', '$content')";
        
        $conn->query($sql);

        $conn->close();

    header("Location: index.php");
    exit;
?>
