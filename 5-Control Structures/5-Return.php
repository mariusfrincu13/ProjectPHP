<?php

    function checkUserRoles($userRoles){

        if(empty($userRoles)){
            echo "Roles cannot be empty <br>";
            return;
        }

        switch ($userRoles) {
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
    }

    checkUserRoles("admin");
    checkUserRoles("editor");
    checkUserRoles("");
    checkUserRoles("user");
    checkUserRoles("nothing");

?>