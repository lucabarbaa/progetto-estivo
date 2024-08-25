<div class="nav">
    <div class="centratonav">
        <ul class="navlinks">
            <?php
                if (basename($_SERVER['PHP_SELF']) == "login.php") {
                    echo "<li><a href='registrazione.php'>Registrati</a></li>";
                } elseif (basename($_SERVER['PHP_SELF']) == "registrazione.php") {
                    echo "<li><a href='login.php'>Login</a></li>";
                } else {
                    if (basename($_SERVER['PHP_SELF']) == "index.php") {
                        echo "<li id='active'>Home</li>";
                    } else {
                        echo "<li><a href='../index.php'>Home</a></li>";
                    }
                    
                    if (basename($_SERVER['PHP_SELF']) == "sneakers.php") {
                        echo "<li id='active'>Sneakers</li>";
                    } else {
                        echo "<li><a href='pagine/sneakers.php'>Sneakers</a></li>";
                    }
                    if (basename($_SERVER['PHP_SELF']) == "vestiti.php") {
                        echo "<li id='active'>Vestiti</li>";
                    } else {
                        echo "<li><a href='pagine/vestiti.php'>Vestiti</a></li>";
                    }
                    if (basename($_SERVER['PHP_SELF']) == "dati_personali.php") {
                        echo "<li id='active'>Dati personali</li>";
                    } else {
                        echo "<li><a href='pagine/dati_personali.php'>Dati personali</a></li>";
                    }
                    if (basename($_SERVER['PHP_SELF']) == "login.php") {
                        echo "<li id='active'>Login</li>";
                    } else {
                        echo "<li><a href='pagine/login.php'>Login</a></li>";
                    }
                }
            ?>
        </ul>
    </div>
</div>