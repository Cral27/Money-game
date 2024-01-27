<?php

session_start();

var_dump($_SESSION['counter']);
$coutner = 0;
if(isset($_POST['low']) && $_POST['low'] == 'bet'){
    echo 'chummed';
    $_SESSION['counter'] = $_SESSION['counter'] + 1;
    echo $_SESSION['counter'];
}else if(isset($_POST['button']) && $_POST['button'] == 'moderate'){
    echo 'chummed twice';
    $_SESSION['counter'] = $_SESSION['counter'] + 1;
    echo $_SESSION['counter'];
}else if(isset($_POST['button']) && $_POST['button'] == 'high'){
    echo 'chummed thrice';
    $_SESSION['counter'] = $_SESSION['counter'] + 1;
    echo $_SESSION['counter'];
}else if(isset($_POST['button']) && $_POST['button'] == 'severe'){
    echo 'chummed fourth time';
    $_SESSION['counter'] = $_SESSION['counter'] + 1;
    echo $_SESSION['counter'];
}else if(isset($_POST['button']) && $_POST['button'] == 'reset'){
    echo 'chummed all over me';
}


?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Money Button Game</title>
        <style>
            main{
                outline: 1px solid black;
                width: 80%;
                margin: 0 auto;
                padding: 2%;
                text-align: center;
            }
            header h2, #reset-container{
                display: inline-block;
            }
            header h2{
                margin-right: 64%;
            }
            #reset{
                background-color: red;
                color: white;
            }
            .form-bet{
                outline: 3px solid black;
                display: inline-block;
                margin: 2%;
                width: 20%;
                min-height: 10%;
            }
            .form-bet input{
                background-color: green;
                color: white;
                padding: 1% 4%;
            }
            h3{
                text-align: left;
                margin-bottom: 1%;
            }
            #gamehost-container{
                width: 93%;
                margin: 0 auto;
            }
            #gamehost-container div{
                outline: 1px solid black;
                height: 200px;
                max-height: 200px; 
                overflow: scroll;
                overflow-x: hidden;
            }
        </style>
    </head>
    <body>
        <main>
            <header>
                <h2>Your Money: 'Value'</h2>
                <form action="" id='reset-container'>
                    <input type="hidden" name='button' value='reset'>
                    <input type="submit" value='Reset Game' id='reset'>
                </form>
            </header>
            <div>
                <form action="" method='post' class='form-bet'>
                    <input type="hidden" name='button' value='low'>
                    <h2>Low Risk</h2>
                    <input type="submit" value='bet' name='low'>
                    <p>by -25 up to 100</p>
                </form>
                <form action="" method='post' class='form-bet'>
                    <input type="hidden" name='button' value='moderate'>
                    <h2>Moderate Risk</h2>
                    <input type="submit" value='bet' name='moderate'>
                    <p>by -100 up to 1000</p>
                </form>
                <form action="" method='post' class='form-bet'>
                    <input type="hidden" name='button' value='high'>
                    <h2>High Risk</h2>
                    <input type="submit" value='bet' name='high'>
                    <p>by -500 up to 2500</p>
                </form>
                <form action="" method='post' class='form-bet'>
                    <input type="hidden" name='button' value='severe'>
                    <h2>Severe Risk</h2>
                    <input type="submit" value='bet' name='severe'>
                    <p>by -3000 up to 5000</p>
                </form>
            </div>
            <div id='gamehost-container'>
                <h3>Game Host:</h3>
                <div>
                    it's a box
                    <?php echo "nothing yet to see" ?>
                </div>
            </div>
        </main>
    </body>
</html>