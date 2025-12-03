class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        $i = 0;
        $n = strlen($s);
        $sign = 1;
        $result = 0;
        while ($i < $n && $s[$i] === ' ') {
            $i++;
        }
        if ($i < $n && ($s[$i] === '+' || $s[$i] === '-')) {
            $sign = ($s[$i] === '-') ? -1 : 1;
            $i++;
        }
        while ($i < $n && ctype_digit($s[$i])) {
            $digit = intval($s[$i]);
            if ($result > intdiv(2147483647 - $digit, 10)) {
                return $sign == 1 ? 2147483647 : -2147483648;
            }
            $result = $result * 10 + $digit;
            $i++;
        }
        return $result * $sign;
    }
}