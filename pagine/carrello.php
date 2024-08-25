<?php
session_start();

// Aggiungi una scarpa al carrello tramite GET
if (isset($_GET['add'])) {
    $shoe_id = $_GET['add'];
    $shoe_name = "Sneaker Example"; // In un'app reale, recupereresti il nome dal database
    $shoe_price = 100; // Prezzo fisso per esempio

    // Memorizza le informazioni del prodotto direttamente nella sessione
    $_SESSION['shoe_id'] = $shoe_id;
    $_SESSION['shoe_name'] = $shoe_name;
    $_SESSION['shoe_price'] = $shoe_price;

    // Aumenta la quantità se il prodotto è già nel carrello
    if (isset($_SESSION['shoe_quantity'])) {
        $_SESSION['shoe_quantity'] += 1;
    } else {
        $_SESSION['shoe_quantity'] = 1; // Imposta la quantità a 1 se è un nuovo prodotto
    }
}

// Rimuovi la scarpa dal carrello
if (isset($_GET['remove'])) {
    // Rimuovi solo se l'articolo è presente nel carrello
    unset($_SESSION['shoe_id']);
    unset($_SESSION['shoe_name']);
    unset($_SESSION['shoe_price']);
    unset($_SESSION['shoe_quantity']);
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrello</title>
</head>
<body>
    <h1>Il tuo carrello</h1>
    
    <?php if (isset($_SESSION['shoe_id'])): ?>
        <table>
            <thead>
                <tr>
                    <th>Prodotto</th>
                    <th>Quantità</th>
                    <th>Prezzo</th>
                    <th>Totale</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $_SESSION['shoe_name']; ?></td>
                    <td><?php echo $_SESSION['shoe_quantity']; ?></td>
                    <td><?php echo $_SESSION['shoe_price']; ?> €</td>
                    <td><?php echo $_SESSION['shoe_quantity'] * $_SESSION['shoe_price']; ?> €</td>
                    <td>
                        <a href="?remove=1">Rimuovi</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <h2>Totale: <?php echo $_SESSION['shoe_quantity'] * $_SESSION['shoe_price']; ?> €</h2>
    <?php else: ?>
        <p>Il tuo carrello è vuoto.</p>
    <?php endif; ?>

    <a href="shop.php">Continua lo shopping</a>
</body>
</html>