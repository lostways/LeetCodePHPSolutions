<?php
use PHPUnit\Framework\TestCase;
use App\LeetCode\AddTwoNumbers\Solution;
use App\LeetCode\AddTwoNumbers\ListNode;

class AddTwoNumbersTest extends TestCase
{
    public function cases() {
        return[ 
            [[2,4,3],[5,6,4],[7,0,8]]
        ];
    }

    /**
     * @dataProvider cases
     */
    public function testAddTwoNumbers($l1,$l2,$solution)
    {   
        //build lists
        $ListOne = new ListNode($l1[0]);
        $ListOne->next = new ListNode($l1[1]);
        $ListOne->next->next = new ListNode($l1[2]);

        $ListTwo = new ListNode($l2[0]);
        $ListTwo->next = new ListNode($l2[1]);
        $ListTwo->next->next = new ListNode($l2[2]);
        
        $Solution = new ListNode($solution[0]);
        $Solution->next = new ListNode($solution[1]);
        $Solution->next->next = new ListNode($solution[2]);

        $s = new Solution();
        $this->assertEquals($s->addTwoNumbers($ListOne,$ListTwo),$Solution);
    }
}