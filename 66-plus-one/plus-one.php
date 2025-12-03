class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $jumlah = count($digits);
        for ($i = $jumlah - 1; $i >= 0 ; $i--) { 
            $digits[$i] += 1;
            if($digits[$i] < 10){
                break;
            }
            $digits[$i] = 0;
            if($digits[0] == 0){
                array_unshift($digits, 1);
            };
        }
        return $digits;
    }
}