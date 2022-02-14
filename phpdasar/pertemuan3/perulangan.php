<?php
// perulangan
// while
// for
// do...while

// for
// for ($i = 0; $i < 5; $i++) {
//     echo "HELLOWORD <BR>";
// }

// // while
// $i = 0;
// while ($i < 7) {
//     echo "ERVAN SUGIANTO <br>";
//     $i++;
// }

// // do while
// $i = 0;
// do {
//     echo "ILOVYOU <br>";
//     $i++;
// } while ($i < 10);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perulangan</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- perulangan php di dalam html -->
        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>