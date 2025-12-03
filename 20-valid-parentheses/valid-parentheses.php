class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $bracket = [];
        $pasangan = [
            ')'=>'(',
            '}'=>'{',
            ']'=>'['
        ];

        for ($i = 0; $i < strlen($s); $i++){
            $karakter = $s[$i];

            if($karakter === '(' || $karakter === '{' || $karakter === '['){
                $bracket[]=$karakter;
            }else{
                if (empty($bracket)) return false;
                $atas = array_pop($bracket);
                if($pasangan[$karakter] !== $atas) return false;
            }
        }
        return empty($bracket);
    }
}