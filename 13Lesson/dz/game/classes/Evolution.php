<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 02.06.18
 * Time: 9:49
 */

namespace Game;


class Evolution extends Simple
{
    protected $defaultPlayerRate = 500;
    
    protected function updateWorld() {
        foreach($this->players as $player) {
            if ($this->getPlayerRate($player) < 0) {
                $this->removePlayer($player);
                continue;
            }
            
            if ($this->getPlayerRate($player) > 500) {
                $newPlayer = $player::getInstance();
                $this->updatePlayerRate($player, -500);
                $this->addPlayer($newPlayer);
            }
        }
    }
    protected function playCycle()
    {
        parent::playCycle();
        $this->updateWorld();
    }
    
    protected function getStat()
    {
        $resultCount = [];
        $resultRate = [];
        
        foreach ($this->players as $player) {
            $type = $player->getSerName();
            
            if (!array_key_exists($type, $resultCount)) {
                $resultCount[$type] = $resultRate[$type] = 0;
            }
            
            $resultCount[$type]++;
            $resultRate[$type] += $this->getPlayerRate($player);
        }
        
        $result = [];
        
        foreach ($resultCount as $key => $value) {
            $result[$key] = "$value({$resultRate[$key]})";
        }
        
        return ['algorithm', 'count(rate)', $result];
    }
}