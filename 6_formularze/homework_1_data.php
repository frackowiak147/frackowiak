<!-- 
Użytkownik podaje z klawiatury dwie długości do wyboru w polu radio ma pole i obwód domyślnie zaznaczone ma być 'pole'
Zabezpiecz formularz przed podaniem pustych danych

Wynik wyświetl w formacie:
Pole wynosi: 20cm2 (2 ma byc w indeksie górnym)
Obwód wynosi: 20cm
Dane wyślij z formularza bezpiecznie (POST)
Obliczenia mają być wyidoczne w innym pliku
 -->

<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik</title>
        <style>
            body {
                padding: 90px; line-height: 35px; border: groove 4px black; width: 30%; font: 200% Segoe UI; margin-left: auto; margin-right: auto; transform: translateY(79%); box-shadow: inset 0 0 0 15px lightblue;
            }
            input[type=submit] {
                width: 220px; height: 25px;
            }
        </style>
</head>
<body>
<center>
    <?php

            if($_POST['bok_A'] <= 0 || $_POST['bok_b'] <=0){
                echo 'Liczby musza byc dodatnie!';
    ?>
            <script>
                history.back()
            </script>
    <?php
            }else{
        $bokA = $_POST['bok_A'];
        $bokB = $_POST['bok_B'];
        $guzik = $_POST['typ'];

        $_SESSION['bokA'] = "$bokA";
        $_SESSION['bokB'] = "$bokB";
        $_SESSION['guzik'] = "$guzik";

        $pole = $bokA * $bokB;
        $obwod = 2 * $bokA + 2 * $bokB;

        if($POST['bok_A'] <= 0 || $_POST['bok_b'] <= 0 ){
            ?>
            <script>
              history.back();
            </script>
        <?php
        }else{
            $bokA = $_POST['bok_A'];
            $bokB = $_POST['bok_B'];
            $guzik = $_POST['typ'];

            $_SESSION['bokA'] = "$bokA";
            $_SESSION['bokB'] = "$bokB";
            $_SESSION['guzik'] = "$guzik";

            $pole = $bokA * $bokB;
            $obwod = 2 * $bokA + 2 * $bokB;
        }
        if(!empty($_POST['bok_A'])&& !empty($_POST['bok_B'])) {
            switch ($variable) {
                case 'value':
                    # code...
                    break;
                
                default:
                ?>
                    <script>
                    history.back();
                    </script>
                 <?php
                    break;
        }else {
                ?>
                <script>
                history.back();
                </script>
        }
    <form name="form1" action="./homework_1_calc.php" method="post">
        <input type="submit" value="Pokaż obliczenia">
    </form>
            
            <script>
              history.back();
            </script>

    <form name="form1" action="./homework_1_calc.php" method="post">
        <input type="submit" value="Pokaż obliczenia">
    </form>
    <a href=""./homework_1.php">Powrót do obliczeń</a>
</center>
</body>
</html>