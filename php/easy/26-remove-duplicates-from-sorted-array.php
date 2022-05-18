<?php
/** https://leetcode.com/problems/remove-duplicates-from-sorted-array/ */

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(array &$nums): int
    {
        $cnt = count($nums) - 1;
        for($i=0; $i < $cnt; $i++) {
            if (!isset($nums[$i]))
                continue;
            for($j = $cnt; $j > $i; $j--) {
                if (!isset($nums[$j]))
                    continue;
                if ($nums[$i] == $nums[$j]) {
                    unset($nums[$j]);
                }
            }
        }

        return count($nums);
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates2(array &$nums): int
    {
        $length = count($nums);
        for ($i = 0; $i < $length; $i++) {
            $next = next($nums);
            if ($nums[$i] === $next) {
                unset($nums[$i]);
            }
        }


        return count($nums);
    }
}

/**
 * Input: nums = [0,0,1,1,1,2,2,3,3,4]
 * Output: 5, nums = [0,1,2,3,4,_,_,_,_,_]
 */
$nums = [0,0,1,1,1,2,2,3,3,4];
$solution = new Solution();
$solution->removeDuplicates2($nums);
print_r($nums);