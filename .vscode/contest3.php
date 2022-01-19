<?php


//Viết chương trình kiểm tra một mảng có phải là tăng dần nếu đổi chỗ duy nhất một cặp số? Nếu thỏa mãn trả về "1" ngược lại trả về "0"

function check($arrString)
{
    $covertStringtoArray = explode(" ",$arrString); 
    $newArr = $covertStringtoArray;
    $sortNewArr = json_decode(json_encode($newArr));
    $nx = 0;
    $n = 1;

    for ($i=0; $i < count($newArr); $i++) { 
        
            if(!empty($newArr[$i+1]))
            {
                if($newArr[$i] > $newArr[$i+1])
                {
                    $nx++;
                    $sortNewArr[$i] = $newArr[$i+1];
                    $sortNewArr[$i+1] = $newArr[$i];
                }
            }
        
    }
    return ($nx == $n) ? 1 : 0;

}

$input = '1 2 3 5 4';
// $input = '1 2 3 4 5';
// $input = '2 1 4 5 4';
// $input = '21 2 2 3 4 5 6 8 7';
// $input = '1 2 3 5 4 6';
print_r( check($input));
