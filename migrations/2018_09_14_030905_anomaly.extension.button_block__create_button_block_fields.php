<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionButtonBlockCreateButtonBlockFields
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionButtonBlockCreateButtonBlockFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'text'      => 'anomaly.field_type.text',
        'url'       => 'anomaly.field_type.url',
        'target'    => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'default_value' => '_self',
                'options'       => [
                    '_self'  => 'anomaly.extension.button_block::field.target.option.self',
                    '_blank' => 'anomaly.extension.button_block::field.target.option.blank',
                ],
            ],
        ],
        'icon'      => 'anomaly.field_type.icon',
        'image'     => 'anomaly.field_type.file',
        'placement' => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'default_value' => 'left',
                'options'       => [
                    'top'    => 'anomaly.extension.button_block::field.placement.option.top',
                    'right'  => 'anomaly.extension.button_block::field.placement.option.right',
                    'bottom' => 'anomaly.extension.button_block::field.placement.option.bottom',
                    'left'   => 'anomaly.extension.button_block::field.placement.option.left',
                ],
            ],
        ],
        'width'     => 'anomaly.field_type.text',
        'align'     => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'default_value' => 'left',
                'options'       => [
                    'left'    => 'anomaly.extension.button_block::field.align.option.left',
                    'right'   => 'anomaly.extension.button_block::field.align.option.right',
                    'center'  => 'anomaly.extension.button_block::field.align.option.center',
                    'justify' => 'anomaly.extension.button_block::field.align.option.justify',
                    'inline'  => 'anomaly.extension.button_block::field.align.option.inline',
                ],
            ],
        ],
        'classes'   => 'anomaly.field_type.text',
        'title'     => 'anomaly.field_type.text',
        'onclick'   => 'anomaly.field_type.text',
        'rel'       => 'anomaly.field_type.text',
    ];

}
