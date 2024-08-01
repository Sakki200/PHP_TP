<main>
    <h1>NOS PROMOTIONS</h1>
    <section>
        <?php
        foreach ($products as $product) :
            if ($product['promotion'] === true) {
        ?><article class="promoArticle">
                    <a href="index.php?pg=product&id=<?php echo $product['id']; ?>">
                        <figure><img src="<?php echo "./img/" . $product["image"] ?>" alt="image du produit <?php $product["modele"] ?>"></figure>
                    </a>
                    <h3><?php echo $product["designation"] ?></h3>
                    <h4><?php echo $product["modele"] ?></h4>
                    <div>
                        <p> <?php echo $product["prixBeforePomo"] . "€" ?></p>
                        <p><?php echo " - " . $product["prix"] ?>€</p>
                    </div>
                </article>
        <?php }
        endforeach ?>


    </section>
</main>