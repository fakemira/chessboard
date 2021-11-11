<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        .black{
            background-color: grey;
        }
        .white{
            background-color: white;
        }
        td{
            width: 50px;
			height: 50px;
            border: 2px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <?php
            $letter = array("","a", "b", "c", "d", "e", "f", "g", "h");
            for($i = 8; $i >= 1; $i--)
            {
                echo "<tr>";
                    echo "<td style = 'border: 0px'>$i</td>";
                    for($j = 1; $j <= 8; $j++)
                    {
                        if (($i + $j) % 2 == 0)
                        {
                            echo "<td class = 'black'>$letter[$j]$i</td>";
                        }
                        else
                        {
                            echo "<td class = 'white'>$letter[$j]$i</td>";
                        }
                    }
                echo "</tr>";
            }
            echo "<tr>";
                for($n = 0; $n <= 8; $n++)
                {
                    echo "<td style = 'border: 0px'>$letter[$n]</td>";
                } 
            echo "</tr>";           
        ?>
    </table>
</body>
</html>