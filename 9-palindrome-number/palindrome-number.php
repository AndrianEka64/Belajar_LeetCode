class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $nilai_asli = $x;
        $rev = 0;
        while ($x > 0) {
            $digit = $x % 10;           
            $rev = $rev * 10 + $digit;  
            $x = floor($x / 10);        
        }
        return $rev == $nilai_asli;       
    }
}