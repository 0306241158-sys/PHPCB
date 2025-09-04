<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bàn cờ PHP</title>
    <style>
        .board {
            display: grid;
            grid-template-columns: repeat(8, 50px);
            grid-template-rows: repeat(8, 50px);
            border: 2px solid black;
            width: 400px;
            height: 400px;
        }

        .square {
            width: 50px;
            height: 50px;
        }

        .black {
            background-color: black;
        }

        .white {
            background-color: white;
        }
    </style>
</head>
<body>

<div class="board">
    <?php
    for ($row = 0; $row < 8; $row++) {
        for ($col = 0; $col < 8; $col++) {
            $color = ($row + $col) % 2 === 0 ? 'white' : 'black';
            echo "<div class='square $color'></div>";
        }
    }
    ?>
</div>

</body>
</html>
