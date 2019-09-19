<?php

/**
 * Name: Add Two Numbers
 * URL: https://leetcode.com/problems/add-two-numbers/
 */

namespace App\LeetCode\AddTwoNumbers;

use App\LeetCode\AddTwoNumbers\ListNode;

class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2)
    {
        $solutionNode = new ListNode(0);
        $solutionFirst = $solutionNode;
        $carry = 0;
        while ($l1 || $l2) {
            $sum = $l1->val + $l2->val + $carry;

            $carry = 0;
            $remainder = $sum - 10;
            if ($remainder >= 0) {
                $sum = $remainder;
                $carry = 1;
            }

            $solutionNode->next = new ListNode($sum);
            $solutionNode = $solutionNode->next;

            $l1 = $l1->next;
            $l2 = $l2->next;
        }

        if ($carry > 0) {
            $solutionNode->next = new ListNode($carry);
        }

        return $solutionFirst->next;
    }
}
