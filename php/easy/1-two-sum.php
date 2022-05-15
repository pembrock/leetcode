<?php
/**
 * https://leetcode.com/problems/two-sum/
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $numsHash = [];
        foreach($nums as $index => $val) {
            $numsHash[$val] = $index;
        }

        for ($i = 0; $i < count($nums); $i++) {
            $need = $target - $nums[$i];
            if (isset($numsHash[$need])) {
                if ($numsHash[$need] != $i) {
                    return [$i, $numsHash[$need]];
                }
            }
        }

        return [];
    }
}

/**
    Input: nums = [2,7,11,15], target = 9
    Output: [0,1]
    Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
 */

$nums = [2,7,11,15];
$target = 9;

$solution = new Solution();
print_r($solution->twoSum($nums, $target));