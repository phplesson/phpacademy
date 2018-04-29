<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 19:41
 *
 *
 * <p>27. Создать генератор случайных таблиц.
 * Есть переменные: $row - кол-во строк в таблице,
 * $cols - кол-во столбцов в таблице.
 * Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
 * Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
 * в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
 * В каждой ячейке должно находиться случайное число. <br><br>

Пример результата:<br>

<table>
 * <tr>
 * <td style='background-color:blue'>
 *  2033
 * </td>
 * <td style='background-color:brown'>
 *  11696
 * </td>
 * <td style='background-color:green'>
 *  712
 * </td>
 * <td style='background-color:yellow'>
 *  32583</td>
 * <td style='background-color:red'>
 *  157
 * </td>
 * </tr>
 * <tr>
 * <td style='background-color:gray'>
 *  25694
 * </td>
 * <td style='background-color:red'>
 *  19724
 * </td>
 * <td style='background-color:brown'>
 *  18487
 * </td>
 * <td style='background-color:brown'>
 *  8462
 * </td>
 * <td style='background-color:red'>
 *  4412
 * </td>
 * </tr>
 * <tr>
 * <td style='background-color:gray'>
 *  4673
 * </td>
 * <td style='background-color:gray'>
 *  14450
 * </td>
 * <td style='background-color:maroon'>
 *  16748
 * </td>
 * <td style='background-color:gray'>
 *  3505
 * </td>
 * <td style='background-color:maroon'>
 * 5299
 * </td>
 * </tr>
 * <tr>
 * <td style='background-color:red'>
 * 16873
 * </td>
 * <td style='background-color:gray'>
 * 21370
 * </td>
 * <td style='background-color:green'>
 * 22482
 * </td>
 * <td style='background-color:red'>
 * 28576</td>
 * <td style='background-color:blue'>
 * 26060
 * </td>
 * </tr>
 * <tr>
 * <td style='background-color:yellow'>
 * 28955
 * </td>
 * <td style='background-color:gray'>8804</td>
 * <td style='background-color:gray'>26825</td>
 * <td style='background-color:red'>31471</td>
 * <td style='background-color:blue'>
 *  22283
 * </td>
 * </tr>
 * </table>
</p>
 */

//можно задать любые значение строчек и столбцев!
$rows = 2;
$cols = 2;

$colors = ['red','yellow','blue','gray','maroon','brown','green'];

$table = '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        $table .= '<td style="background-color:'.$colors[rand(0,6)].';">'. rand(0,100) .'</td>';
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table;