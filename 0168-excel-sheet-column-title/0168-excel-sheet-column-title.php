class Solution {

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        $title = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $hasil = '';
        while(true){
            $title_I = ($columnNumber % 26) - 1;
            $hasil = $title[$title_I].$hasil;
            if($columnNumber <= 26){
                return $hasil;
            }
            $columnNumber = floor(($columnNumber - 1)/ 26);
        }
        return $hasil;
    }
}