class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $left = 0;
        $right = count($height) - 1;
        $maxWater = 0;
        while ($left < $right){
            $width = $right - $left;
            $currentHeight = min($height[$left], $height[$right]);
            $area = $width * $currentHeight;
            if ($area > $maxWater){
                $maxWater = $area;
            }
            if($height[$left] < $height[$right]){
                $left++;
            }else{
                $right--;
            }
        }
        return $maxWater;
    }
}