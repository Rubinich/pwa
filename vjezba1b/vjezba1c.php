<?php
$naslov = "PHP dokument - vježba 1c";
$autor = "Alojz Rubinić";
$opis = "Ova stranica nastavlja vježbu 1b i služi za uvježbavanje varijabli, ispisa i osnovnog CSS-a.";
$linkInfo = "https://www.php.net";
$linkNatrag = "vjezba1b.php";
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba 1c</title>
    <style>
        :root{
            --clr-bg: #0f172a;
            --clr-accent: #5c8aef;
            --clr-card: #fff;
            --clr-muted: #6e7482;
        }

        *, *::after, *::before{ box-sizing: border-box }

        body{
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            font-size: 16px;
            margin: 0;
            background: var(--clr-bg);
        }

        .btn{
            display: inline-block;
            padding: 10px 16px;
            border: 1px solid var(--clr-accent);
            border-radius: 10px;
            text-decoration: none;
            transition: 0.5s all;
        }

        .btn:hover{
            background: var(--clr-accent);
            color: #fff;
        }

        .wrap{
            width: 100%;
            max-width: 720px;
            background: var(--clr-card);
            border-radius: 16px;
            margin: 48px auto;
            padding: 32px;
        }

        .copyright{
            font-size: 0.9rem;
            color: var(--clr-muted);
        }

        p{
            line-height: 1.6;
            margin-bottom: 16px;
        }

        h1{
            font-size: 2rem;
            margin-block: 0 16px; 
        }
        
    </style>
</head>
<body>
    <main class="wrap">
        <h1><?php echo htmlspecialchars($naslov) ?></h1>
        <p>Ovu stranicu izradio je <strong>
            <?php echo htmlspecialchars($autor) ?>
        </strong></p>
        <p><?php echo htmlspecialchars($opis) ?></p>
        <a href="<?php echo htmlspecialchars($linkInfo) ?>" class="btn" target="_blank" rel="noopener">Saznaj više o PHP-u</a>
        <a href="<?php echo htmlspecialchars($linkNatrag) ?>" class="btn">Natrag na vježba 1b</a>
        <p class="copyright">&copy; <?php echo date("Y") ?> - Demo za PHP</p>
    </main>
</body>
</html>