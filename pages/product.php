<main>
    <?php foreach ($products as $product) :
        if ($product['id'] == $_GET['id']) {
    ?> <h1><?php echo strtoupper($product["designation"] . " - " . $product["modele"]) ?></h1>

            <div class="productFlex">
                <figure><img src="<?php echo "./img/" . $product["image"] ?>" alt="image du produit <?php $product["modele"] ?>"></figure>
                <div class="detailsProduct">
                    <h3><?php echo strtoupper($product["modele"]) ?></h3>
                    <h4>Categorie</h4>
                    <h3><?php echo ucfirst($product["categorie"]) ?></h3>
                    <?php if ($product['promotion'] === true) {
                    ?> <div>
                            <p class="beforePromo"><?php echo $product["prixBeforePomo"] . "€" ?></p>
                            <p class="afterPromo">/<?php echo $product["prix"] . "€" ?></p>
                        </div>
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