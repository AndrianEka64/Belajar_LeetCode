class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        $i = 0;
        while($i * $i <= $x){
            $i++;
        }
        return $i - 1;
    }
}