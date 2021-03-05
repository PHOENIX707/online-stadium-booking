<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prg 8</title>
    <style>
        body {
            background-color: #FFF8DA;
            color: #806E21;
            margin: 30px;
        }

        #calculator {
            margin: 20px;
            padding: 20px;
            float: center;
            border: thin solid black;
        }
    </style>
</head>
<body>
    <h1>PHP calculator</h1>
    <div id="calculator">
        <h3>calculator</h3>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="num1" placeholder="Number 1"/>
            <input type="text" name="num2" placeholder="Number 2"/>
            <select name="operator">
                <option></option>
                <option value="+">Add</option>
                <option value="-">Subtract</option>
                <option value="*">Multiply</option>
                <option value="/">Divide</option>
            </select>
            <input type="submit" name="submit" value="Calculate"/>
        </form>
        <?php
        if(isset($_GET['submit']))
        {
            $n1 = $_GET['num1'];
            $n2 = $_GET['num2'];
            $op = $_GET['operator'];
            if(is_numeric($n1) && is_numeric($n2))
                $result = eval("return $n1 $op $n2;");
            else
                $result = "undefined";
            /*switch($op) {
                case "+": 
                    $result = $n1 + $n2;
                    break;
                case "-":
                    $result = $n1 - $n2;
                    break;
                case "*":
                    $result = $n1 * $n2;
                    break;
                case "/":
                    $result = $n1 / $n2;
                    break;
                }
                */
                echo "<p>Result is: $result</p>";        
        }
        ?>
    </div>
    
</body>
</html>