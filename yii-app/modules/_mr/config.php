<?php
return [
    'components' => [
        // list of component configurations
    ],
    'params' => [
        // list of parameters
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\Controller',
            'access' => ['@'],
            'connectOptions' => [
                'bind' => [
                    'upload.pre mkdir.pre mkfile.pre rename.pre archive.pre ls.pre' => array(
                        'Plugin.Sanitizer.cmdPreprocess',
                    ),
                    'ls' => array(
                        'Plugin.Sanitizer.cmdPostprocess',
                    ),
                    'upload.presave' => array(
                        'Plugin.Sanitizer.onUpLoadPreSave',
                    ),
                ],
                'plugin' => [
                    'Sanitizer' => array(
                        'enable' => true,
                        'targets' => array('\\', '/', ':', '*', '?', '"', '<', '>', '|'), // target chars
                        'replace' => '_', // replace to this
                    ),
                ],
            ],
            'roots' => [
                [
                    'baseUrl' => '@web/',
                    'basePath' => '@webroot',
                    'path' => 'files/global',
                    'name' => 'Global',
                    'plugin' => [
                        'Sanitizer' => array(
                            'enable' => true,
                            'targets' => array('\\', '/', ':', '*', '?', '"', '<', '>', '|'), // target chars
                            'replace' => '_', // replace to this
                        ),
                    ],
                ],
                [
                    'class' => 'mihaildev\elfinder\volume\UserPath',
                    'path'  => 'files/user_{id}',
                    'name'  => 'My Documents'
                ],
            ],
            'watermark' => [
                'source'         => __DIR__.'/logo.png', // Path to Water mark image
                 'marginRight'    => 5,          // Margin right pixel
                 'marginBottom'   => 5,          // Margin bottom pixel
                 'quality'        => 95,         // JPEG image save quality
                 'transparency'   => 70,         // Water mark image transparency ( other than PNG )
                 'targetType'     => IMG_GIF|IMG_JPG|IMG_PNG|IMG_WBMP, // Target image formats ( bit-field )
                 'targetMinPixel' => 200         // Target image minimum pixel size
    ]
        ],
    ],
];