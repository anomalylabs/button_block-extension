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
    'button_color'  => 'anomaly.field_type.colorpicker',
    'text_color'    => 'anomaly.field_type.colorpicker',
];
