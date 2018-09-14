<?php

return [
    'size'          => [
        'required' => true,
        'type'     => 'anomaly.field_type.select',
        'config'   => [
            'default_value' => 'medium',
            'options'       => [
                'small'  => 'anomaly.extension.button_block::configuration.size.option.small',
                'medium' => 'anomaly.extension.button_block::configuration.size.option.medium',
                'large'  => 'anomaly.extension.button_block::configuration.size.option.large',
            ],
        ],
    ],
    'theme'         => [
        'required' => true,
        'type'     => 'anomaly.field_type.select',
        'config'   => [
            'default_value' => 'flat',
            'options'       => [
                'flat'    => 'anomaly.extension.button_block::configuration.theme.option.flat',
                'outline' => 'anomaly.extension.button_block::configuration.theme.option.outline',
            ],
        ],
    ],
    'border_radius' => [
        'required' => true,
        'type'     => 'anomaly.field_type.select',
        'config'   => [
            'default_value' => 'default',
            'options'       => [
                'square'  => 'anomaly.extension.button_block::configuration.border_radius.option.square',
                'default' => 'anomaly.extension.button_block::configuration.border_radius.option.default',
                'rounded' => 'anomaly.extension.button_block::configuration.border_radius.option.rounded',
            ],
        ],
    ],
    'color'         => [
        'required' => true,
        'type'     => 'anomaly.field_type.select',
        'config'   => [
            'default_value' => 'default',
            'options'       => [
                'anomaly.extension.button_block::configuration.color.group.emphasis' => [
                    'secondary' => 'anomaly.extension.button_block::configuration.color.option.secondary',
                    'default'   => 'anomaly.extension.button_block::configuration.color.option.default',
                    'primary'   => 'anomaly.extension.button_block::configuration.color.option.primary',
                    'positive'  => 'anomaly.extension.button_block::configuration.color.option.positive',
                    'negative'  => 'anomaly.extension.button_block::configuration.color.option.negative',
                ],
                'anomaly.extension.button_block::configuration.color.group.colored'  => [
                    'red'    => 'anomaly.extension.button_block::configuration.color.option.red',
                    'orange' => 'anomaly.extension.button_block::configuration.color.option.orange',
                    'yellow' => 'anomaly.extension.button_block::configuration.color.option.yellow',
                    'green'  => 'anomaly.extension.button_block::configuration.color.option.green',
                    'blue'   => 'anomaly.extension.button_block::configuration.color.option.blue',
                    'purple' => 'anomaly.extension.button_block::configuration.color.option.purple',
                    'pink'   => 'anomaly.extension.button_block::configuration.color.option.pink',
                    'gray'   => 'anomaly.extension.button_block::configuration.color.option.gray',
                    'black'  => 'anomaly.extension.button_block::configuration.color.option.black',
                ],
                'anomaly.extension.button_block::configuration.color.group.social'   => [
                    'facebook'    => 'anomaly.extension.button_block::configuration.color.option.facebook',
                    'twitter'     => 'anomaly.extension.button_block::configuration.color.option.twitter',
                    'google_plus' => 'anomaly.extension.button_block::configuration.color.option.google_plus',
                    'linkedin'    => 'anomaly.extension.button_block::configuration.color.option.linkedin',
                    'instagram'   => 'anomaly.extension.button_block::configuration.color.option.instagram',
                    'youtube'     => 'anomaly.extension.button_block::configuration.color.option.youtube',
                    'pinterest'   => 'anomaly.extension.button_block::configuration.color.option.pinterest',
                    'yelp'        => 'anomaly.extension.button_block::configuration.color.option.yelp',
                ],
            ],
        ],
    ],
];
