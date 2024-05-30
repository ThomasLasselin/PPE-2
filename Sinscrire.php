<!Doctype html>
<html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="S'inscrire.css">
    </head>

    <body>
        
        <section>
            <div class="form-box">
                <div class="form-value">

                    <h2>Inscription</h2>

                        <form action="Accueil.php" method="POST">

                            <div class="inputbox">
                                <ion-icon name="pricetag-outline"></ion-icon>
                                <input type="text" id="nom" name="nom" required><br>
                                <label for="">Nom :</label>
                            </div>

                            <div class="inputbox">
                                <ion-icon name="pricetags-outline"></ion-icon>
                                <input type="text" id="prenom" name="prenom" required><br>
                                <label for="">Prénom :</label>
                            </div>

                            <div class="inputbox">
                                <ion-icon name="calendar-outline"></ion-icon>
                                <input type="date" id="date_naissance" name="date_naissance" required><br>
                                <label for="">Date de naissance :</label>
                            </div>

                            <div class="inputbox">
                                <ion-icon name="mail-outline"></ion-icon>
                                <input type="email" id="email" name="email" required><br>
                                <label for="">Email :</label>
                            </div>

                            <div class="inputbox">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                                <input type="password" id="mot_de_passe" name="mot_de_passe" required><br>
                                <label for="">Mot de passe :</label>
                            </div>

                                <input class="bouton" type="submit" value="S'inscrire">
                                
                        </form>



                </div>
            </div>
        </section>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        

    </body>

</html>
