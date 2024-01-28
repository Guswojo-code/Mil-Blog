<?php
require "connection.php";
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=PT+Sans:ital@1&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="
https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css
" rel="stylesheet">

    <title>Mil-Blog - Forside</title>
</head>
<body>
    <h1 class="title is-1 start-text">Velkommen til!
    </h1>
    <div id="blogPosts">

    <?php
        /*Lav en privat "chat" jeg kun kan skrive men andre kan ikke se den. Fuck jeg træt gsdop nsdfbyhbgbhjbdsf*/
            $title="none";
            $content="none";

            ?>
            <form action="submit.php" method="POST">
                <input type="text" id="title" name="title"> <br/>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
                <input type="submit" value="Dillar">
            </form>
            <br>

            
            <?php 
            $query = mysqli_query($conn, "SELECT * FROM blog_posts"); 

            while ($row = mysqli_fetch_array($query)) { ?>
            <div class="card title" style="min-height: 300px; width: 300px; display: block; margin-left: auto; margin-right: auto; text-align:center;">
            <?php echo "<p class='title'> $row[title]</p>";?>
            <?php echo "<p class='subtitle'> $row[post]</p>";?>
            </div>
            <?php } ?>
            
    
    </div>
</body>
</html>