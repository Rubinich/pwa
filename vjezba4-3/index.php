<?php 
$ispis = "";
$ulazni_niz = "";

function ispisiBrojRijeci($ulazni_niz) {
    $ispis = "<p>ulazni niz: <span class='istakni'>" . htmlspecialchars($ulazni_niz) . "</span> sadrzi " . str_word_count($ulazni_niz) . " rijeci.</p>";
    return $ispis;
}

if(isset($_POST['ulazni_niz'])) {
    $ulazni_niz = $_POST['ulazni_niz'];
    $ispis = ispisiBrojRijeci($ulazni_niz);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vjezba4-3</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }
        button{
            width: max-content;
            padding: 0.5em;
        }
        input{
            width: 500px;
        }
        .istakni{
            background-color: palevioletred;
            color: purple;
            padding: 0.2em;
        }
    </style>
</head>
<body>
    <main>
        <form method="post">
            <label>
                <b>Ulazni niz:</b><br>
                <input type="text" name="ulazni_niz" required>
            </label>
            <button type="submit">ISPISI BROJ RIJECI</button>
        </form>
        <?= $ispis ?>
    </main>
</body>
</html>