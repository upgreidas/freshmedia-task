<?php

session_start();

require_once 'config.php';
require_once 'helpers.php';
require_once 'Wizard.php';
require_once 'Router.php';
require_once 'ErrorBag.php';

Router::process();

include 'templates/layout.php';

ErrorBag::flush();
