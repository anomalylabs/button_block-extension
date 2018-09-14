<?php

return [
    'text'      => [
        'name'         => 'Text',
        'instructions' => 'Specify the button text.',
    ],
    'url'       => [
        'name'         => 'URL',
        'placeholder'  => 'http://',
        'instructions' => 'Specify the button URL.',
    ],
    'icon'      => [
        'name'         => 'Icon',
        'instructions' => 'Specify the button\'s icon.',
    ],
    'image'     => [
        'name'         => 'Image',
        'instructions' => 'Specify an icon image.',
        'warning'      => 'This will override the icon selected above.',
    ],
    'width'     => [
        'name'         => 'Width',
        'placeholder'  => '300px',
        'instructions' => 'Specify the button\'s width. Leave blank to resize to content.',
    ],
    'classes'   => [
        'name'         => 'Classes',
        'instructions' => 'Specify additional classes to be added to the button.',
    ],
    'title'     => [
        'name'         => 'Title',
        'instructions' => 'Specify the title attribute.',
    ],
    'onclick'   => [
        'name'         => 'Onclick',
        'instructions' => 'Specify Javascript to run when the button is clicked. Ideal for tracking.',
    ],
    'rel'       => [
        'name'         => 'Rel',
        'instructions' => 'Specify the rel attribute.',
    ],
    'target'    => [
        'name'         => 'Target',
        'instructions' => 'How does this link open when clicked?',
        'option'       => [
            'self'  => 'Open in the current window.',
            'blank' => 'Open in a new window.',
        ],
    ],
    'align'     => [
        'name'         => 'Align',
        'instructions' => 'Specify the button alignment.',
        'option'       => [
            'left'    => 'Left',
            'right'   => 'Right',
            'center'  => 'Center',
            'justify' => 'Justify',
            'inline'  => 'Inline',
        ],
    ],
    'placement' => [
        'name'         => 'Placement',
        'instructions' => 'Specify the icon\'s alignment.',
        'option'       => [
            'top'    => 'Top',
            'right'  => 'Right',
            'bottom' => 'Bottom',
            'left'   => 'Left',
        ],
    ],
];
