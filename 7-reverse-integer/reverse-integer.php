class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $simpan = $x < 0 ? -1 : 1;
        $x = abs($x);
        $rev = 0;
        while ($x > 0) {
            $digit = $x % 10;
            $x = intdiv($x, 10);
            if ($rev > (2147483647-$digit) / 10) {
                return 0;
            }
            $rev = $rev * 10 + $digit;
        }
        return $rev * $simpan; 
    }
}