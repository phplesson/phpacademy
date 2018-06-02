<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 11:26
 */

return [
    'TYPE_IDENT' => 'Real',
    'value' => 0,
    'init' => function($link, $value) {
        if ($link['checkParams']($link, $value)) {
            $result = $link;
            $result['value'] = $value;
            return $result;
        }
        
        return null;
    },
    'checkParams' => function($link) {
        trigger_error('this function should be implemented', E_USER_ERROR);
        return null;    
    },
    'check' => function($link, $a) {
        return is_int($a);
    },
    'checkType' => function($link, $a) {
        return !empty($link['TYPE_IDENT']) && !empty($a['TYPE_IDENT']) && ($link['TYPE_IDENT'] === $a['TYPE_IDENT']);
    },
    'getZero' => function($link) {
        return $link['init'](0);
    },
    'getForResult' => function($link, $update) {
        if ($update) {
            return $link;
        }
        
        $result = $link;
        
        return $result;
    },
    'add' => function($link, $b, $update = true) {
        $result = $link['getForResult']($link, $update);
        
        if (!$link['checkType']($link, $b)) {
            trigger_error('can not add ' . print_r($b, true) . ' value', E_USER_ERROR);
        }
        
        $result['value'] += $b['value'];
        
        return $result;
    },
    'sub' => function($link, $b, $update = true) {
        $result = $link['getForResult']($link, $update);

        if (!$link['checkType']($link, $b)) {
            trigger_error('can not sub ' . print_r($b, true) . ' value', E_USER_ERROR);
        }
        
        $result['value'] -= $b['value'];

        return $result;
    },
    'getFromStr' => function($link, $str) {
        if (preg_match('/^[+-]?\\d+$/', $str, $data)) {
            return $link['init']($link, (int)$str);
        } else {
            return null;
        }
    },
    '__toString' => function($link) {
        return (string) $link['value'];
    },
];