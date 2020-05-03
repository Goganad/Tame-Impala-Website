<?php
    function mergeArrays($arr1, $arr2){
        $buffLength = count($arr1) + count($arr2);
        $firstI = count($arr1);
        for ($i = count($arr1); $i < $buffLength; ++$i) {
            $arr1[$i] = $arr2[$i - $firstI];
        }
        return $arr1;
    }

    function createEvenArray($arr)
    {
        return array_filter($arr, function ($item) {
            return 0 === $item % 2;
        });
    }


    if (isset($_GET['arr1']) && isset($_GET['arr2'])) {
        echo '<p>';
        echo 'Array 1: ';

        if (strlen($_GET['arr1']) > 0) {
            echo '['.$_GET['arr1'].']';
        } else {
            echo '[]';
        }
        echo '<br>';
        echo '</p>';

        echo '<p>';
        echo 'Array2: ';
        if (strlen($_GET['arr2']) > 0) {
            echo '['.$_GET['arr2'].']';
        } else {
            echo '[]';
        }
        echo '<br>';
        echo '</p>';

        $numArray1 = [];
        $numArray2 = [];

        if (strlen($_GET['arr1']) > 0) {
            $numArray1 = explode(',', $_GET['arr1']);
        }

        if (strlen($_GET['arr2']) > 0) {
            $numArray2 = explode(',', $_GET['arr2']);
        }

        
        $numArrayMrg = mergeArrays($numArray1, $numArray2);
        $numArrayEven = createEvenArray($numArrayMrg);

        echo '<p>';
        echo 'New array: ['.implode(',', $numArrayMrg).']';
        echo '</p>';

        echo '<p>';
        echo 'Even array: ['.implode(',', $numArrayEven).']';
        echo '</p>';
    }