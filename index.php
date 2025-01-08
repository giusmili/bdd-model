<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data Base</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
    <header>
        <h1>
            Créate Data base with model
        </h1>
    </header>
    <main>
        <figure>
            <figcaption>
                Éternara's <a href="https://www.pokepedia.fr/Conseil_4#Conseil_4_d'%C3%89ternara" target="_blank">Elite Four</a>
            </figcaption>
                <img loading="lazy" src="https://www.pokepedia.fr/images/2/2c/Damien-ROSA.png"  alt="Damien">
                <img loading="lazy" src="https://www.pokepedia.fr/images/f/fc/Spectra-ROSA.png"  alt="Spectra">
                <img loading="lazy" src="https://www.pokepedia.fr/images/7/75/Glacia-ROSA.png"  alt="Glacia">
                <img loading="lazy" src="https://www.pokepedia.fr/images/f/f9/Aragon-ROSA.png"  alt="Aragon">
            </figure>
            <section>
                <h2>
                <?php

                    include_once __DIR__ .'/model/modelBdd.php';


                ?>
                </h2>
            </section>
        </main>
</body>
</html>