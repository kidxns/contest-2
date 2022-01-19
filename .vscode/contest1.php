<?php

//Kiểm tra một mảng có phải là mảng tăng dần hay không?

function isAsc($arrString)
{
    $covertStringtoArray = explode(" ",$arrString); 
    $newArr = $covertStringtoArray;
    $resultArr = [0, 0];
    $countNewArr = count($covertStringtoArray);

    for ($i=0; $i < $countNewArr; $i++) {
        if (!empty($newArr[$i + 1])) {
            if ($newArr[$i] >= $newArr[$i + 1]) {
                $resultArr[1] += 1;
                //false
            }
            if ($newArr[$i] <= $newArr[$i + 1]) {
                $resultArr[0] += 1;
                //true
            }
        }
    }
    // return $resultArr;

    return $resultArr[0] === $countNewArr -1 ? 1 : 0;
}



// $input = '1 2 3 4 5';
// $input = '1 2 3 2';
// $input = '1 2 3 3 2 2 4';
// $input = '6 5 4 2 1';
$input = '1 100 200 300';
print_r(isAsc($input));
