<?php 
    $rjesenje = "";

    if(isset($_GET["number_a"]) && isset($_GET["number_b"])) {
        $a = $_GET["number_a"];
        $b = $_GET["number_b"];
        $c = (3 * $a - $b) / 2;
        $rjesenje =  "Rješenje: " . $c;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba2-4</title>
    <style>
        * {
            box-sizing: border-box;
        }
        main{
            width: 100%;
            max-width: 720px;
            margin: 0 auto;
        }

        form{
            display: flex;
            flex-direction: column;
            gap: 1.5em;
        }
        button{
            width: min-content;
        }
    </style>
</head>
<body>
    <main>
        <form method="get">
            <label>
                Vrijednost a:
                <input type="number" name="number_a">
            </label>

            <label>
                Vrijednost b:
                <input type="number" name="number_b">
            </label>
            <button type="submit">Pošalji</button>
        </form>
        <p><?php echo $rjesenje ?></p>
        
    </main>
</body>
</html>