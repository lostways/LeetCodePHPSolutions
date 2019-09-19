<?php

/**
 * Longest Palindromic Substring
 * URL: https://leetcode.com/problems/longest-palindromic-substring/
 */

namespace App\LeetCode\LongestPalindromicSubstring;

class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s)
    {
        $palinStart = 0;
        $palinEnd = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $lenEven = $this->expandAroundCenter($s, $i, $i + 1);
            $lenOdd = $this->expandAroundCenter($s, $i, $i);
            $palinLen = max($lenEven, $lenOdd);
            if ($palinLen > $palinEnd - $palinStart) {
                $palinStart = ceil($i - ($palinLen - 1) / 2);
                $palinEnd = floor($i + $palinLen / 2);
            }
        }
        return substr($s, $palinStart, ($palinEnd - $palinStart) + 1);
    }

    private function expandAroundCenter(string $s, int $left, int $right)
    {
        while ($left >= 0 && $right < strlen($s) && $s[$left] == $s[$right]) {
            $left--;
            $right++;
        }
        return $right - $left - 1;
    }
}
