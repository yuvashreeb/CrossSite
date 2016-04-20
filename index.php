<?php 
session_start();
require_once 'classes/token.php';

if(isset($_POST['quantity'],$_POST['product'],$_POST['token'])){
    $product=$_POST['product'];
    $quantity=$_POST['quantity'];
    if(!empty($product) && !empty($quantity)){
        if(Token::check($_POST['token'])){
           echo 'Process Order'; 
        }
        
    }
}

?>

<html>
    <head>
        <title>CSRF Protection</title>
    </head>
    <body>
        <form action="" method="POST">
            <div class="product">
                <strong>A product</strong>
                <div class="field">
                    Quantity: <input type="text" name="quantity">
                </div>
                <input type="submit" value="Order">
                <input type="hidden" name="product" value="1">
                <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
            </div>
        </div>
    </form>
</body>
</html>
