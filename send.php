<?php

    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email']
    $message = $_POST['message'];

    $name = htmlspecialchars($name);
    $tel = htmlspecialchars($tel);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);

    $name = urldecode($name);
    $tel = urldecode($tel);
    $email = urldecode($email);
    $message = urldecode($message);

    $name = trim($name);
    $tel = trim($tel);
    $email = trim($email);
    $message = trim($message);


    if(mail('crisple.ec@gmail.com',
            'Nuevo mensaje'
            'Nombre: '$name."\n".
            'Tel: '.$tel."\n".
            'Email: '.$email."\n".
            'message: '.$message."\n". 
            'From: crisple.eu \r\n'
            )
    ){
        echo ('OK')
    }
    else{
        echo('Error..')
    }
    
?>