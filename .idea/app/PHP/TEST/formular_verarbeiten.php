<?php
    switch($_GET['zustand']) {
        case 1:
            echo 'Geht mir genau so, ein super Tag!';
            break;

        case 2:
            echo 'Toll, das freut mich für dich :)';
            break;

        case 3:
            echo 'Besser als sich schlecht zu fühlen ;)';
            break;

        case 4:
            echo 'Kopf hoch, das wird schon wieder.';
            break;

        case 5:
            echo 'Denk dran, nach jedem Tief kommt ein Hoch.';
            break;

        default:
            echo 'Du hast vergessen deinen Zustand auszuwählen.';
    }
?>   
