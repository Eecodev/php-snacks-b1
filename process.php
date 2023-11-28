<?php
// snack 2
    $contact_details = [
        [
            'name' => 'Mahdi',
            'email' => 'mahdijk7@hotmail.it',
            'age' => '29',
        ]
    ];
    
        if(isset($_GET['name']) && strlen($_GET['name']) > 3 && filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) && (is_numeric($_GET['age']))){
            echo 'Access enabled';   
        } else {
            echo 'Access denied';
        };

?>