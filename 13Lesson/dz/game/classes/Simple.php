<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 02.06.18
 * Time: 8:19
 */

namespace Game;


use Game\Algorithm\IAlgorithm;

class Simple
{
    const WHIST = 1;
    const PASS = 0;
    /**
     * @var IAlgorithm[]
     */
    protected $players = [];
    protected $playersRates = [];
    
    protected $defaultPlayerRate = 0;
    
    public function __construct($config)
    {
        foreach($config as $className) {
            if (is_a($className, IAlgorithm::class, true)) {
                /* @var $className IAlgorithm */
                $obj = $className::getInstance();
                
                $this->addPlayer($obj);
                
            }
        }
    }
    
    protected static function getPlayerIdent(IAlgorithm $obj) {
        return $obj->getName();
    }

    protected function addPlayer(IAlgorithm $obj) {
        $this->players[static::getPlayerIdent($obj)] = $obj;
        $this->playersRates[static::getPlayerIdent($obj)] = $this->defaultPlayerRate;
    }

    protected function removePlayer(IAlgorithm $obj) {
        unset($this->players[static::getPlayerIdent($obj)]);
        unset($this->playersRates[static::getPlayerIdent($obj)]);
    }

    protected function updatePlayerRate(IAlgorithm $obj, $addRate) {
        $this->playersRates[$this->getPlayerIdent($obj)] += $addRate;
    }
    
    protected function getPlayerRate(IAlgorithm $obj) {
        return $this->playersRates[static::getPlayerIdent($obj)];
    }
    
    protected function playRound($param1, $param2) {
        if ($param1 == self::PASS && $param2 == self::WHIST) {
            return [-50, 100];
        } else if ($param1 == self::WHIST && $param2 == self::PASS) {
            return [100, -50];
        } else if ($param1 == $param2 && $param1 == self::WHIST) {
            return [-50, -50];
        } else if ($param1 == $param2 && $param1 == self::PASS) {
            return [50, 50];
        } else {
            return [0, 0];
        }
        
    }
    
    protected function playPair(IAlgorithm $player1, IAlgorithm $player2) {
        $param1 = $player1->playGame($player2);
        $param2 = $player2->playGame($player1);

        list($rate1, $rate2) = $this->playRound($param1, $param2);

        $player1->saveResult($player2, $param2, $rate1);
        $player2->saveResult($player1, $param1, $rate2);
        
        $this->updatePlayerRate($player1, $rate1);
        $this->updatePlayerRate($player2, $rate2);
    }
    
    protected function playCycle() {
        foreach($this->players as $player1) {
            foreach($this->players as $player2) {
                if ($player1->getName() == $player2->getName()) {
                    continue;
                }
                $this->playPair($player1, $player2);
            }
        }
    }
    
    public function run($cycleLimit = 1, $showCurrent = false) {
        while($cycleLimit > 0) {
            $this->playCycle();
            
            if ($showCurrent) {
                echo $this;
            }
            
            $cycleLimit--;
        }
    }
    
    protected function getStat() {
        $result = $this->playersRates;
        return ['playerId', 'rate', $result];
    }
    
    public function __toString()
    {
        list($key1, $key2, $stat) = $this->getStat();
        ob_start();
        
        echo str_repeat('=', 85) . PHP_EOL;
        
        echo sprintf('||%60s|%20s||', $key1, $key2) . PHP_EOL;
        echo sprintf('||%60s|%20s||', '', '') . PHP_EOL;
        
        foreach($stat as $key => $value) {
            echo '||' . str_repeat('-', 60) . '|' . str_repeat('-', 20) . '||' . PHP_EOL;
            echo sprintf('||%60s|%20s||', $key, $value) . PHP_EOL;            
        }
        
        
        echo str_repeat('=', 85) . PHP_EOL;
        
        return ob_get_clean();
    }
}