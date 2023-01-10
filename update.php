

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Play:wght@400;700&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

    <title>Изменение</title>
    
</head>

<body>

    <header>

    <a id = "back" href = "index.php"> <span>назад</span> </a>

    </header>

    <div class = "plate_content" id = "create_plate">
    
        <?php 
        
            $xml = simplexml_load_file("src/data/data.xml");
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {

                $id = $_GET['id'];

                foreach($xml->plate as $plate) {
                    if ($plate['id'] == $id) {
                        $name = $plate->name;
                        $img = $plate->img;
                        break;
                    }
                }
            } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $id = $_POST['id'];

                foreach($xml->plate as $plate) {
                    if ($plate['id'] == $id) {
                        $plate->name = $_POST['nameplate'];
                        $plate->img = $_POST['imgplate'];
                        break;
                    }
                }

                $xml->saveXML("src/data/data.xml");
                echo "<script>
                alert('данные успешно обновлены');
                location.href = 'index.php';
                </script>";
            }

        ?>

        <form action="" method="POST">
            <input type="text" name="imgplate" value="<?php echo $img ?>">
            <br>
            <input type="text" name="nameplate" value="<?php echo $name ?>">
            <br>
        
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <br>
            <button type="submit" name="submit">Сохранить</button>
        </form>

    </div>
</body>

</html>



