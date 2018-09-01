<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.06.18
 * Time: 5:50
 */

namespace Html\Dz\Render;


trait TagRenderable
{
    /**
     * @var IRender
     */
    protected $render;

    public function setRender(IRender $obj) {
        $this->render = $obj;
    }

    public function __toString()
    {
        /* @var ITag|TagRenderable $this */
        
        return $this->render->renderObject($this);
    }
}