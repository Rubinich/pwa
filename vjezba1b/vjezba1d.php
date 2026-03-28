<?php
$naslov = "PHP dokument - vježba 1d";
$autor = "Alojz Rubinić";
$opis = "Ova stranica nadograđuje vježbu 1c: biramo temu (dark/light), odabiremo sliku i po želji prikazujemo opis.";

$odabirTema = array("dark", "light");
$odabirSlika = array(
    "php" => "img/php.jpg",
    "code" => "img/code.jpg",
    "server" => "img/server.jpg"
);

$prikaziOpis = isset($_GET["opis"]);
$slikaId = isset($_GET["slika"]) && isset($odabirSlika[$_GET["slika"]]) ? $_GET["slika"] : "php";
$temaId = isset($_GET["tema"]) && in_array($_GET["tema"], $odabirTema) ? $_GET["tema"] : "dark";
$slikaPath = $odabirSlika[$slikaId];

if ($temaId === "light") {
  $bg = "#f1f5f9";
  $card = "#ffffff";
  $text = "#0f172a";
  $muted = "#64748b";
  $accent = "#1d4ed8";
} else {
  $bg = "#0f172a"; 
  $card = "#ffffff";
  $text = "#111827";
  $muted = "#6b7280";
  $accent = "#2563eb";
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 1d</title>
    <style>
        :root{
            --clr-bg: <?php echo $bg; ?>;
            --clr-card: <?php echo $card; ?>;
            --clr-text: <?php echo $text; ?>;
            --clr-muted: <?php echo $muted; ?>;
            --clr-accent: <?php echo $accent; ?>;
        }

        *, *::after, *::before{ box-sizing: border-box }

        body{
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            font-size: 16px;
            margin: 0;
            background: var(--clr-bg);
            color: var(--clr-text);
        }

        .wrap{
            width: 100%;
            max-width: 720px;
            background: var(--clr-card);
            border-radius: 16px;
            margin: 48px auto;
            padding: 32px;
        }

        .btn{
            font-family: inherit;
            font-size: inherit;
            display: inline-block;
            padding: 10px 16px;
            border: 1px solid var(--clr-accent);
            color: var(--clr-accent);
            background: #fff;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.5s all;
            cursor: pointer;
        }

        .btn:hover{
            background: var(--clr-accent);
            color: #fff;
        }

        .copyright{
            color: var(--clr-muted);
        }

        fieldset{
            color: var(--clr-muted);
        }

        img{
            border-radius: 16px;
        }
        
    </style>
</head>
<body>
    <main class="wrap">
        <h1><?php echo htmlspecialchars($naslov) ?></h1>
        <p>Ovu stranicu izradio je <strong>
            <?php echo htmlspecialchars($autor) ?>
            </strong>.</p>

        <div class="figure">
            <img src="<?php echo htmlspecialchars($slikaPath); ?>">
        </div>

        <?php if($prikaziOpis) {
            echo "<p>" . htmlspecialchars($opis) . "</p>";
        } ?>

        <form method="get">
            <fieldset>
                <legend>Odaberi temu</legend>
                <label><input type="radio" name="tema" value="dark" <?php echo $temaId === "dark" ? "checked" : ""; ?>>Dark</label>
                <label><input type="radio" name="tema" value="light" <?php echo $temaId === "light" ? "checked" : ""; ?>>Light</label>
            </fieldset>

            <fieldset>
                <legend>Odaberi sliku</legend>
                <label>Slika:</label>
                <select name="slika">
                    <option value="php" <?php if($slikaId === "php") echo "selected" ?>>PHP</option>
                    <option value="code" <?php if($slikaId === "code") echo "selected" ?>>Code</option>
                    <option value="server" <?php if($slikaId === "server") echo "selected" ?>>Server</option>
                </select>
            </fieldset>

            <label>
                <input type="checkbox" name="opis" <?php if ($prikaziOpis) echo "checked" ?>>
                Prikaži opis
            </label>

            <div class="btns">
                <button class="btn" type="submit">Primijeni odabir</button>
                <a href="vjezba1c.php" class="btn">Natrag na vježbu 1d</a>
            </div>
        </form>

        <p class="copyright">&copy; <?php echo date("Y") ?> - Demo za PHP</p>
    </main>
</body>
</html>
<!--vjezba1d.php--->