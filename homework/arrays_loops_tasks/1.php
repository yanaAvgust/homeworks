<?php
//Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
// С помощью цикла foreach выведите эти слова в столбик.</p>

$languages = array('html', 'css', 'php', 'js', 'jq');

foreach ($languages as $language) {
    echo $language. '<br>';
}