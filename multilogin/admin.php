<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="component.js" rel="stylesheet" type="text/js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav-wrapper green darken-2">
        <a href="#!" class="brand-logo" id="title">Inventory</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="home.html">Dashboard</a></li>
            <li><a href="transactions.html">Transactions</a></li>
            <li><a href="stocks.html">Stocks</a></li>
            <li><a href="supplier.html">Supplier</a></li>
            <li><a href="login.php">Login/Register</a></li>
            <li><a href="mobile.html"><i class="material-icons">search</i></a></li>
        </ul>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="home.html">Dashboard</a></li>
            <li><a href="transactions.html">Transactions</a></li>
            <li><a href="stocks.html">Stocks</a></li>
            <li><a href="supplier.html">Supplier</a></li>
            <li><a href="login.php">Login/Register</a></li>
            <li><a href="mobile.html"><i class="material-icons">search</i></a></li>
        </ul>

        </div>
    </nav>
        
  
        <div class="row center-align" id="timestamp">
        <?php
                date_default_timezone_set("Asia/Taipei");
                echo  date("Y/m/d") . "<br>";
                echo  date("h:i:sa");
                ?>
        </div>
    
   


    <script>$("button-collapse").sideNav();  </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>