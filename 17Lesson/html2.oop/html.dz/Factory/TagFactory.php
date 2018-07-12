<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.06.18
 * Time: 8:07
 */

namespace Html\Dz\Factory;


use Html\Dz\Tag\BaseTag;
use Html\Dz\Tag\ITag;

/**
 * @method ITag input(array $attr);
 * @method ITag form(array $attr);
 * @method ITag div(array $attr);
 * @method ITag p(array $attr);
 * @method ITag ul(array $attr);
 * @method ITag li(array $attr);
 * @method ITag br(array $attr);
 * @method ITag hr(array $attr);
 * @method ITag h1(array $attr);
 * @method ITag h2(array $attr);
 * @method ITag h3(array $attr);
 *
 */
class TagFactory implements ITagFactory
{
    /**
     * @var ITag[]
     */
    protected $prototypes = [];

    /**
     * @var RenderFactory
     */
    protected $renderFactory;
    
    public function setRenderFactory(RenderFactory $factory) {
        $this->renderFactory = $factory;
    }

    protected function makeTag($tagName) {
        $tag = new BaseTag([
            'tagName' => $tagName,
            'tagType' => \Html\Dz\Factory\ITag::TYPE_SIMPLE,
        ]);
        
        $tag->setRender($this->renderFactory->getRenderForMe($tag));

        $this->prototypes[$tagName] = $tag;
    }

    public function getTag(string $tagName, array $attr):ITag
    {
        if (!array_key_exists($tagName, $this->prototypes)) {
            $this->makeTag($tagName);
        }
        
        $prototype = $this->prototypes[$tagName];
        
        $obj = clone $prototype;

        $result = ($obj instanceof ITag);
        
        $this->applyAttributes($obj, $attr);
        
        return $obj;
    }
    
    protected function applyAttributes(ITag $tag, array $attributes) {
        foreach ($attributes as $name => $value) {
            $tag->addAttribute($name, $value);
        }
    }

    public function __call($name, $arguments):ITag
    {
        if (in_array($name, ['br', 'input', 'hr', 'h1', 'h2', 'h3'])) {
            return $this->getTag($name, $arguments[0]);
        }
    }
}