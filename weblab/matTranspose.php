<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prg 8</title>
    <style>
        body {
            background-color: powderblue;
            color: #806E21;
            margin: 30px;
        }

        .calculator {
            margin: 20px;
            padding: 20px;
            float: center;
            border: thin solid black;
        }
    </style>
</head>
<body>
    <a href="prg8.php">Main Menu</a>
    <h2>Transpose of a matrix</h2>
    <div id="matrix">
        <form action="matTranspose.php">
            <input type="text" name="m" placeholder="m"/>
            <input type="text" name="n" placeholder="n"/>
            <input type="submit" name="genMatrix" value="Enter"/>
        </form>
        <?php
        if(isset($_GET['genMatrix']))
        {
            $m = $_GET['m'];
            $n = $_GET['n'];
            echo "<form action='matTranspose.php'>
                    <table>";
            for($i=0; $i<$m; $i++)
            {
                echo "<tr>";
                for($j=0; $j<$n; $j++)
                {
                    $val = $i.$j;
                    echo "<td><input type='text' size='4' name=$val /></td";
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "<input type='hidden' name='m' value=$m/><input type='hidden' name='n' value=$n/>";
            echo "<input type='submit' name='transpose' value='Find transpose'/>";
            echo "</form>";
        }

        if(isset($_GET['transpose']))
        {
            $m = $_GET['m'];
            $n = $_GET['n'];
            echo "Matrix entered <br/>";
            for($i=0; $i<$m; $i++)
            {
                for($j=0; $j<$n; $j++)
                {
                    $val = $i.$j;
                    $mat[$i][$j] = $_GET["$val"];
                    $transpose[$j][$i] = $mat[$i][$j];
                    echo $mat[$i][$j]." ";
                }
                echo "<br/>";
            }
            echo "<p>Transpose of the matrix: <br/>";
            for($i=0;$i<$n;$i++)
            {
                for($j=0;$j<$m;$j++)
                {
                    echo $transpose[$i][$j]." ";
                }
                echo "<br/>";
            }
            echo "</p>";
        }
        ?>
    </div>
</body>
</html>