<?php
use PHPUnit\Framework\TestCase;
use App\LeetCode\TwoSum\Solution;

class TwoSumTest extends TestCase
{
    public function testTwoSum()
    {
        $cases = [];
        $cases[] = [
            'nums' =>  [2,7,11,15], 
            'target'=> 9,
            'solution' => [0,1]
        ];
        $cases[] = [
            'nums' =>  [-3,4,3,90], 
            'target'=> 0,
            'solution' => [0,2]
        ];
        $cases[] = [
            'nums' =>  [2,7,11,15], 
            'target'=> 9,
            'solution' => [0,1]
        ];

        $s = new Solution();
        foreach ($cases as $case) {
            $this->assertEquals($s->twoSum($case['nums'],$case['target']),$case['solution']);
        }
    }
}
