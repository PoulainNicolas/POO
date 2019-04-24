<?php

    require 'form.php';

    $form= new form(array());

    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();
    echo $form->select();
    echo $form->textarea();
    echo $form->radio();
    

?>