<?php
/**
 * Name: Add Two Numbers
 * URL: https://leetcode.com/problems/add-two-numbers/
 */
namespace App\LeetCode\LongestSubstringWithoutRepeatingCharacters;

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $count = 0;
        $seenAt = [];
        for ($i = 0, $j = 0; $j < strlen($s); $j++) { 
            if (isset($seenAt[$s[$j]])) {
                $i = max($seenAt[$s[$j]] + 1, $i); 
            }
            $count = max($count, $j - $i + 1);
            $seenAt[$s[$j]] = $j;
        }
        return $count;
    }
}