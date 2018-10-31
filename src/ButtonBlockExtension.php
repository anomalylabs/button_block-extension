<?php namespace Anomaly\ButtonBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Anomaly\ButtonBlockExtension\Block\BlockModel;

/**
 * Class ButtonBlockExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ButtonBlockExtension extends BlockExtension
{

    /**
     * The extension category.
     *
     * @var string
     */
    protected $category = 'component';

    /**
     * This extension provides a button
     * block for the blocks module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.button';

    /**
     * The block view.
     *
     * @var string
     */
    protected $view = 'anomaly.extension.button_block::content';

    /**
     * The block wrapper.
     *
     * @var string
     */
    protected $wrapper = 'anomaly.extension.button_block::wrapper';

    /**
     * The block model.
     *
     * @var string
     */
    protected $model = BlockModel::class;

}
