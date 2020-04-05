<?php

    namespace KI\XAUTH\Models;

    use Model;

    class Log extends Model {

        public $table = 'ki_xauth_logs';

        public $belongsTo = [
            'user' => ['Backend\Models\User']
        ];

    }

?>