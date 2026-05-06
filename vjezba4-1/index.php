<?php 
$vozila = array("Audi", "BMW", "Renault", "Citroen", "Skoda");
$odabrana = array();

foreach($vozila as $v) {
    if(isset($_POST[$v])) 
        $odabrana[] = $v;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba4-1</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }
        button{
            border-color: transparent;
            background-color: cadetblue;
            color: white;
            width: 5rem;
            height: 3rem;
        }
    </style>
</head>
<body>
    <main>
        <form action="" method="post">
            <?php 
                echo "<p>Oznaci vozila:</p>";
                foreach($vozila as $v) {
                    echo "<label><input type='checkbox' name='" . $v . "' value='" . $v . "'>" . $v . "</label>";
                }
            ?>
            <button type="submit">POSALJI</button>
        </form>
        <?php 
                if(!empty($odabrana)) {
                    echo "<p>Odabrana vozila:<p>";
                    foreach($odabrana as $o) {
                        echo "<p>" . $o . "</p>";
                    }
                }
            ?>
    </main>
</body>
</html>