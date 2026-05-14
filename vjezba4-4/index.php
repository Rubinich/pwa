<?php 

function jeLiProst($broj) {
    $counter = 0;
    for($i = 1; $i <= $broj; $i++) {
        if($broj % $i == 0)
            $counter++;
        if($counter > 2)
            return false;
    }
    return true;
}

function ispisJeLiProst($broj) {
    if(jeLiProst($broj))
        return "<p class='da'>Broj ". $broj ." je prost.</p>";
    else
        return "<p class='ne'>Broj ". $broj ." nije prost.</p>";
}

$ispis = "";
if(isset($_POST["broj"])) {
    $broj = $_POST["broj"];
    $ispis = ispisJeLiProst($broj);
}

$prosti = [];
for($i = 2; $i < 100; $i++) 
    if(jeLiProst($i))
        $prosti[] = $i;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba4-4</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            gap: 0.7rem;
        }
        button{
            width: max-content;
            padding: 0.5em;
        }

        .da{
            background-color: lightgreen;
            color: white;
        }
        .ne{
            background-color: lightcoral;
            color: white;
        }
        p{
            width: max-content;
            padding: 0.7em;
        }
    </style>
</head>
<body>
    <main>
        <form method="post">
            <label>
                <b>Upisite broj:</b><br>
                <input type="number" name="broj" min="2" max="100">
            </label>
            <button type="submit">PROVJERI JE LI BROJ PROST</button>
        </form>
        <?= $ispis ?>
        <p>Prosti brojevi manji od 100: <?= implode(", ", $prosti) ?></p>
    </main>
</body>
</html>