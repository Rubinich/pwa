<?php 
$poruka = "";
$pogoden = false;
$button_class = "";
$zamisljen_broj = "";

if(isset($_POST["input_number"])) {
    $input_number = (int)$_POST["input_number"];
    $random_number = rand(1,9);
    $zamisljen_broj = "Zamisljen broj je " . $random_number;

    if($input_number == $random_number) {
        $poruka = "Pogodak, probaj ponovno!";
        $pogodak = true;
        $button_class = "success";
    } else {
        $poruka = "Krivo, probaj ponovno!";
        $button_class = "error";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba3-1</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
        }
        button{
            width: 100px;
            padding: 1em;
            text-align: center;
        }
        .success {
            background-color: green;
            color: white;
            border-color: transparent;
        }
        .error{
            background-color: red;
            color: white;
            border-color: transparent;
        }
    </style>
</head>
<body>
    <main>
        <form action="" method="post">
            <label for="">Igra (pogodi broj)</label>
            <label>
                <b>Upisi jedan broj od 1 do 9*</b>
                <input type="number" name="input_number" id="input_number" min="1" max="9" required>
            </label>
            <button class="<?php echo $button_class ?>">
                <?php echo $poruka ?>
            </button>
            <p><?php echo $zamisljen_broj ?></p>
        </form>
    </main>
</body>
</html>