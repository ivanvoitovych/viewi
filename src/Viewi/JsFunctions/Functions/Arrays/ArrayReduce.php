<?php

    namespace Viewi\JsFunctions\Functions\Arrays;

    use Viewi\JsFunctions\BaseFunctionConverter;
    use Viewi\JsTranslator;

    class ArrayReduce extends BaseFunctionConverter
    {
        public static string $name = 'array_reduce';
    
        public static function convert(
            JsTranslator $translator,
            string $code,
            string $identation
        ): string {
            $jsToInclue = __DIR__ . DIRECTORY_SEPARATOR . 'ArrayReduce.js';
            $translator->includeJsFile(self::$name, $jsToInclue);
            return $code . '(';
        }
    }