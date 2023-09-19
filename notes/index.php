<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
    //wyciąganie danych z bazy - ŁĄCZENIE
        $db = new mysqli('localhost', 'root', '', 'notes');


        if(isset($_REQUEST['title'])) {
            //dodajemy nową notatkę
            $title = $_REQUEST['title'];
            $content = $_REQUEST['content'];
            $sql = "INSERT INTO notes (`id`, `title`, `content`) VALUES (NULL, '$title', '$content')";
            //wysyłanie do bazy
            $result = $db->query($sql);
            if($result) {
                echo '<div class="alert alert-primary" role="alert">Notatka dodana pomyślnie!</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Błąd wysyłania formularza!</div>';
            }
        }



        $sql = "SELECT * FROM notes";
        $result = $db->query($sql);

    ?>

    <div class="container">
        <h1 class="text-center p-4">Moje notatki</h1>
        <form action="#" method="POST">
        <div class="form-group col-md-4 col-xl-6">
            <label for="inputTitle" class="form-label" >Tytuł</label>
            <input type="text" class="form-control text-secondary" id="inputTitle" name="title" value="Tytuł" onclick="this.value='';">
        </div>
        <div class="form-group col-md-6 col-xl-8">
            <label for="inputContent" class="form-label">Treść</label>
            <input type="text" class="form-control text-secondary" id="inputContent" name="content" value="Treść" onclick="this.value='';">
        </div>
        <div class="form-group col-md-1 col-xl-2 mt-2 text-end">
            <button type="submit" class="btn btn-secondary" id="inputSubmit">Zapisz</button>
        </div>
        </form>

        <div class="row">
            <?php
                while($row = $result->fetch_assoc()){
                    //stylizowanie dla każdej notatki
                    echo "<div class='col-md-4 col-xl-3 border bg-secondary-subtle m-3 text-center rounded-4 p-2'";
                    $title = $row['title'];
                    $content = $row['content'];
                    $date = $row['date'];
                    echo "<h3>$title</h3>";
                    echo "<p class='text-body-secondary'>$content</p>";
                    echo "<h6>$date</h6>";
                    echo "</div>";
                }

            ?>
        </div>
    </div>
</body>
</html>