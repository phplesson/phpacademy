<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.06.18
 * Time: 7:41
 */

namespace Html\Dz\Factory;


use Html\Dz\Render\IRender;

class RenderFactory implements IRenderFactory
{
    /**
     * @var IRender[]
     */
    protected $objects = [];
    
    protected $config = [];
    
    public function __construct(array $config)
    {
        foreach($config as $key => $value) {
            try{
                $this->checkType($key);
                $this->config[$key] = $value;
            } catch (\RuntimeException $e) {
                
            }
        }
    }
    
    protected function createRender(int $type) {
        if (!array_key_exists($type, $this->config)) {
            throw new \RuntimeException('no configuration data for render type: ' . $type);
        }
        
        $className = $this->config[$type];
        
        if (!class_exists($className)) {
            throw new \RuntimeException('unknown class: ' . $className);            
        }
        
        $this->objects[$type] = new $className();
    }

    protected function checkType($type) {
        if (!in_array($type, ITag::POSSIBLE_TYPE)) {
            throw new \RuntimeException('unknown tagType: ' . $type);
        }
    }
    
    public function getRenderForMe(ITag $obj):IRender
    {
        $type = $obj->getTagType();
        
        $this->checkType($type);
        
        if (!array_key_exists($type, $this->objects)) {
            $this->createRender($type);
        }
        
        return $this->objects[$type];
    }
}