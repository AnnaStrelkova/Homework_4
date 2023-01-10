<?php 
 
    if (isset($_GET['id'])) {

        // id из запроса
        $id = $_GET['id'];

        $xml = simplexml_load_file("src/data/data.xml");

        $i = 0; 


        foreach($xml->plate as $plate) {
            if ($plate['id'] == $id) {
                unset($xml->plate[$i]);
                break;
            }
            $i++;
        }

        $xml->saveXML("src/data/data.xml");
        echo "<script>location.href='index.php'</script>";
    }
?>
