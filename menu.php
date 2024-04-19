<?php
include ('connections.php');
$sql = "SELECT * FROM pizza ";
$pizza = $connect->prepare($sql);
$pizza->execute();
$producten = $pizza->fetchAll();
?>
<section class="bestel">
    <?php
foreach ($producten as $product )
{
    ?>
    
    <section class="bestel">
        <div class="block_bestel">
        <div><img class="foto_pizza" src="<?php echo $product['img']; ?>" alt="test"></div>
        <div class="naam"><?php echo $product['naam'];?></div>
        <div class="beschrijving"><?php echo $product['omschrijving'] ?></div>
        <div class="prijs"><?php echo $product['prijs'] ?></div>
        <button class="bestellen"> bestel </button>
        </div>
        <div class="blank_div"></div>

    </section>
<?php

}
?>
</section>
