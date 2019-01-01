<?php
function isPrime($num)
{
    if ($num >= 1 && $num <= 3)
    {
        return true;
    }
    if ($num % 2 == 0)
    {
        return false;
    }
    for ($i = 3;$i < $num / 2;$i = $i + 2)
    {
        if ($num % $i == 0)
        {
            return false;
        }
    }
    return true;
}

$number = 1000000;
$tempSum = 7;
$counter = 0;
$final_sum = array();

array_push($final_sum, $tempSum);

for ($j = 11; $j < $number; $j++)
{
    if (isPrime($j))
    {
        array_push($final_sum, $j);
        $tempSum += $j;
        
        if (isPrime($tempSum) && $tempSum < $number)
        {
            $counter++;
            $final = $tempSum;
        }
    }
    if ($tempSum > $number)
    {
        break;
    }
}

echo "Largest Concesutive Prime : " . $final . "<br><Br>";
array_pop($final_sum);
echo "Total Terms : " . count($final_sum);
?>