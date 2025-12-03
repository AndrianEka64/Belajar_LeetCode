class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $chars = [];
        $left = 0;
        $maxLength = 0;
        for ($right = 0; $right < strlen($s); $right++) {
            if (isset($chars[$s[$right]])) {
                $left = max($left, $chars[$s[$right]] + 1);
            }
            $chars[$s[$right]] = $right;
            $maxLength = max($maxLength, $right - $left + 1);
        }
        return $maxLength;
    }
}