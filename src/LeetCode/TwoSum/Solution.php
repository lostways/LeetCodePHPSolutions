<?php

/**
 * Name: Two Sum
 * URL: https://leetcode.com/problems/two-sum/
 */

namespace App\LeetCode\TwoSum;

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $toCheck = [];
        foreach ($nums as $index => $value) {
            $complement = $target - $value;
            $index2 = $toCheck[$complement] ?? null;
            if ($index2 !== null) {
                return [$index2, $index];
            }
            $toCheck[$value] = $index;
        }
        throw new Exception("No sums found!");
    }
}
