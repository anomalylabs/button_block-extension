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
            'default_value' => 'default',
            'options'       => [
                'flat'    => 'anomaly.extension.button_block::configuration.theme.option.flat',
                'default' => 'anomaly.extension.button_block::configuration.theme.option.default',
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
                'secondary' => 'anomaly.extension.button_block::configuration.color.option.secondary',
                'default'   => 'anomaly.extension.button_block::configuration.color.option.default',
                'primary'   => 'anomaly.extension.button_block::configuration.color.option.primary',
            ],
        ],
    ],
];
