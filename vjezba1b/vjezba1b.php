<?php
$h1 = "PHP dokument";
$author = "Alojz Rubinić";
$btn = "Saznajte više o PHP-u";
$link = "https://mojposao.hr/";
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba1b</title>
    <style>
        :root{
            --clr-bg: #0f172a;
            --clr-card: #fff;
            --clr-text: #000;
            --clr-muted: #6e7482;
            --clr-accent: #5c8aef;
        }

        *, *::after, *::before{ box-sizing: border-box }
        body{ 
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            font-size: 16px;
            margin: 0;
            background: var(--clr-bg); 
            color: var(--clr-text);
        }

        p{
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .copyright{
            font-size: 0.9rem;
            color: var(--clr-muted);
        }

        h1{
            font-size: 2rem;
            margin-block: 0 16px; 
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

        .btn:focus-visible{ outline: 3px solid var(--clr-accent) }
        .btn:active{ opacity: 0.8 }

        .wrap{
            width: 100%;
            max-width: 720px;
            margin: 48px auto;
            background: var(--clr-card);
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,.08);
        }

    </style>
</head>
<body>
    <main class="wrap">
        <h1><?php echo htmlspecialchars($h1) ?></h1>
        <p>Ovu stranicu je izradio <strong><?php echo htmlspecialchars($author) ?></strong>.</p>
        <p>PHP je serverski jezik koji generira HTML ili JSON odgovor prema klijentu.</p>
        <a href="<?php echo htmlspecialchars($link) ?>" class="btn" target="_blank" rel="noopener">
            <?php echo htmlspecialchars($btn) ?>
        </a>
        <p class="copyright">&copy; <?php echo date("Y") ?> - Demo za PHP</p>
    </main>
</body>
</html>