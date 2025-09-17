<?php
require_once 'ClassAutoLoad.php';

$mailCnt = [
    'name_from' => 'Isaac Munene',
    'mail_from' => 'isaac.munene@strathmore.edu',
    'name_to' => 'Kenneth Thigiti',
    'mail_to' => 'isaac.munene@strathmore.edu',
    'subject' => 'Musty Flick Recrutiment',
    'body' => 'Welcome to <b>Musty Flick</b>! Today we are excited to have you on board. We hope you have a great experience with us.'
];

$ObjSendMail->Send_Mail($conf, $mailCnt);