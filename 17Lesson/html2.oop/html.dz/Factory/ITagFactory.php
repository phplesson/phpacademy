<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.06.18
 * Time: 5:11
 */

namespace Html\Dz\Factory;


use Html\Dz\Tag\ITag;

/**
 * Interface ITagFactory
 * 
 * 
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
 * @package Html\Dz\Factory
 */
interface ITagFactory
{
    public function getTag(string $tagName, array $attr):ITag;
    public function __call($name, $arguments):ITag;
}
//$obj->input(['id'=>'base-input'], 12, 'aaa');

//$obj->__call('input',[['id'=>'base-input']]

//public function __call($name, $arguments):Itag{return $this->getTag($name, $arguments[0]);}