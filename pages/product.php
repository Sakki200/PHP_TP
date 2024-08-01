<main>
    <?php foreach ($products as $product) :
        if ($product['id'] == $_GET['id']) {
    ?> <h1><?php echo strtoupper($product["designation"] . " - " . $product["modele"]) ?></h1>

            <div class="productFlex">
                <figure><img src="<?php echo "./img/" . $product["image"] ?>" alt="image du produit <?php $product["modele"] ?>"></figure>
                <div>
                    <h3>Categorie</h3>
                    <h4><?php echo $product["categorie"] ?></h4>
                    <?php if ($product['promotion'] === true) {
                    ?> <p class="afterPromo"><?php echo $product["prix"] . "€" ?></p>
                        <p class="beforePromo"><?php echo $product["prixBeforePomo"] . "€" ?></p>
                    <?php
                    } else {
                    ?> <p class="afterPromo"><?php echo $product["prix"] . "€" ?></p>
                    <?php } ?>
                    <button class="btnBuy">ACHETER</button>
                </div>
            </div>
    <?php
        }
    endforeach ?>
</main>