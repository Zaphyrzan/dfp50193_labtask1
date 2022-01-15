<!--Multidimensional Array -->
<?php
    $game = [
        'Item 1' => [
            'Halo Infinite', 'RM199', 'Action', '343 Industry',
        ],

        'Item 2' => [
            'Total War Warhammer III', 'RM179', 'Strategy', 'Creative Assembly',
        ],

        'Item 3' => [
            'Middle Earth: Shadow of War', 'RM105', 'Adventure', 'Monolith Production',
        ]
    ];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task 1</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <h2>Wan's Gaming Store</h2>
    <!--WAN ZAFIRZAN BIN WAN TARMIZAN | 18DDT19F1123 | DDT5D -->

    <!--Table with Array's Content-->
    <table>
        <tr>
            <th><b>Item</b></th>
            <th><b>Name</b></th>
            <th><b>Price</b></th>
            <th><b>Category</b></th>
            <th><b>Developer</b></th>
        </tr>

        <!--Nested Loop for the Array's Content-->
        <?php
        function DisplayGame($game){
            foreach ($game as $product => $value) {
                echo "<tr><td>$product</td>";
                foreach ($value as $productlist) {
                    echo "<td>$productlist</td>";
                    
                }
                echo "</tr>";
            }
        }
        DisplayGame($game)
        ?>
    </table>
</body>
</html>