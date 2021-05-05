<?php

include_once __DIR__ . "/../database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous"/>
    <!-- Main style -->
    <link rel="stylesheet" href="css/style.css">
    <title>Music Discs</title>
</head>
<body>
    <div id="app" class="wrapper">

        <!-- Header -->
        <header class="flex">

            <!-- Logo (on the left)-->
            <img src="img/logo.png" alt="Logo">
            <h1>The Albums that made Music History</h1>

            <!-- UX features (on the right)-->
            <div class="ux-features flex">

                <!-- Select options -->
                <select id="select">
                    <option disabled value="">Sort by Genre</option>
                    <option value="">All Genres</option>
                    <option value="Rock">Rock</option>
                    <option value="Pop">Pop</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Metal">Metal</option>
                </select>

                <!-- Buttons -->
                <div class="buttons-container flex">
                    <button><span class="year">Year: </span><i class="far fa-hand-point-up"></i></button>
                    <button><span class="year">Year: </span><i class="far fa-hand-point-down"></i></button>
                </div>
            </div>
        </header>

        <!-- Album-cards container -->
        <div class="cards-container">
            <div class="flex container">

                <?php foreach($database as $disc_info) { ?>

                <div class="cd-card flex">
                    <img src="<?php echo $disc_info["poster"]; ?>" alt="Disc Poster">
                    <h3><?= $disc_info["title"]; ?></h3>
                    <p><?= $disc_info["author"]; ?></p>
                    <p><?= $disc_info["year"]; ?></p>
                </div>

                <?php } ?>

            </div>
        </div>
    </div>
</body>
</html>