<?php
/** https://leetcode.com/problems/remove-element/ */

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $cnt = count($nums) - 1;
        for ($i = 0; $i <= $cnt; $i++) {
            if ($nums[$i] == $val) {
                unset($nums[$i]);
            }
        }

        return count($nums);
    }
}

/**
Input: nums = [3,2,2,3], val = 3
Output: 2, nums = [2,2,_,_]
 */

$nums = [3,2,2,3];
$val = 3;
$solution = new Solution();
$solution->removeElement($nums, $val);
print_r($nums);