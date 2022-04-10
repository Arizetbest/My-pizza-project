<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing</title>
</head>
<?php
// $products =[
//     ['name'=>'food item','price'=> 30],
//     ['name'=>'clothe item','price'=> 40],
// 	['name'=>'bag item','price'=> 50],
// 	['name'=>'schoo item','price'=> 60],
// 	['name'=>'church item','price'=> 70],
// ]; 
// foreach($products as $product){

//     if($product['price'] === '50'){
//         break;
//     }

//     if($product['price'] > 60){
//         continue;
//     }

//     echo $product['name'] .'<p>';

// }

// function sayHello($name){
//     echo "good morning $name";
// }

// sayHello('Onubiyi');

// function schoolName($name){
//     echo "My school name is $name";
// }

// schoolName('Brandon University');
$name = ' My Mummy';

function greetings(){
    global $name;
    echo "good morning".''. $name;
}
greetings();




?>
<!-- <body>
    <div>
        <ul>
            <?php foreach($products as $product){?>
                <?php if($product['price'] > 15){?>
                    <li> <?php echo $product['name']; ?></li>
                    <?php } ?>
                    <?php } ?>
        </ul>
    </div>
</body>
</html> -->