<?php
    header('WWW-Authenticate: Basic');
    $name = $_SERVER['PHP_AUTH_USER'];
    $pass = $_SERVER['PHP_AUTH_PW'];
    if ($name == 'WJCS' && $pass == 'wjcs123456') {
        echo '用户认证成功，正在为您转跳';
        header('Location: wjcs.html');
    } else {
        echo '用户认证失败，请刷新页面重试';
    }
?>