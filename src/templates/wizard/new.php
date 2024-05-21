<?php

switch (Wizard::get('current_step')) {
    case 'add_domain':
        include 'add_domain.php';
        break;
    case 'domain_name':
        include 'domain_name.php';
        break;
    case 'vps_plan':
        include 'vps_plan.php';
        break;
    case 'email_security':
        include 'email_security.php';
        break;
    case 'results':
        include 'results.php';
        break;
}

include 'reset.php';
