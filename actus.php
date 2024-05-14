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


        <h1 id="titre" class="text-center">Santé buccale : les dernières actus !</h1>

        <div id="actu1" class="icon-container border-sh row">
            <div class="col-25">
                <img src="img/bruxisme.png" alt="dupont" class="image-radius border-sh">
            </div>
            <div class="col-75">
                <h2 class="text-center">Bruxisme : tout savoir avant de consulter !</h2>
                <h3 class="txt-j">Le grincement des dents et le serrage de mâchoire sont souvent liés au stress ou à l’anxiété. Cela
                    ne provoque pas toujours de symptômes, mais certaines personnes ressentent des douleurs au visage et
                    des maux de tête.</h3>
            </div>
        </div>

        <div id="actu2" class="icon-container2 border-sh row">
            <div class="col-25">
                <img src="img/mutuelle.png" alt="dupont" class="image-radius border-sh">
            </div>
            <div class="col-75">
                <h2 class="text-center">Évaluation du coût des mutuelles dentaires pour seniors : une analyse financière
                </h2>
                <h3 class="txt-j">Les seniors, constituant la population âgée de 55 ans et plus, rencontrent des défis uniques
                    lorsqu’il s’agit de maintenir leur santé bucco-dentaire. Avec l’augmentation de l’âge, les besoins
                    en soins dentaires se complexifient, soulignant l’importance d’une couverture adéquate. Cet article
                    dévoile le coût des mutuelles dentaires chez les seniors, en le comparant aux autres tranches d’âge,
                    tout en mettant en lumière les raisons des variations de ces coûts.</h3>
            </div>
        </div>

        <div id="actu3" class="icon-container3 border-sh row">
            <div class="col-25">
                <img src="img/ortho.png" alt="dupont" class="image-radius border-sh">
            </div>
            <div class="col-75">
                <h2 class="text-center">Pourquoi consulter un orthodontiste ?</h2>
                <h3 class="txt-j">L’orthodontie est une médecine dentaire visant à corriger les défauts dentaires tels qu’un mauvais
                    alignement des dents ou de la mâchoire à l’aide de traitement correctif.

                    Le rôle de l’orthodontiste est donc de prévenir et de traiter les anomalies de positionnement et
                    tout autres problèmes bucco dentaires à l’aide d’appareillages exerçant une pression au niveau des
                    dents. Mais qu'est-ce qu'un orthodontiste ?</h3>
            </div>
        </div>

        <?php require_once (__DIR__ .'/footer.php') ; ?>

    </main>
    <script src="js/index.js"></script>
</body>

</html>