<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.06.18
 * Time: 5:36
 */

return [
    'renderFactory' => new \Html\Dz\Factory\RenderFactory([
        \Html\Dz\Factory\ITag::TYPE_SIMPLE => \Html\Dz\Render\RenderSimple::class,
        \Html\Dz\Factory\ITag::TYPE_COMPLICATED => \Html\Dz\Render\RenderComplicate::class,
    ]),
    'tagFactory' => new \Html\Dz\Factory\TagFactory(),
];