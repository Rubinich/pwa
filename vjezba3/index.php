<?php

$host     = "localhost";
$korisnik = "root";
$lozinka  = "";
$ime_baze = "evidencija_baza";

$con = mysqli_connect($host, $korisnik, $lozinka, $ime_baze);

if (!$con) {
    die("Konekcija nije uspjela: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime_studenta     = $_POST["ime"];
    $prezime_studenta = $_POST["prezime"];
    $jmbag            = $_POST["jmbag"];
    $prisutnost       = $_POST["prisutnost"];

    $query = "INSERT INTO evidencija (ime_studenta, prezime_studenta, JMBAG, prisutnost)
              VALUES ('$ime_studenta', '$prezime_studenta', $jmbag, '$prisutnost')";

    if (mysqli_query($con, $query)) {
        echo "Podaci su uspješno uneseni.";
    } else {
        echo "Greška pri unosu: " . mysqli_error($con);
    }
}

mysqli_close($con);

?>