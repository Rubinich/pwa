<?php
$br_redaka = isset($_POST['broj_redaka']) ? $_POST['broj_redaka'] : '';
$br_kolona = isset($_POST['broj_kolona']) ? $_POST['broj_kolona'] : '';

$tablica = '';
if($br_redaka !== '' && $br_kolona !== '') {
    $tablica = '<table>';
    for($i = 0; $i < (int)$br_redaka; $i++) {
        $tablica .= '<tr>';
        for($j = 0; $j < (int)$br_kolona; $j++) {
            $tablica .= '<td></td>';
        }
        $tablica .= '</tr>';
    }
    $tablica .= '</table>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab2-pitanje2</title>
    <style>
        table, td{
            border: 1px solid black;
            border-collapse: collapse;
        }

        td{
            width: 5em;
            height: 2.5em;
        }
    </style>
</head>
<body>
    <main>
        <form action="" method="post">
            <fieldset>
                <label for="opis_redaka">Upisite broj redaka<br>
                    <input type="number" name="broj_redaka" id="broj_redaka">
                </label>
            </fieldset>
            <fieldset>
                <label for="opis_kolona">Upisite broj kolona<br>
                    <input type="number" name="broj_kolona" id="broj_kolona">
                </label>
            </fieldset>
            <button type="submit">Napravi tablicu</button>
        </form>
        <br>
        <?=  $tablica ?>
    </main>
</body>
</html>