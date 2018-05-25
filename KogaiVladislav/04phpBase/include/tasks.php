<?php
$currentTask = basename($_SERVER['PHP_SELF']);
?>
<div class="list-group">
    <a href="../04phpBase/Tamplates/1.php" class="list-group-item<?= $currentTask == '1.php' ? ' active' : '' ?>">
        <h3 class="list-group-item-heading">
            <small>1.php</small>
        </h3>
        <p class="list-group-item-text">
            Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова,
            которые есть и в первом и во втором поле ввода. Реализацию это логики необходимо поместить в функцию
            getCommonWords($a, $b), которая будет возвращать массив с общими словами.
        </p>
    </a>
    <a href="../04phpBase/Tamplates/2.php" class="list-group-item<?= $currentTask == '2.php' ? ' active' : '' ?>">
        <h3 class="list-group-item-heading">
            <small>2.php</small>
        </h3>
        <p class="list-group-item-text">
            Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
            Реализовать с помощью функции.
        </p>
    </a>
    <a href="../04phpBase/Tamplates/3.php" class="list-group-item<?= $currentTask == '3.php' ? ' active' : '' ?>">
        <h3 class="list-group-item-heading">
            <small>3.php</small>
        </h3>
        <p class="list-group-item-text">
            Есть текстовый файл. Необходимо удалить из него все слова, длина которых превышает N символов. Значение N
            задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.
        </p>
    </a>
    <a href="../04phpBase/Tamplates/4.php" class="list-group-item<?= $currentTask == '4.php' ? ' active' : '' ?>">
        <h3 class="list-group-item-heading">
            <small>4.php</small>
        </h3>
        <p class="list-group-item-text">
            Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр
            функции.
        </p>
    </a>
    <a href="../04phpBase/Tamplates/5.php" class="list-group-item<?= $currentTask == '5.php' ? ' active' : '' ?>">
        <h3 class="list-group-item-heading">
            <small>5.php</small>
        </h3>
        <p class="list-group-item-text">
            Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
            Директория и искомое слово задаются как параметры функции.
        </p>
    </a>
    <a href="../04phpBase/Tamplates/6.php" class="list-group-item<?= $currentTask == '6.php' ? ' active' : '' ?>">
        <h3 class="list-group-item-heading">
            <small>6.php</small>
        </h3>
        <p class="list-group-item-text">
            Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны
            помещаться в папку gallery и выводиться на странице в виде таблицы.
        </p>
    </a>
    <a href="../04phpBase/Tamplates/7.php" class="list-group-item<?= $currentTask == '7.php' ? ' active' : '' ?>">
        <h3 class="list-group-item-heading">
            <small>7.php</small>
        </h3>
        <p class="list-group-item-text">
            Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. Все
            добавленные комментарии выводятся над текстовым полем.
        </p>
    </a>
    <a href="../04phpBase/Tamplates/8.php" class="list-group-item<?= $currentTask == '8.php' ? ' active' : '' ?>">
        <h3 class="list-group-item-heading">
            <small>8.php</small>
        </h3>
        <p class="list-group-item-text">
            Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. Все
            добавленные комментарии выводятся над текстовым полем. Реализовать проверку на наличие в тексте запрещенных
            слов, матов. При наличии таких слов - выводить сообщение "Некорректный комментарий". Реализовать удаление из
            комментария всех тегов, кроме тега &lt;b&gt;.
        </p>
    </a>
    <a href="../04phpBase/Tamplates/9.php" class="list-group-item<?= $currentTask == '9.php' ? ' active' : '' ?>">
        <h3 class="list-group-item-heading">
            <small>9.php</small>
        </h3>
        <p class="list-group-item-text">
            Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста
            реализовать с помощью формы.
        </p>
    </a>
    <a href="../04phpBase/Tamplates/10.php" class="list-group-item<?= $currentTask == '10.php' ? ' active' : '' ?>">
        <h3 class="list-group-item-heading">
            <small>10.php</small>
        </h3>
        <p class="list-group-item-text">
            Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст
            должен вводиться с формы.
        </p>
    </a>
    <a href="../04phpBase/Tamplates/11.php" class="list-group-item<?= $currentTask == '11.php' ? ' active' : '' ?>">
        <h3 class="list-group-item-heading">
            <small>11.php</small>
        </h3>
        <p class="list-group-item-text">
            Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что каждое
            новое предложение начиняется с большой буквы.<br>
            Пример:<br><br>
            Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не
            годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';<br><br>
            Строка, возвращенная функцией : 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь,
            все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался.А там хоть трава не расти.';
        </p>
    </a>
    <a href="../04phpBase/Tamplates/12.php" class="list-group-item<?= $currentTask == '12.php' ? ' active' : '' ?>">
        <h3 class="list-group-item-heading">
            <small>12.php</small>
        </h3>
        <p class="list-group-item-text">
            Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что
            предложения идут в обратном порядке.<br>
            Пример:<br><br>
            Входная строка: 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не
            годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';<br><br>
            Строка, возвращенная функцией : 'А там хоть трава не расти. А ларчик просто открывался. А король-то —
            голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.'
        </p>
    </a>
    <a href="../04phpBase/Tamplates/13.php" class="list-group-item<?= $currentTask == '13.php' ? ' active' : '' ?>">
        <h3 class="list-group-item-heading">
            <small>13.php</small>
        </h3>
        <p class="list-group-item-text">
            Есть строка $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня
            черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня
            черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';<br>
            <br>
            Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите в виде списка в порядке
            уменьшения количества:<br><br>

            Пример вывода:<br>
            яблоко – 12<br>
            черешня – 8<br>
            груша – 5<br>
            слива - 3<br>
        </p>
    </a>
</div>