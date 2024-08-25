<?php
	session_start();
	//echo session_id();
    
	if(!isset($_SESSION['username'])){
		header('location: ../index.php');
	}
	
	$username = $_SESSION["username"];
	//echo $username;

	require('../data/connessione_db.php');

	if(isset($_POST['cod_cose'])){
        foreach($_POST['cod_cose'] as $cod_cose) {
            
            $sql = "UPDATE cose
                    SET username_utente = '$username'
                    WHERE cod_cose = '$cod_cose'";
            $conn->query($sql) or die("<p>Query fallita!</p>");
        }
    }	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Biblioteca - Ritira</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<?php require("nav.php");?>
	<div class="contenuto">
		<h1 style="text-align: center; margin-top: 0px">Ricerca scarpe e abbigliamento</h1>
		<p>Cerca il capo o la scarpa che vuoi acquistare</p>
		<form method="post" action="">
			<table id="tab_dati_personali">
				<tr>
					<td><label for="nome_cosa">nome:</label></td>
                    <td><input class="input_ricerca" type="text" name="nome_cosa" id="nome_cosa" value="<?php echo isset($_POST['nome_cosa']) ? $_POST['nome_cosa'] : ''; ?>"></td>
				</tr>
				<tr>
					<td>Nome marchio:</td> <td><input class="input_ricerca" type="text" name="nomem_marchio" value="<?php echo isset($_POST['nomem_marchio']) ? $_POST['nomem_marchio'] : ''; ?>"></td>
				</tr>
				<tr>
					<td style="text-align: center; padding-top: 10px" colspan="2"><input type="submit" value="Cerca"/></td>
				</tr>
			</table>
		</form>

		<p></p>

		<form method="post" action="">
            <?php
                if (isset($_POST["nome_cosa"]) and isset($_POST["nomem_marchio"]) and isset($_POST["cognome_autore"])) {
                    $capo = $_POST["nome_cosa"];
                    $marchio = $_POST["nomem_marchio"];

                    $sql = "SELECT cose.cod_cose, cose.nome, cose.immagine, marchio.nomem, cose.username_utente 
                            FROM cose JOIN marchio ON cose.cod_cose = marchio.cod_marchio  
                            WHERE nome LIKE '%$nome%'
                                AND nomem LIKE '%$nomem%'";
                    //echo $_POST["titolo_da_cercare"];
                    $ris = $conn->query($sql) or die("<p>Query fallita!</p>");
                    if ($ris->num_rows > 0) {
                        echo "<p>Scegli tra le soluzioni .</p>";
                    
                        foreach($ris as $riga){
                            $cod_cose = $riga["cod_cose"];
                            $nome = $riga["nome"];
                            $immagine = $riga["immagine"];
                            $nomem = $riga["nomem"];

                            echo <<<EOD
                                <div class="elenco_cose">
                                    <div class="card-cosa">
                                        <div class="card-cosa__img">
                                            <img src="../immagini/$immagine" alt="$immagine">
                                        </div>
                                        <div class="card-cosa__testo">
                                            <div class="card-cosa__testo__centrato">
                                                <p>nome: $nome</p>
                                                <p>marchio: $nomem </p>
                                                
                            EOD; 
                            if ($riga["username_utente"]){
                                echo "          <p>Disponibile: No</p>";
                            }
                            else {
                                echo "          <p>Disponibile: Sì</p>";
                                echo "          <p><input type='checkbox' name='cod_libri[]' value='$cod_cose'/> Spunta per comprare</p>";
                            }
                            echo <<<EOD
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            EOD;
                        }
                        echo "<p style='text-align: center; padding-top: 10px'><input type='submit' value='Conferma'/></p>";
                    }
                    else {
                        echo "<p>Non ho trovato nessun capo</p>";
                    }
                    echo "</table>";
                }

            ?>
		</form>	

	</div>	
	<?php 
		include('footer.php')
	?>
</body>
</html>
<?php
	$conn->close();
?>