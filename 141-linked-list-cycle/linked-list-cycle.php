/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        $hasil = $hd = $head;
        while ($hd !== null && $hd->next !== null){
            $hasil = $hasil->next;
            $hd = $hd->next->next;
            if($hasil === $hd){
                return true;
            }
        }
        return false;
    }
}