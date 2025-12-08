class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $hasil = 0;
        foreach ($nums as $num => $value) {
            $hasil ^= $value;
        }
        return $hasil;
    }
}