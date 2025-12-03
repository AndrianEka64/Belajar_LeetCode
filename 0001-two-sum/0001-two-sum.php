class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $index = []; //tes tes
        foreach ($nums as $i => $num) {
            $keluaran = $target - $num;
            if (isset($index[$keluaran])) {
                return [$index[$keluaran], $i];
            }
            $index[$num] = $i;
        }
        return [];
    }
}