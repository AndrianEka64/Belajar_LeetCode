class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
       $langkah = [NULL, 1, 2];
       for ($i=3; $i <= $n; $i++) { 
            $langkah[$i] = $langkah[$i-1] + $langkah[$i - 2];
        }
        return $langkah[$n];
    }
}