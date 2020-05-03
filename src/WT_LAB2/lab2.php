<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input id="lab-input" type="text" autocomplete="off" name="arr1" placeholder="1st array" pattern="^([0-9],?)*[0-9]$">
        <input id="lab-input" type="text" autocomplete="off" name="arr2" placeholder="2nd array" pattern="^([0-9],?)*[0-9]$">
        <input id="lab-input" type="submit" name="" value="Merge">

        <?php
        function array_concat($array1, $array2){
            $length = count($array1) + count($array2);
            $lengthFirst = count($array1);

            for ( $i = $lengthFirst; $i < $length ; $i++){
                $array1[$i] = $array2 [$i - $lengthFirst];
            }

            return $array1;
        }

        function array_even($array){
            $buffArr = array();
            $j = 0;
            for ($i = 0 ; $i<count($array) ; $i++){
                if ($array[$i] % 2 == 0){
                    $buffArr[$j] = $array[$i];
                    $j++;
                }
            }
            return $buffArr;
        }


        if (isset($_GET['arr1'])){
            echo '<p>';
            echo 'Array 1:';
            if (strlen($_GET['arr1'])>0){
                echo '[' . $_GET['arr1'] . ']' . '<br>';
            } else {
                echo ' []' . '<br>';
            }
            echo '</p>';
        }

        if (isset($_GET['arr2'])){
            echo '<p>';
            echo 'Array 2:';
            if (strlen($_GET['arr2'])>0){
                echo '[' . $_GET['arr2'] . ']' . '<br>';
            } else {
               echo '[]' . '<br>';
            }
            echo '</p>';
        }

        if (isset($_GET['arr1'])&&isset($_GET['arr2'])){
            $array1 = array();
            $array2 = array();

            if (strlen($_GET['arr1']>0)){
                $array1 = explode(',', $_GET['arr1']);
            }
            if (strlen($_GET['arr2']>0)){
                $array2 = explode(',', $_GET['arr2']);
            }

            $array3 = array_concat($array1,$array2);
            $evenArr = array_even($array3);

            echo '<p>';
            echo 'New array: [' . implode( ",", $array3) . ']';
            echo '</p>';

            echo '<p>';
            echo 'Even array: [' . implode( ",", $evenArr) . ']';
            echo '</p>';
        }
        ?>
    </form>

</body>
</html>
