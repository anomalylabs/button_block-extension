<?php

return [
    'button' => [
        'stacked' => true,
        'tabs'    => [
            'button'     => [
                'title'  => 'anomaly.extension.button_block::tab.button',
                'fields' => [
                    'entry_text',
                    'entry_url',
                    'entry_target',
                ],
            ],
            'icon'       => [
                'title'  => 'anomaly.extension.button_block::tab.icon',
                'fields' => [
                    'entry_icon',
                    'entry_image',
                    'entry_placement',
                ],
            ],
            'design'     => [
                'title'  => 'anomaly.extension.button_block::tab.design',
                'fields' => [
                    'configuration_size',
                    'configuration_theme',
                    'configuration_color',
                    'configuration_border_radius',
                    'entry_align',
                    'entry_width',
                ],
            ],
            'attributes' => [
                'title'  => 'anomaly.extension.button_block::tab.attributes',
                'fields' => [
                    'entry_classes',
                    'entry_title',
                    'entry_onclick',
                    'entry_rel',
                ],
            ],
        ],
    ],
];
