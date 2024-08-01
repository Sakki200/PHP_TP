<?php
//Tableau de nombres aléatoires de 1 => 30 et mélanger
$numbers = range(1, 30);
shuffle($numbers);

$number1 = $numbers[0];
$number2 = $numbers[1];
$number3 = $numbers[2];
$number4 = $numbers[3];
$number5 = $numbers[4];
$number6 = $numbers[5];
?>
<main>
    <h1>ACCUEIL</h1>
    <section class="gridArticles">
        <?php
        foreach ($products as $product) :
            if ($product['id'] === $number1 | $product['id'] === $number2 | $product['id'] === $number3 | $product['id'] === $number4 | $product['id'] === $number5 | $product['id'] === $number6) {
        ?><article>
                    <?php if ($product['promotion'] === true) { ?>
                        <div class="promoDisplay">PROMO</div><?php }  ?>
                    <a href="index.php?pg=product&id=<?php echo $product['id']; ?>">
                        <figure><img src="<?php echo "./img/" . $product["image"] ?>" alt="image du produit <?php $product["modele"] ?>"> </figure>
                    </a>
                    <h3><?php echo $product["designation"] ?></h3>
                    <h4><?php echo $product["modele"] ?></h4>
                    <p><?php echo $product["prix"] ?>€</p>
                </article>
        <?php }
        endforeach ?>


    </section>
</main>