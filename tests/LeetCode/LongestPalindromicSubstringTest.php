<?php
use PHPUnit\Framework\TestCase;
use App\LeetCode\LongestPalindromicSubstring\Solution;

class LongestPalindromicSubstringTest extends TestCase
{
    public function cases() {
        return[ 
            ["babad","aba"],
            ["cbbd","bb"],
        ];
    }

    /**
     * @dataProvider cases
     */
    public function testLongestPalindrome($string,$solution)
    {   
        $s = new Solution();
        $this->assertEquals($s->longestPalindrome($string),$solution);
    }
}