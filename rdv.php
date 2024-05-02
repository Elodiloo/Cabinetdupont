<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>A propos Cabinet dentaire</title>
    <link href="css/indexstyles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Literata:ital,opsz,wght@0,7..72,200..900;1,7..72,200..900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/50a626f102.js" crossorigin="anonymous"></script>
</head>


<body>
<?php require_once (__DIR__ .'/header.php') ;?>


    <main>

        <h1 id="titre" class="text-center">Prendre rendez-vous</h1>

        <h3>1 - Choisissez un motif de consultation :</h3>
        <select id="motif">
            <option value="option1">Examen annuel</option>
            <option value="option2">Urgence dentaire</option>
            <option value="option3">Consultation d'orthodontie</option>
        </select>

        <h3>2 - Choisissez un rendez-vous :</h3>
        <div id="calendar"></div>
        <div id="appointment-form">
            <input type="date" id="datecalendar">
            <div id="available-slots"></div>
        </div>

        <h3>3 - Remplissez vos informations :</h3>

        <div id="forms" class="row">
            <div id="form1" class="col-50 row2">
                <form id="registration-form" class="form-container">
                    <div class="form-group">
                        <label for="first-name">Prénom :</label>
                        <input type="text" id="first-name" name="first-name" required>
                    </div>

                    <div class="form-group">
                        <label for="last-name">Nom :</label>
                        <input type="text" id="last-name" name="last-name" required>
                    </div>

                    <div class="form-group">
                        <label for="birthdate">Date de naissance :</label>
                        <input type="date" id="birthdate" name="birthdate" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <button type="submit" class="submit-btn">Je crée mon compte</button>

                </form>

            </div>
            <div id="form2 row2">
                <form id="registration-form" class="form-container">
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <button type="submit" class="submit-btn">J'ai déjà un compte</button>

                </form>

            </div>
        </div>

        <?php require_once (__DIR__ .'/footer.php') ; ?>

    </main>
    <script src="js/rdv.js"></script>
</body>

</html>