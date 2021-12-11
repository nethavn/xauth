<?php

    namespace NETHAVN\XAUTH\Models;

    use Model;

    class Log extends Model {

        public $table = 'nethavn_xauth_logs';

        public $belongsTo = [
            'user' => ['Backend\Models\User']
        ];

    }

?>