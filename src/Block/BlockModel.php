<?php namespace Anomaly\ButtonBlockExtension\Block;

use Anomaly\ButtonBlockExtension\Block\Contract\BlockInterface;
use Anomaly\Streams\Platform\Model\ButtonBlock\ButtonBlockBlocksEntryModel;

/**
 * Class BlockModel
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class BlockModel extends ButtonBlockBlocksEntryModel implements BlockInterface
{

    /**
     * Eager load these relations.
     *
     * @var array
     */
    protected $with = [
        'image',
    ];
}
