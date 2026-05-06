<?php 

$ispis_prosjek = "";
$ispis_ocjena = "";
$pad = "";

if(isset($_POST["prva_ocjena"]) && isset($_POST["druga_ocjena"])) {
    $prva_ocjena = (float)$_POST["prva_ocjena"];
    $druga_ocjena = (float)$_POST["druga_ocjena"];

    if($prva_ocjena == 1 && $druga_ocjena == 1)  {
        $pad = "Student mora ponovno pisati oba kolokvija";
    } else if ($prva_ocjena == 1) {
        $pad = "Student mora ponovno pisati 1. kolokvij";
    } else if ($druga_ocjena == 1) {
        $pad = "Student mora ponovno pisati 2. kolokvija";
    } else {
        $ocjene = array($prva_ocjena, $druga_ocjena);
        $prosjek = ($ocjene[0] + $ocjene[1]) / 2;
        $zakljucna_ocjena = round($prosjek);
        $ispis_prosjek = "Srednja ocjena iz predmeta: " . $prosjek . "<br>";
        $ispis_ocjena = "Konacna ocjena iz predmeta: " . $zakljucna_ocjena;
    }
    
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba3-3</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }
        button{
            background-color: cadetblue;
            border-color: transparent;
            color: white;
            width: 5rem;
            height: 2rem;
            padding: 0.25em;
        }
    </style>
</head>
<body>
    <main>
        <h1>Izracun ocjene iz kolokvija</h1>
        <form action="" method="post">
            <label>
                Ocjena 1. kolokvija: 
                <input type="number" name="prva_ocjena" min="1" max="5" required>
            </label>
            <label>
                Ocjena 2. kolokvija: 
                <input type="number" name="druga_ocjena" min="1" max="5" required>
            </label>
            <button type="submit">POSALJI</button>
        </form>
        <?= $ispis_prosjek ?>
        <?= $ispis_ocjena ?>
        <?= $pad ?>
    </main>
</body>
</html>