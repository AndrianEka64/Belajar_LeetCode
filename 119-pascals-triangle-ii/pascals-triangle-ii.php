class Solution {

    /**
     * @param Integer $rowIndex
     * @return Integer[]
     */
    function getRow($rowIndex) {
        $hasil = [1];
        $prev = 1;
        for ($i=1; $i <= $rowIndex; $i++) { 
            $next = $prev * ($rowIndex -$i + 1)/$i;
            $hasil[]= $next;
            $prev=$next;
        }
        return $hasil;
    }
}