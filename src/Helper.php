<?php

namespace Jaeger;

class Helper
{
    const TRACE_HEADER_NAME = 'Uber-Trace-Id';

    const UDP_PACKET_MAX_LENGTH = 65000;

    const SAMPLER_TYPE_TAG_KEY = 'sampler.type';

    const SAMPLER_PARAM_TAG_KEY = 'sampler.param';

    public static function microtimeToInt()
    {
        return intval(microtime(true) * 1000000);
    }

    public static function identifier()
    {
        return strrev(microtime(true) * 10000 . rand(1000, 9999));
    }

    /**
     * 转为16进制
     * @param $string
     * @return string
     */
    public static function toHex($string1, $string2 = "")
    {
        if ($string2 == "") {
            return sprintf("%x", $string1);
        } else {
            return sprintf("%x%016x", $string1, $string2);
        }
    }
}
