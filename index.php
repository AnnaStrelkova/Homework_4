
<?php  

$xml = simplexml_load_file("src/data/data.xml");

?>

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
    
    <title>Винил</title> 
    
</head>

<body>

    <header>

        <div class = "island" id = "top">

            <h1 id = "title">моя коллекция винила</h1>

         
            <a id = "make" href="create.php?id=<?php echo $plate['id'] ?>">создать</a>
        </div>

    </header>


    <div class = "main">

        <?php foreach($xml->plate as $plate) { ?>

        <div class = "plate">

            <div class = "plate_content">
                <img src=" <?php echo $plate->img ?> " alt="">
                <div class="plate_name"> <?php echo $plate->name ?> </div>
            </div>

            <a href="update.php?id=<?php echo $plate['id'] ?>">изменить</a>
            <a href="delete.php?id=<?php echo $plate['id'] ?>">удалить</a>

        </div>

        <?php } ?>

    </div>


</body>
</html>



