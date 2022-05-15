<?php
/** https://leetcode.com/problems/roman-to-integer/ */

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    static $romanTable = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    ];
    public function romanToInt($s) {
        $intNum = 0;
        for ($i = strlen($s)-1; $i >= 0; $i--) {
            if ($i > 0) {
                if (($s[$i] == "V" || $s[$i] == "X") && $s[$i - 1] == "I") {
                    $num = self::$romanTable[$s[$i]] - self::$romanTable["I"];
                    $i--;
                } else if (($s[$i] == "L" || $s[$i] == "C") && $s[$i - 1] == "X") {
                    $num = self::$romanTable[$s[$i]] - self::$romanTable["X"];
                    $i--;
                } else if (($s[$i] == "D" || $s[$i] == "M") && $s[$i - 1] == "C") {
                    $num = self::$romanTable[$s[$i]] - self::$romanTable["C"];
                    $i--;
                } else {
                    $num = self::$romanTable[$s[$i]];
                }
            }else {
                $num = self::$romanTable[$s[$i]];
            }
            $intNum = $intNum + $num;
        }

        return $intNum;
    }
}

$s = "LVIII";
$solution = new Solution();

echo $solution->romanToInt($s);