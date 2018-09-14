<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyExtensionButtonBlockCreateBlocksStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'blocks',
        'translatable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'text',
        'url',
        'target'    => [
            'required' => true,
        ],
        'icon',
        'image',
        'placement' => [
            'required' => true,
        ],
        'width',
        'align'     => [
            'required' => true,
        ],
        'classes',
        'title',
        'onclick',
        'rel',
    ];

}
