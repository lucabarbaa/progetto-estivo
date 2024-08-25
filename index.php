


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
        require("pagine/nav.php");
    ?>
    <div class="contenuto">
		<h1 style="text-align: center">home page</h1>
        <h2>sneakers</h2><a href="pagine/sneakers">vedi altro...</a>
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
        </div>
        <h2>abbigliamento</h2><a href="pagine/vestiti">vedi altro...</a>
        <div class="grid">
            <div class="card" id="">
                <img src="immagini/j1.jpeg" alt="">
                <h3>jordan 1 lost and found</h3>
                <p>Air Jordan 1 2022 Chicago (aka "Lost & Found") dropped on November 19, 2022 · Retail price is $180 for adults</p>
            </div>
            <div class="card" id="sciliar">
                <img src="../immagini/sciliar_da_san_valentino_siusi.jpg" alt="">
                <h3>sciliar</h3>
                <p>Lo Sciliar, parte del gruppo del Catinaccio, visto da Siusi (Calstelrotto), nei pressi della chiesa di San Valentino</p>
            </div>
            <div class="card" id="sassolungo">
                <img src="../immagini/sassolungo.jpg" alt="">
                <h3>sassolungo</h3>
                <p>Il gruppo del Sassolungo con indicazione delle principali vette</p>
            </div>
        </div>
        <h3>chi siamo</h3>
        <p>la piattaforma di riferimento per acquistare e vendere sneakers, abbigliamento streetwear, accessori e oggetti da collezione. Siamo più di un semplice negozio: siamo un marketplace dinamico, dove domanda e offerta si incontrano per stabilire il valore reale dei prodotti più ambiti. La nostra missione è garantire trasparenza, autenticità e accesso globale a modelli esclusivi e rari.</p>
    </div>
    <?php
        require("pagine/footer.php");
    ?>
</body>
</html>
