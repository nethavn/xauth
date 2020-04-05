<?php

    namespace KI\XAUTH;

    use Event, View;
    use System\Classes\PluginBase;
    use System\Classes\SettingsManager;
    use System\Classes\CombineAssets;
    use KI\XAUTH\Models\Settings;

    class Plugin extends PluginBase {

        public $elevated = true;

        public function boot() {

            \Backend\Controllers\Auth::extend(function($controller) {
                if(\Backend\Classes\BackendController::$action == 'signin') {

                    if(Settings::get('google_button') == 'light') {
                        $CSS[] = 'xauth-light.css';
                    } else {
                        $CSS[] = 'xauth.css';
                    }

                    if(Settings::get('hide_login_fields') == 1) {
                        $CSS[] = 'hide-login.css';
                    }

                    $controller->addCss(CombineAssets::combine($CSS, plugins_path() . '/ki/xauth/assets/css/'));

                }
            });

            Event::listen('backend.auth.extendSigninView', function($controller) {
                return View::make("ki.xauth::login");
            });

        }

        public function pluginDetails() {
            return [
                'name'        => 'ki.xauth::lang.plugin.name',
                'description' => 'ki.xauth::lang.plugin.description',
                'author'      => 'Knight Industries',
                'icon'        => 'icon-key'
            ];
        }

        public function registerSettings() {
            return [
                'settings' => [
                    'label'       => 'ki.xauth::lang.plugin.name',
                    'description' => 'ki.xauth::lang.plugin.description',
                    'icon'        => 'icon-key',
                    'class'       => '\KI\XAUTH\Models\Settings',
                    'order'       => 800,
                    'permissions' => ['ki.xauth.access'],
                    'category'    => 'system::lang.system.categories.system'
                ],
                'logs' => [
                    'label'       => 'ki.xauth::lang.plugin.name',
                    'description' => 'ki.xauth::lang.plugin.description_log',
                    'icon'        => 'icon-key',
                    'url'         => \Backend::url('ki/xauth/logs'),
                    'order'       => 800,
                    'permissions' => ['ki.xauth.access'],
                    'category'    => SettingsManager::CATEGORY_LOGS,
                ],
            ];
        }

        public function registerPermissions() {
            return [
                'ki.xauth.access'  => ['tab' => 'system::lang.permissions.name', 'label' => 'ki.xauth::lang.plugin.permissions'],
            ];
        }

    }

?>
