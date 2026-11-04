
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Days of the Week</title>
</head>
<body>

    <h1>Days of the Week</h1>

    <?php
    $days = array(
        "Dimanche",
        "Lundi",
        "Mardi",
        "Mercredi",
        "Jeudi",
        "Vendredi",
        "Samedi"
    );

    foreach ($days as $day) {
        echo "<p>$day</p>";
    }
    ?>

</body>
</html>
