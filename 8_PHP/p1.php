<?php
    if(isset($_POST['pop'])) {
        echo "<h1>Result is </h1>";
        $num1 = $_POST["first"];
        $num2 = $_POST["second"];
        $op = $_POST["op"];
        $result=0;
        switch($op){
            case '+':$result = $num1 + $num2;
                    echo "<h1>Addition of 2 numbers:".$result."</h1>";
                    break;
            case '-':$result = $num1 - $num2;
                    echo "<h1>Subtraction of 2 numbers:".$result."</h1>";
                    break;
            case '*':$result = $num1 * $num2;
                    echo "<h1>Multiplication of 2 numbers:".$result."</h1>";
                    break;
            case '/':$result = $num1 / $num2;
                    echo "<h1>Division of 2 numbers:".$result."</h1>";
                    break;
            case '%':$result = $num1 % $num2;
                    echo "<h1>Remainder of 2 numbers:".$result."</h1>";
                    break;
            default: echo "<h1 style='color:red;'>Sorry, No Operation Found</h1>";
        }
    }
    ?>