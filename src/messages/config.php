<?php

return [
    'sourcePath' => __DIR__ . DIRECTORY_SEPARATOR . '..',
    'messagePath' => __DIR__,
    'languages' => ['af', 'ar-MA', 'ar-SA', 'ar', 'az', 'be', 'bg', 'bn', 'bo', 'br', 'bs', 'ca', 'cs', 'cv', 'cy', 'da', 'de-AT', 'de', 'el', 'en-AU', 'en-CA', 'en-GB', 'eo', 'es', 'et', 'eu', 'fa', 'fi', 'fo', 'fr-CA', 'fr', 'gl', 'he', 'hi', 'hr', 'hu', 'hy-AM', 'id', 'is', 'it', 'ja', 'ka', 'km', 'ko', 'lb', 'lt', 'lv', 'mk', 'ml', 'mr', 'ms-MY', 'my', 'nb', 'ne', 'nl', 'nn', 'pl', 'pt-BR', 'pt', 'ro', 'ru', 'sk', 'sl', 'sq', 'sr-CYRL', 'sr', 'sv', 'ta', 'th', 'tl-PH', 'tr', 'tzm-LATN', 'tzm', 'uk', 'uz', 'vi', 'zh-CN', 'zh-TW'],
    'translator' => 'Yii::t',
    'sort' => false,
    'overwrite' => true,
    'removeUnused' => false,
    'only' => ['*.php'],
    'except' => [
        '.svn',
        '.git',
        '.gitignore',
        '.gitkeep',
        '.hgignore',
        '.hgkeep',
        '/messages',
    ],
    'format' => 'php',
];
