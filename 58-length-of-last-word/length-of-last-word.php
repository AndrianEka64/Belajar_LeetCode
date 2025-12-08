class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $kata = trim($s);
        $hasil = "";
        for($i=strlen($kata)-1; $i>=0; $i--){
            if($kata[$i] === " "){
                break;
            }
            $hasil .= $kata[$i];
        }
        return strlen($hasil);
    }
}