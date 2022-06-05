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
    public function twoSumO2($nums, $target) {
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

    /** Two pointers */
    public function twoSum(array $nums, int $target): array
    {
        $left = 0;
        $right = count($nums) - 1;

        while ($left < $right) {
            $sum = $nums[$left] + $nums[$right];
            if ($sum == $target) {
                return [$left, $right];
            }

            if ($sum > $target) {
                $right--;
            }

            if ($sum < $target) {
                $left++;
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