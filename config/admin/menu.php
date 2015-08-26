<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 12.03.2015
 */
return [

    'other' =>
    [
        'items' =>
        [
            [
                "label"     => "Отзывы",
                "img"       => ['\skeeks\cms\reviews2\assets\Reviews2Asset', 'icons/reviews.jpg'],

                'items' =>
                [
                    [
                        "label" => "Отзывы",
                        "url"   => ["reviews2/admin-message"],
                        "img"       => ['\skeeks\cms\reviews2\assets\Reviews2Asset', 'icons/reviews.jpg'],
                    ],

                    [
                        "label" => "Настройки",
                        "url"   => ["cms/admin-settings", "component" => 'skeeks\cms\reviews2\components\Reviews2Component'],
                        "img"       => ['\skeeks\cms\modules\admin\assets\AdminAsset', 'images/icons/settings.png'],
                    ],

                ]
            ],
        ]
    ]
];