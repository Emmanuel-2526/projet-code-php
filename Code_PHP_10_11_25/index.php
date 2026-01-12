<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<br>

<h2>Company name</h2>

    <?php
        $companyName = "LSC 360";
    ?>

<h2>The name of the company is <?php echo htmlspecialchars($companyName); ?></h2>

<br>

<h2>Echo Print test</h2>

    <?php
        echo "Ceci est mon premier PHP<br><br>";
        print "Ceci est pour savoir comment utiliser print<br>";
    ?>

<br>

<h2>Explore variables</h2>

    <pre>
        <?php
            // 1. Affichage d'une variable simple
            echo "Affichage direct de \$companyName : ";
            echo $companyName . "\n\n";

            echo "var_dump de \$companyName :\n";
            var_dump($companyName);

            echo "\n\n print_r de \$companyName :\n";
            print_r($companyName);

            echo "\n\n Type de \$companyName : ";
            echo gettype($companyName);

            echo "\n\n-----------------------------\n\n";

            // 2. Affichage d'un tableau
            echo "var_dump de \$services :\n";
            var_dump($services);

            echo "\n\n print_r de \$services :\n";
            print_r($services);
        ?>
    </pre>

    <br>

<h2>Changer le nom de l'entreprise</h2>

    <form id="companyForm">
        <input type="text" id="newCompanyName" placeholder="Nouveau nom" required>
        <button type="submit">Changer</button>
    </form>

    <h2>Nom actuel : <span id="companyDisplay"><?php echo htmlspecialchars($companyName); ?></span></h2>

    <br>

<h2>Our services</h2>

    <?php
        $services = ["design", "shape", "inspire"];
    ?>

    <ul>
        <?php
            foreach ($services as $service) {
                echo "<li>" . htmlentities($service) . "</li>";
            }
        ?>
    </ul>
    
<h2>Add a service</h2>

    <form id="serviceForm">
        <input type="text" id="newService" placeholder="Nouveau service" required>
        <button type="submit">Ajouter</button>
    </form>

    <ul id="serviceList">
        <?php
            foreach ($services as $service) {
                echo "<li>" . htmlentities($service) . "</li>";
            }
        ?>
    </ul>

    <br>

<h2>Our achievemens</h2>

    <?php
        $achievements = ["Site vitrine", "Application mobile", "Identité visuelle"];
    ?>

    <ul>
        <?php
            foreach ($achievements as $achievement) {
                echo "<li>" . htmlentities($achievement) . "</li>";
            }
        ?>
    </ul>

<h2>Add an achivement</h2>

    <form id="achievementForm">
        <input type="text" id="newAchievement" placeholder="Nouvelle réalisation LCS" required>
        <button type="submit">Ajouter</button>
    </form>

    <ul id="achievementList">
        <?php
            foreach ($achievements as $achievement) {
                echo "<li>" . htmlentities($achievement) . "</li>";
            }
        ?>
    </ul>

    <br>

<script src="changeName.js"></script>
<script src="changeService.js"></script>
<script src="achievement.js"></script>

</body>
</html>