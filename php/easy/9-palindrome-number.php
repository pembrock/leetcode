<?php
/** https://leetcode.com/problems/palindrome-number/ */

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        return $x == $this->reverse($x);
    }

    function reverse($number)
    {
        $rnum = 0;
        while ($number > 0)
        {
            $rnum = $rnum * 10;
            $rnum = $rnum + $number % 10;
            $number = (int)($number/10);
        }
        return $rnum;
    }
}

$x = 121;
$solution = new Solution();
echo $solution->isPalindrome($x);