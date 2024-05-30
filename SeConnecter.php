<?

?>


<!Doctype html>
<html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="SeConnecter.css">
    </head>

    <body>
        
        <section>
            <div class="form-box">
                <div class="form-value">

                    <h2>Connection</h2>

                    <form action="Client.php" method="POST">

                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="email" id="email" name="email" required><br>
                            <label for="email">Email :</label>
                        </div>    

                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" id="mot_de_passe" name="mot_de_passe" required><br>
                            <label for="mot_de_passe">Mot de passe :</label>
                        </div>


                            <input class="bouton" type="submit" value="Se connecter">

                    </form>

                </div>
            </div>
        </section>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="https://unpkg.com/feather-icons" ></script>
        <script>feather.replace();</script>

    </body>

</html>