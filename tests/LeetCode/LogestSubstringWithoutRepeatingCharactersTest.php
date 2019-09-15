<?php
use PHPUnit\Framework\TestCase;
use App\LeetCode\LongestSubstringWithoutRepeatingCharacters\Solution;

class LogestSubstringWithoutRepeatingCharactersTest extends TestCase
{
    public function cases() {
        return[ 
            ["abcabcbb",3],
            ["bbbbb",1],
            ["pwwkew",3],
            ["abba",2],
            ["aab",2],
        ];
    }

    /**
     * @dataProvider cases
     */
    public function testLengthOfLongestSubstring($string,$solution)
    {   
        $s = new Solution();
        $this->assertEquals($s->lengthOfLongestSubstring($string),$solution);
    }
}