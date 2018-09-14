<?php

return [
    'button_color'  => [
        'name'         => 'Button Color',
        'placeholder'  => '#000000',
        'instructions' => 'Specify the background color of the button.',
    ],
    'text_color'    => [
        'name'         => 'Text Color',
        'placeholder'  => '#ffffff',
        'instructions' => 'Specify the text color of the button.',
    ],
    'size'          => [
        'name'         => 'Size',
        'instructions' => 'Specify the button size.',
        'option'       => [
            'small'  => 'Small',
            'medium' => 'Medium',
            'large'  => 'Large',
        ],
    ],
    'theme'         => [
        'name'         => 'Theme',
        'instructions' => 'Specify the button theme.',
        'option'       => [
            'flat'    => 'Flat',
            'default' => 'Default',
            'outline' => 'Outline',
        ],
    ],
    'border_radius' => [
        'name'   => 'Border Radius',
        'option' => [
            'square'  => 'Square',
            'small'   => 'Small',
            'default' => 'Default',
            'medium'  => 'Medium',
            'large'   => 'Large',
            'rounded' => 'Rounded',
        ],
    ],
];
