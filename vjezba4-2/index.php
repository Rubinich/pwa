<?php 

function statusDucana ($sat, $dan, $datum){
    $praznici = [
        '1-1','6-1','20-4','21-4',
        '1-5','30-5','19-6','22-6',
        '5-8','15-8','1-11','18-11',
        '25-12','26-12',
    ];

    if(in_array($datum, $praznici))
        return "Ducan je zatvoren zbog drzavnog praznika.";
    switch($dan) {
        case 1: case 2: case 3: case 4: case 5:
            if($sat >= 8 && $sat < 20)
                return "Ducan je otvoren.";
            else 
                return "Ducan je zatvoren.";
        case 6:
            if($sat >= 9 && $sat < 14) 
                return "Ducan je otvoren.";
            else 
                return "Ducan je zatvoren.";
        case 7:
            return "Ducan je zatvoren.";
        default:
            return "Greska.";
    }
}

echo statusDucana(10, 1, '7-5');
echo statusDucana(11, 6, '10-5');
echo statusDucana(12, 7, '11-5');
echo statusDucana(12, 3, '25-12');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba4-2</title>
</head>
<body>
    <main>

    </main>
</body>
</html>