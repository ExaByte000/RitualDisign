<?php
include ("connect.php");

$name = $_POST['name'];
$result = null;
$html = '';

switch ($name){
    case "Гробы":
        $result = $mysqli -> query("SELECT * FROM Products WHERE category_id = 1");
        break;
    case "Венки":
        $result = $mysqli -> query("SELECT * FROM Products WHERE category_id = 2");
        break;
    case "Кресты":
        $result = $mysqli -> query("SELECT * FROM Products WHERE category_id = 3");
        break;
    case "Ковчеги":
        $result = $mysqli -> query("SELECT * FROM Products WHERE category_id = 4");
        break;
}
if ($result){
    ob_start();

?>
<div class="products">
<?
foreach ($result as $row){
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
?>
</div>
<?
    $html = ob_get_clean(); // Get the buffered output

    $response = array("result" => "success", "html" => $html);
}
else {
    $response = array("result" => "error");
}
header("Content-Type: application/json");
echo json_encode($response);
exit();
    ?>