<?php
use PHPUnit\Framework\TestCase;
use App\LeetCode\MedianOfTwoSortedArrays\Solution;

class MedianOfTwoSortedArraysTest extends TestCase
{
    public function cases() {
        return[ 
            [[1,3],[2],2.0],
            [[1,2],[3,4],2.5],
            [[3],[-2,-1],-1.0],
        ];
    }

    /**
     * @dataProvider cases
     */
    public function testFindMedianSortedArrays($nums1,$nums2,$solution)
    {   
        $s = new Solution();
        $this->assertEquals($s->findMedianSortedArrays($nums1,$nums2),$solution);
    }
}