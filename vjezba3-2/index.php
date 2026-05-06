<?php 
$result = "";

if(isset($_POST["first_number"]) && isset($_POST["second_number"]) && isset($_POST["operation"])){
    $first_number = $_POST["first_number"];
    $second_number = $_POST["second_number"];
    $operation = $_POST["operation"];
    
    switch($operation) {
        case "+":
            $result = $first_number + $second_number;
            break;
        case "-":
            $result = $first_number - $second_number;
            break;
        case "*":
            $result = $first_number * $second_number;
            break;
        case "/":
            if($second_number != 0) {
                $result = $first_number / $second_number;
            } else {
                $result = "Dijeljenje s nulom";
            }
            break;
        default:
            $result = "Dogodila se greska.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba3-2</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }
        button{
            border-radius: 25%;
            border-color: transparent;
            width: 3rem;
            height: 3rem;
        }
    </style>
</head>
<body>
    <main>
        <form action="" method="post">
            <p>Kalkulator (Switch naredba)</p>
            <label>
                <b>Upisi prvi broj*</b>
                <input type="number" name="first_number">
            </label>
            <label>
                <b>Upisi drugi broj*</b>
                <input type="number" name="second_number">
            </label>
            <p>Rezultat: <?= $result ?></p>
            <div class="operations">
                <button name="operation" value="+">+</button>
                <button name="operation" value="-">-</button>
                <button name="operation" value="*">*</button>
                <button name="operation" value="/">/</button>
            </div>
        </form>
    </main>
</body>
</html>