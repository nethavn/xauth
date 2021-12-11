<?php

    namespace NETHAVN\XAUTH\Models;

    use Model;
    use Lang;
    use Cms\Classes\Page;

    class Settings extends Model {

        use \October\Rain\Database\Traits\Validation;

        public $rules = [
            'google_client_id'     => 'required',
            'google_client_secret' => 'required'
        ];

        public $attributeNames;
        public $implement      = ['System.Behaviors.SettingsModel'];
        public $settingsCode   = 'nethavn_xauth_settings';
        public $settingsFields = 'fields.yaml';

        public function __construct() {
            $this->attributeNames = [
                'google_client_id'     => Lang::get('nethavn.xauth::lang.settings.google.client_id'),
                'google_client_secret' => Lang::get('nethavn.xauth::lang.settings.google.client_secret')
            ];
            parent::__construct();
        }

    }

?>