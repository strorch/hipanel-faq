<?php
$this->title = 'Создание аккаунта';
?>

<p>Для начала работы с сервером необходимо создать аккаунт. Для этого, находясь в панели управления <?= $options['host'] ?>,
    необходимо развернуть список
    «Хостинг панель» и выбрать пункт «Аккаунты», после чего в открывшемся окне нажать кнопку «Создать аккаунт».</p>
<img style="display:inline-block; margin:10px 0" src="<?= $options['imgDir'] ?>/faq/panelAHnames/qs1_ru.png" border="0">

<p>В появившемся окне заполните все необходимые формы и нажмите кнопку «Сохранить» в панели действий сверху.</p>
<img style="display:inline-block; margin:0 0 10px 0" src="<?= $options['imgDir'] ?>/faq/panelAHnames/qs2_ru.png" border="0">

<p>Сразу после создания аккаунта появится уведомление об успешном завершении операции в всплывающем окне,
    и на сервере в папке /home создастся домашний каталог аккаунта.
    Для входа через FTP и SSH необходимо использовать в качестве логина имя соответствующего аккаунта.
    По умолчанию, во избежание взлома аккаунта путем подбора пароля, доступ к нему запрещен со всех IP.
    После создания аккаунта необходимо назначить IP, с которых будет разрешен доступ к аккаунту.
    Для этого отметьте чекбоксом нужный аккаунт и нажмите кнопку «Разрешенные IP» из панели действий.</p>
<img style="display:inline-block; margin:0 0 10px 0; display:block" src="<?= $options['imgDir'] ?>/faq/panelAHnames/qs3_ru.png"
     border="0">

<p>В открывшемся окне в строке «Для входа на сервера (через SSH или FTP)», руководствуясь примерами,
    описанными в следующей строке, необходимо указать IP, с которых будет разрешен вход в аккаунт,
    после чего нажать кнопку «Сохранить» в панели действий сверху.</p>
<img style="display:inline-block; margin:0 0 10px 0; display:block" src="<?= $options['imgDir'] ?>/faq/panelAHnames/qs4_ru.png"
     border="0">

