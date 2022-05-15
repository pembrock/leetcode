<?php
/** https://leetcode.com/problems/longest-common-prefix/ */

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    public function longestCommonPrefix($strs) {
        $countStrs = count($strs);

        $minLen = strlen($strs[0]);

        $prefix = '';

        for ($i = 1; $i < $countStrs; $i++) {
            if (strlen($strs[$i]) > $minLen) {
                $minLen = strlen($strs[$i]);
            }
        }

        for ($i = 0; $i < $minLen; $i++) {
            $char = $strs[0][$i];
            foreach ($strs as $str) {
                if ($str[$i] !== $char) {
                    return $prefix;
                }
            }
            $prefix .= $char;
        }

        return $prefix;
    }
}

$strs = ["flower","flow","flight"];
$solution = new Solution();
print_r($solution->longestCommonPrefix($strs));