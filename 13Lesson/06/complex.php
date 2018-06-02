<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 11:26
 */
return [
    'TYPE_IDENT' => 'Complex',
    're' => 0,
    'im' => 0,
    'init' => function(&$link, $value) {
        if ($link['checkParams']($link, $value)) {
            $result = $link;
            $result['re'] = $value['re'];
            $result['im'] = $value['im'];
            return $result;
        }

        return null;
    },
    'checkParams' => function(&$link) {
        trigger_error('this function should be implemented', E_USER_ERROR);
        return null;
    },
    'check' => function(&$link, $a) {
        return is_array($a)
            && (count($a) === 2)
            && (isset($a['re']))
            && (isset($a['im']))
            && is_int($a['re'])
            && is_int($a['im']);
    },
    'checkType' => function(&$link, $a) {
        return !empty($link['TYPE_IDENT']) && !empty($a['TYPE_IDENT']) && ($link['TYPE_IDENT'] === $a['TYPE_IDENT']);
    },
    'getZero' => function(&$link) {
        return $link['init']($link, ['re' => 0, 'im' => 0]);
    },
    'getForResult' => function&(&$link, $update) {
        if ($update) {
            return $link;
        }

        $result = $link;

        return $result;
    },
    'add' => function(&$link, $b, $update = true) {
        $result = &$link['getForResult']($link, $update);

        if (!$link['checkType']($link, $b)) {
            trigger_error('can not add ' . print_r($b, true) . ' value', E_USER_ERROR);
        }

        $result['re'] += $b['re'];
        $result['im'] += $b['im'];

        return $result;
    },
    'sub' => function(&$link, $b, $update = true) {
        $result = &$link['getForResult']($link, $update);

        if (!$link['checkType']($link, $b)) {
            trigger_error('can not add ' . print_r($b, true) . ' value', E_USER_ERROR);
        }

        $result['re'] -= $b['re'];
        $result['im'] -= $b['im'];

        return $result;
    },
    'getFromStr' => function(&$link, $str) {
        $data = [];
        if (preg_match_all('/^([+-]?\\d+)i([+-]?\\d+)$/', $str, $data)) {
            return $link['init']($link, ['re' => (int)$data[1][0], 'im' => (int)$data[2][0]]);
        } else {
            return null;
        }
    },
    '__toString' => function(&$link) {

        $str = $link['re'];

        $str .= ($link['im'] >= 0)? '+' : '-';

        $str .= 'i' . abs($link['im']);

        return $str;
    },
];