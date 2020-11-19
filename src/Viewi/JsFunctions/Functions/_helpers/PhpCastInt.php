<?php

namespace Viewi\JsFunctions\Functions\_helpers;

use Viewi\JsFunctions\BaseFunctionConverter;
use Viewi\JsTranslator;

class PhpCastInt extends BaseFunctionConverter
{
    public static string $name = '_php_cast_int';
    
    public static function convert(
        JsTranslator $translator,
        string $code,
        string $identation
    ): string {
        $jsToInclue = __DIR__ . DIRECTORY_SEPARATOR . 'PhpCastInt.js';
        $translator->includeJsFile(self::$name, $jsToInclue);
        return $code . '(';
    }
}
