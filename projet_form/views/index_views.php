<!DOCTYPE html>

<?php
include_once "config/headerindex_config.php";
?>
<html>
<body style="background-color: grey;">

<main class="divmain">
    <h2>Identification</h2>
    <div class="divid">


        <section class="sectionform">


            <form  method="POST" action="">
                <div class="divconnexion">
                    <p><input type="text" name="loginconnexion" placeholder="utilisateur"/></p>
                    <p><input type="password" name="passwordconnexion" placeholder="mot de passe" /></p>
                </div>

                <div class="divvalider">
                    <input type="submit" name="connexion" value="Connexion">
                </div>
            </form>

        </section>
    </div>


    <div class="divid2">
        <section class="sectionform2">
            <form action="" method="post">
                <div class="divconnexion">
                    <h1>Formulaire</h1>
                    <p><input type="text" name="login" placeholder="utilisateur" /></p>
                    <p><input type="password" name="password" placeholder="mot de passe"/></p>
                    <p><input type="password" name="repeatpassword" placeholder="repeat mot de passe"/></p>
                    <select name="groupe">
                        <option value="1" selected>groupe 1</option>
                        <option value="2" >groupe 2</option>
                        <option value="3">groupe 3</option>
                    </select>
                </div>
                <div class="divvalider2">
                    <p><input type="submit" name="valider" value="Inscription"></p>
                </div>
            </form>
        </section>
    </div>
</main>
</body>
</html>
