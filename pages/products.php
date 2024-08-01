<main>
    <h1>TOUS NOS PRODUIT</h1>
    <section class="gridArticles">
        <?php
        foreach ($products as $product) :
        ?><article >
                <?php if ($product['promotion'] === true) { ?>
                    <div class="promoDisplay">PROMO</div><?php }  ?>
                <a href="index.php?pg=product&id=<?php echo $product['id']; ?>">
                    <figure><img src="<?php echo "./img/" . $product["image"] ?>" alt="image du produit <?php $product["modele"] ?>"></figure>
                </a>
                <h3><?php echo strtoupper($product["designation"]) ?></h3>
                <h4><?php echo $product["modele"] ?></h4>
                <p><?php echo $product["prix"] ?>€</p>
            </article>
        <?php endforeach ?>


    </section>
</main>