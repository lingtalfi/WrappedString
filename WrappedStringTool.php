<?php

namespace WrappedString;

/*
 * LingTalfi 2015-11-20
 */
use Escaper\EscapeTool;

class WrappedStringTool
{


//    /**
//     * @param $mbPos , the mb position in value to start from
//     * @return false|array of
//     *                      0: mb position of the begin symbol
//     *                      1: mb position of the char just after the end symbol
//     *
//     */
//    public static function getNextWrappedStringInfo($value, $mbPos, $beginSymbol, $beginSymbolMbLen, $endSymbol, $endSymbolMbLen, $escapingMode)
//    {
//        $ret = false;
//        if (false !== $bPos = EscapeTool::getNextUnescapedSymbolPos($value, $beginSymbol, $mbPos, $escapingMode)) {
//            if (false !== $ePos = EscapeTool::getNextUnescapedSymbolPos($value, $endSymbol, $bPos + $beginSymbolMbLen, $escapingMode)) {
//                $ret = [$bPos, $ePos + $endSymbolMbLen];
//            }
//        }
//        return $ret;
//    }
//
//
//    public static function isCandyString($string, $symbol, $escapingMode)
//    {
//        if (0 === strpos($string, $symbol)) {
//            $symbolLen = mb_strlen($symbol);
//            if (false !== $pos = EscapeTool::getNextUnescapedSymbolPos($string, $symbol, $symbolLen, $escapingMode)) {
//                $len = mb_strlen($string);
//                if ($len - 1 === $pos) {
//                    return true;
//                }
//            }
//        }
//        return false;
//    }
//
//    /**
//     * Tries to find a valid candy string starting from the given pos,
//     * and returns the position of the end symbol in case of success.
//     *
//     *
//     * @return false|int,
//     *                      false in case of failure
//     *                      the position of the last symbol in case of success
//     */
//    public static function findCandyStringEndPos($string, $symbol, $pos = 0, $escapingMode = 1)
//    {
//        if ($pos === mb_strpos($string, $symbol)) {
//            $symbolLen = mb_strlen($symbol);
//            if (false !== $endPos = EscapeTool::getNextUnescapedSymbolPos($string, $symbol, $pos + $symbolLen, $escapingMode)) {
//                return $endPos;
//            }
//        }
//        return false;
//    }


    /**
     *
     * Unwraps a supposedly wrapped string.
     *
     * $wrappedString: a well formed wrapped string (this method doesn't do any checking on that)
     *
     *
     * Returns the unwrapped string.
     *
     */
    public static function unwrap($wrappedString, $beginSymbol, $beginSymbolMbLen, $endSymbol, $endSymbolMbLen, $escapeModeRecursive = true)
    {
        $ret = mb_substr($wrappedString, $beginSymbolMbLen, -$endSymbolMbLen);
        $ret = EscapeTool::unescape($ret, [$beginSymbol, $endSymbol], $escapeModeRecursive);
        return $ret;
    }

}
