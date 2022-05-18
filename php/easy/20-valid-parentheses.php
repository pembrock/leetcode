<?php
/** https://leetcode.com/problems/valid-parentheses/ */

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    public function isValid($s) {
        if (mb_strlen($s) % 2 != 0) {
            return false;
        }

        $brackets = [
            '(' => ')',
            '[' => ']',
            '{' => '}'
        ];
        $bracketsArray = mb_str_split($s);
        $bracketsStack = [];
        foreach ($bracketsArray as $key => $value) {
            if (isset($brackets[$value])) {
                $bracketsStack[] = $value;
            } else {
                $last = array_pop($bracketsStack);
                if ($brackets[$last] != $value) {
                    return false;
                }
            }
        }

        return empty($bracketsStack);
    }
}

$solution = new Solution();
$s = "([{}])";
var_dump($solution->isValid($s));