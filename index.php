<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div align="center" id="form">
    <h1>Electricity bill</h1>
    <div class="form">
<!-- <h1>Post Form</h1> -->
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Bill Unit: <input type="number" name="bill">
        <button type='submit'>Get Reciept</button>
    </form>

<h2>Get Bill Details : </h2>
</div>
<?php
    $bill = 0;


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $bill = $_POST['bill'];
}else{
    
    $bill = 0;
    }
    $ans = 0;

    if(  $bill<=50){
        $ans = $bill*3.50;
        echo "Your bill Units are : $bill";
        echo "<br>";
        echo "Your bill Amount is : $ans";
    }
    elseif(  $bill<=150){
        $ans = $bill*4.00;
        echo "Your bill Units are : $bill\n";
        echo "<br>";
        echo "Your bill Amount is : $ans";
    }
    elseif(  $bill<=250){
        $ans = $bill*5.2;
        echo "Your bill Units are : $bill\n";
        echo "<br>";
        echo "Your bill Amount is : $ans";
    }
   else{
        $ans = $bill*6.5;
        echo "Your bill Units are : $bill\n";
        echo "<br>";
        echo "Your bill Amount is : $ans";
    }
    

?>

</div>
    
</body>
</html>
