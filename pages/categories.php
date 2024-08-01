<main>
    <h1>TYPE DE PRODUIT</h1>
    <section>
        <h2>TECHNOLOGIE</h2>
        <?php
        foreach ($products as $product) :
            if ($product["categorie"] === "technologie") { ?>
                <article>
                    <?php if ($product['promotion'] === true) { ?>
                        <div class="promoDisplay">promo</div><?php }  ?>
                    <a href="index.php?pg=product&id=<?php echo $product['id']; ?>">
                        <figure><img src="<?php echo "./img/" . $product["image"] ?>" alt="image du produit <?php $product["modele"] ?>"></figure>
                    </a>
                    <h3><?php echo $product["designation"] ?></h3>
                    <h4><?php echo $product["modele"] ?></h4>
                    <p><?php echo $product["prix"] ?>€</p>
                    <article />
    </section><?php }
        endforeach ?>
<section>
    <h2>TECHOLOGIE</h2>
    <?php
    foreach ($products as $product) :

        if ($product["categorie"] === "technologie") { ?>
            <article>
                <?php if ($product['promotion'] === true) { ?>
                    <div class="promoDisplay">promo</div><?php }  ?>
                <a href="index.php?pg=product&id=<?php echo $product['id']; ?>">
                    <figure><img src="<?php echo "./img/" . $product["image"] ?>" alt="image du produit <?php $product["modele"] ?>"></figure>
                </a>
                <h3><?php echo $product["designation"] ?></h3>
                <h4><?php echo $product["modele"] ?></h4>
                <p><?php echo $product["prix"] ?>€</p>
                <article />
</section><?php }
    endforeach ?>
<section>
    <h2>MANETTE</h2>
    <?php
    foreach ($products as $product) :

        if ($product["categorie"] === "manette") { ?>
            <article>
                <?php if ($product['promotion'] === true) { ?>
                    <div class="promoDisplay">promo</div><?php }  ?>
                <a href="index.php?pg=product&id=<?php echo $product['id']; ?>">
                    <figure><img src="<?php echo "./img/" . $product["image"] ?>" alt="image du produit <?php $product["modele"] ?>"></figure>
                </a>
                <h3><?php echo $product["designation"] ?></h3>
                <h4><?php echo $product["modele"] ?></h4>
                <p><?php echo $product["prix"] ?>€</p>
                <article />
</section><?php }
    endforeach ?>
<section>
    <h2>AUTRE</h2>
    <?php
    foreach ($products as $product) :

        if ($product["categorie"] === "autre") { ?>
            <article>
                <?php if ($product['promotion'] === true) { ?>
                    <div class="promoDisplay">promo</div><?php }  ?>
                <a href="index.php?pg=product&id=<?php echo $product['id']; ?>">
                    <figure><img src="<?php echo "./img/" . $product["image"] ?>" alt="image du produit <?php $product["modele"] ?>"></figure>
                </a>
                <h3><?php echo $product["designation"] ?></h3>
                <h4><?php echo $product["modele"] ?></h4>
                <p><?php echo $product["prix"] ?>€</p>
                <article />
</section><?php }
    endforeach ?>


</main>