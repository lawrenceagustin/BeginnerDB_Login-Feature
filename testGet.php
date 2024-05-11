<?php
session_start();
if(!isset($_SESSION['username'])) {
	header('Location: login.php');
} 
?>

<?php
if(isset($_GET['getFinal'])){
    $foods = [
        'sisig' => 80,
        'siomai' => 25,
        'kare_kare' => 150,
        'pesto_pasta' => 120,
    ];

    $foodname = $_GET['foods'];

    $quantity = $_GET['quantity'];

    $cash = $_GET['cash'];

    $total = 0;
    $change = 0;

    if($foodname == 'sisig'){
        $total = $quantity * 80; 
    }elseif($foodname == 'siomai'){
        $total = $quantity * 25;
    }elseif($foodname == 'kare_kare'){
        $total = $quantity * 150;
    }elseif($foodname == 'pesto_pasta'){
        $total = $quantity * 120;     
    }

    echo "<h2> Thank you for your patronage <span style='color:red;'>" .$_SESSION['username']. "</span>" . "</h2>";
    echo "<h2> The total cost is " .$total . "</h2>";

    $change = $cash - $total;

    if($change <0){
        echo "<h1>Please provide more cash!</h1>";
    }else{
        echo "<h2> Your change is " .$change. "</h2>";
    }
    
    echo "<a href='index.php'> <input type='submit' value='Back'>";
}
?>
