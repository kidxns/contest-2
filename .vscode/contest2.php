<?php 

//Viết chương trình trả về phần tử xuất hiện nhiều nhất trong mảng? Giả định mảng luôn chỉ có duy nhất một giá trị có số lần xuất hiện lớn nhất
function getMostPopular($arrString)
{
    $covertStringtoArray = explode(" ",$arrString); 
    $newArr = $covertStringtoArray;
    $countNewArr = count($covertStringtoArray);
    
    $newArrUnique = array_unique($newArr);
    $mostPopularNumber = [];

    for($i = 0; $i < count($newArrUnique); $i++)
    {
        for($j = 0; $j < $countNewArr ; $j++)
        {
            if($newArrUnique[$i] == $newArr[$j])
            {
                $mostPopularNumber[$newArr[$i]] +=1;
            }
        }
    }


    return $mostPopularNumber;

}

function getResult($input)
{
    $getMostPopularArr = getMostPopular($input);
    // return $getMostPopularArr;
    $getMax = max($getMostPopularArr);

    foreach ($getMostPopularArr as $i => $value) {
        if($value == $getMax) {
            return $i;
        }
      }
}
// $input = '1 1 1 1 1 1';
// $input = '1 1 1 1 1 2';
$input = '1 2 2 4';
// $input = '1 11 1 22 22 11 11';
print_r(getResult($input));
?>