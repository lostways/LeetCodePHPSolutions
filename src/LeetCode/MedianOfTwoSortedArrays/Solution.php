<?php
/**
 * Name: Median of Two Sorted Arrays
 * URL: https://leetcode.com/problems/median-of-two-sorted-arrays/
 */
namespace App\LeetCode\MedianOfTwoSortedArrays;

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2)
    {
        list($A, $B) = $this->orderArrays($nums1, $nums2);
        $aLen = count($A);
        $bLen = count($B);
        $halfLen = intval(($aLen + $bLen + 1) / 2);

        $aMin = 0;
        $aMax = $aLen;

        while ($aMin <= $aMax) {
            $aCount = intval(($aMax + $aMin) / 2);
            $bCount = $halfLen - $aCount;

            if ($aCount < $aMax && $B[$bCount - 1] > $A[$aCount]) {
                $aMin = $aCount + 1;
            } else if ($aCount > $aMin && $A[$aCount - 1] > $B[$bCount]) {
                $aMax = $aCount - 1;
            } else {

                $leftMax = 0;
                if ($aCount == 0) {
                    $leftMax = $B[$bCount - 1];
                } else if ($bCount == 0) {
                    $leftMax = $A[$aCount - 1];
                } else {
                    $leftMax = max($A[$aCount - 1], $B[$bCount - 1]);
                }

                if (($aLen + $bLen) % 2 == 1) {
                    return $leftMax;
                }

                $rightMin = 0;
                if ($aCount == $aLen) {
                    $rightMin = $B[$bCount];
                } else if ($bCount == $bLen) {
                    $rightMin = $A[$aCount];
                } else {
                    $rightMin = min($A[$aCount], $B[$bCount]);
                }

                return ($leftMax + $rightMin) / 2;
            }
        }
    }

    private function orderArrays(array $a, array $b)
    {
        if (count($a) > count($b)) {
            return [&$b, &$a];
        }
        return [&$a, &$b];
    }
}
