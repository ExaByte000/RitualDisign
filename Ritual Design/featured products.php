<?php
include ("connect.php");
$result = $mysqli->query("SELECT * FROM Products");
$i =0;
foreach ($result as $row){
    $i++;
    if($i == 5){
        break;
    }
    ?>
    <div class="product">
        <img class="img" src="assets/images/<?= $row["picture"]?>" alt="">
        <h3><?= $row["name"]?></h3>
        <p class="price"><?= round($row["price"])  ?> ₽</p>
        <a class="btn" id="<?= $row['product_id'] ?>" >Подробнее</a>
        <section class="desc" id="<?= $row['product_id'] ?>">
            <p>
                <?=
                $row["description"]
                ?>
            </p>
        </section>
        <a class="btn" id="<?= $row['product_id'] ?>" >Добавить в корзину</a>
    </div>
<?
}
