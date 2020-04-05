<?php

    namespace KI\XAUTH\Controllers;

    use BackendMenu;
    use Backend\Classes\Controller;
    use System\Classes\SettingsManager;

    class Logs extends Controller {

        public $implement = [
            'Backend.Behaviors.ListController'
        ];

        public $listConfig          = 'config_list.yaml';
        public $requiredPermissions = ['ki.xauth.access'];

        public function __construct() {
            parent::__construct();
            BackendMenu::setContext('October.System', 'system', 'settings');
            SettingsManager::setContext('ki.xauth', 'logs');
        }

    }

?>