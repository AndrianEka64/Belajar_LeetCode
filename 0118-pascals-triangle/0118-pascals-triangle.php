class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        $segitiga = [];
        for ($i=0; $i < $numRows; $i++) { 
            $row = array_fill(0,$i + 1, 1);
            for ($j=1; $j < $i; $j++) { 
                $row[$j] = $segitiga[$i-1][$j-1]+$segitiga[$i-1][$j];
            }
            $segitiga[]=$row;
        }
        return $segitiga;
    }
}