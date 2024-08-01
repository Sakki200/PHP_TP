<?php

$number1 = rand(1, 30);
$number2 = rand(1, 30);
$number3 = rand(1, 30);
$number4 = rand(1, 30);
$number5 = rand(1, 30);
$number6 = rand(1, 30);


?>



<main>
    <h1>ACCUEIL</h1>
    <section>
        <?php
        foreach ($products as $product) :
            if ($product['id'] === $number1 | $product['id'] === $number2 | $product['id'] === $number3 | $product['id'] === $number4 | $product['id'] === $number5 | $product['id'] === $number6) {
        ?><article>
                    <?php if ($product['promotion'] === true) { ?>
                        <div class="promoDisplay">promo</div><?php }  ?>
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