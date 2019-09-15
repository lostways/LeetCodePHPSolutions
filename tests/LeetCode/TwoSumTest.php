<?php
use PHPUnit\Framework\TestCase;
use App\LeetCode\TwoSum\Solution;

class TwoSumTest extends TestCase
{
    public function cases() {
        return[ 
            [[2,7,11,15],9,[0,1]],
            [[-3,4,3,90],0,[0,2]],
            [[2,7,11,15],9,[0,1]],
        ];
    }

    /**
     * @dataProvider cases
     */
    public function testTwoSum($nums,$target,$solution)
    {
        $s = new Solution();
        $this->assertEquals($s->twoSum($nums,$target),$solution);
    }
}
