/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $dummy = new ListNode(0);
        $current = $dummy;
        $carry = 0;

        while ($l1 !== null || $l2 !== null || $carry > 0) {
            $x = ($l1 !== null) ? $l1->val : 0;
            $y = ($l2 !== null) ? $l2->val : 0;

            $sum = $x + $y + $carry;
            $carry = intval($sum / 10);
            $digit = $sum % 10;

            $current->next = new ListNode($digit);
            $current = $current->next;

            if ($l1 !== null) $l1 = $l1->next;
            if ($l2 !== null) $l2 = $l2->next;
        }
        return $dummy->next;
    }
}