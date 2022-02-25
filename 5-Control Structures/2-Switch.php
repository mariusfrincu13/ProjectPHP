<?php
    // switch
    $userRole = 'admin'; // admin, editor, user

    switch ($userRole) {
        case 'admin':
            echo 'You can do anything<br>';
            break;
        case 'editor';
            echo 'You can edit content<br>';
            break;
        case 'user':
            echo 'You can view posts and comment<br>';
            break;
        default:
            echo 'Unknown role<br>';
    }

?>