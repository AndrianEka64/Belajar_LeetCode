class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        $baris = array_fill(0, $numRows, "");
        $akhir = 0;
        $nt = 1;
        for ($i = 0; $i < strlen($s); $i++) {
            $baris[$akhir] .= $s[$i];
            if($akhir == 0){
                $nt = 1;
            }elseif ( $akhir == $numRows -1){
                $nt = -1;
            }
            $akhir += $nt;
        }
        return implode("", $baris);
    }
}