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
                <img src="immagini/j1.jpeg" alt="">
                <h3>jordan 1 lost and found</h3>
                <p>Air Jordan 1 2022 Chicago (aka "Lost & Found") dropped on November 19, 2022 </p>
            </div>
            <div class="card" id="">
                <img src="immagini/corteiz.jpeg" alt="">
                <h3> Air Max 95 SP Corteiz</h3>
                <p>Nike Air Max 95 SP Corteiz Gutta Green, creata in collaborazione con Corteiz, un marchio streetwear di Londra, sfoggia una tomaia olive con accenti a contrasto gialli, fodera interna mimetica su una suola ammortizzata Black Max Air</p>
            </div>
            <div class="card" id="">
                <img src="immagini/boots.jpeg" alt="">
                <h3>yeezy desert boot</h3>
                <p>Le adidas Yeezy Desert Boot Rock presentano una tomaia beige in mesh con inserti in nubuck e suede tono su tono. La suola scanalata abbinata garantisce trazione e stabilità.</p>
            </div>
            <div class="card" id="">
                <img src="immagini/wet.jpeg" alt="">
                <h3>Jordan 4 Retro SE Paris Olympics Wet Cement</h3>
                <p>rilasciate il 27 luglio 2024, per un prezzo al dettaglio di $ 225</p>
            </div>
            <div class="card" id="">
                <img src="immagini/giallo.jpeg" alt="">
                <h3>Air Jordan 1 Low OG x Travis Scott canary</h3>
                <p>Ti presentiamo l'ultima collab tra il brand Jordan e Travis Scott. Questa AJ1 in edizione speciale rende omaggio ai colori del liceo frequentato dall'icona dell'hip-hop a Missouri City, in Texas.</p>
            </div>
            <div class="card" id="">
                <img src="immagini/new.jpeg" alt="">
                <h3>New Balance 1906D Protection Pack white</h3>
                <p> ​Le sneakers 1906D Protection Pack bianco presentano un'intersuola reattiva ABZORB e una suola N-ERGY che offre assorbimento degli urti</p>
            </div>
        </div>
    </div>
    <?php
        require("footer.php");
    ?>
</body>
</html>