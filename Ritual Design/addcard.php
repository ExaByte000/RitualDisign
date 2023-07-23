<?php
session_start();
include ("connect.php");
$type = $_POST["type"];
if($type == "add"){
    $id = $_POST['id'];
    if(!empty($id)){
        if($_SESSION['card']==""){
            $_SESSION['card']=$_POST['id'];
            $item_card =$_SESSION['card'];
            $array_item =explode(";", $item_card);
        }
        else{
            $_SESSION['card'].=";".$id;
            $item_card =$_SESSION['card'];
            $array_item =explode(";", $item_card);
        }
    }

    $html = "";
    $item_card =$_SESSION['card'];
    $array_item =explode(";", $item_card);
    foreach ($array_item as $value){

        $result = $mysqli -> query("SELECT `name`, `price`, `picture` FROM Products WHERE product_id =".$value);
        foreach ($result as $row){
            $html.="
        <section class='item'>
            <img src='assets/images/".$row['picture']."' alt=''>
            <p class='name'>".$row['name']."</p>
                <p class='price'>".$row['price']." ₽</p>
                <a class='btn' id='".$value."'>Удалить</a>
        </section>
    ";
        }
    }
    echo json_encode(array('result'=>'success','item'=>$html, 'card'=>count($array_item)));
}
elseif ($type == "del"){
    $id = $_POST['id'];
    $html = "";
    $item_card = $_SESSION['card'];
    $array_item =explode(";", $item_card);
    $item = array_search($id, $array_item);
    if ($item !== false) {
        unset($array_item[$item]);
        $array_items = implode(';', $array_item);
        $_SESSION['card'] = $array_items;
    }
    foreach ($array_item as $value){

        $result = $mysqli -> query("SELECT `name`, `price`, `picture` FROM Products WHERE product_id =".$value);
        foreach ($result as $row){
            $html.="
        <section class='item'>
            <img src='assets/images/".$row['picture']."' alt=''>
            <p class='name'>".$row['name']."</p>
                <p class='price'>".$row['price']." ₽</p>
                <a class='btn' id='".$value."'>Удалить</a>
        </section>
    ";
        }
    }
    echo json_encode(array('result'=>'success','item'=>$html, 'card'=>count($array_item)));
}
elseif ($type == "order"){
    $item_card =$_SESSION['card'];
    $array_item =explode(";", $item_card);
    foreach ($array_item as $item){
        $add = $mysqli->query("INSERT INTO `Orders`(`phone`, `product_id`) VALUES ('".$_POST['phone']."',".intval($item).")");
    }
    echo json_encode(array('result'=>'success'));
    $_SESSION['card'] = '';
}
