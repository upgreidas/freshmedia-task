<?php

switch (Wizard::get('current_step')) {
    case 'storage_size':
        include 'storage_size.php';
        break;
    case 'results':
        include 'results.php';
        break;
}

include 'reset.php';
