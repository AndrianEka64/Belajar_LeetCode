class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        if (strlen($s) < 2) return $s;
        $start = 0;  
        $maxLength = 1;
        $expand = function($left, $right) use ($s, &$start, &$maxLength) {
            while ($left >= 0 && $right < strlen($s) && $s[$left] == $s[$right]) {
                $left--;
                $right++;
            }
            $length = $right - $left - 1;
            if ($length > $maxLength) {
                $maxLength = $length;
                $start = $left + 1;
            }
        };
        for ($i = 0; $i < strlen($s); $i++) {
            $expand($i, $i);
            $expand($i, $i + 1);
        }
        return substr($s, $start, $maxLength);   
    }
}