<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>online store</title>
</head>
<body>
    <?php
        require("nav.php");
    ?>
    <div class="contenuto">
        <h1 style="text-align: center">Sneakers</h1>
        <a href="carrello.php">Clicca qui per acquistare</a>
        <div class="grid">
        <div class="card" id="">
                <img src="immagini/fear.jpeg" alt="">
                <h3>Fear of God Essential hoddie</h3>
                <p>una gamma meticolosamente curata di capi dai toni neutri e pezzi fondamentali progettati per migliorare e completare la collezione primaria dell'iconico marchio streetwear.</p>
            </div>
            <div class="card" id="sciliar">
                <img src="../immagini/travis.jpeg" alt="">
                <h3>jordan hoodie</h3>
                <p>l brand Jordan ti invita a rappresentare una leggenda artistica in divenire insieme al giocatore di basket più leggendario della storia. Decenni dopo che il talento e lo stile di gioco impetuoso di MJ hanno portato il basket verso vette mai viste prima, la creatività di Scott ha influenzato la cultura musicale e lo streetwear con innovazione e passione.</p>
            </div>
            <div class="card" id="">
                <img src="../immagini/tyler.jpeg" alt="">
                <h3>supreme x tyler the creator</h3>
                <p>Photo Tee è una t-shirt esclusiva con la foto iconica del rapper Tyler, the Creator stampata sul petto.</p>
            </div>
            <div class="card" id="">
                <img src="immagini/denim.jpeg" alt="">
                <h3>hoodie Denim Tears Cotton Wreath </h3>
                <p>Il tessuto della felpa presenta una stampa di ghirlande floreali, resa in serigrafia con inchiostro a sbuffo nero.</p>
            </div>
            <div class="card" id="">
                <img src="immagini/gap.jpeg" alt="">
                <h3>Felpa Yeezy Gap</h3>
                <p> La hoodie Yeezy x GAP Hoodie è uscita il 29 ettembre 2021, con un prezzo retail di 90 $.</p>
            </div>
            <div class="card" id="">
                <img src="immagini/uniqlo.jpeg" alt="">
                <h3>KAWS x Uniqlo Warhol</h3>
                <p>t shirt nata da una collaborazione tra KAWS e uniqlo warhol.</p>
            </div>
        </div>
    </div>
    <?php
        require("footer.php");
    ?>
</body>
</html>