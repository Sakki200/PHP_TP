<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Sen:wght@400..800&display=swap" rel="stylesheet">
    <title><?php echo isset($_GET["pg"]) ? ucfirst($_GET["pg"]) : "Home" ?></title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php?pg=products">Produits</a></li>
                <li><a href="index.php?pg=promos">Promo</a></li>
                <li><a href="index.php?pg=categories">Catégories</a></li>
                <li><a href="index.php?pg=contact">Contact</a></li>
                <li><a href="index.php?pg=login">Login</a></li>
            </ul>
        </nav>
    </header>