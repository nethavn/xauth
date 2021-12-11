<?php

    namespace NETHAVN\XAUTH;

    use Event, View;
    use System\Classes\PluginBase;
    use System\Classes\SettingsManager;
    use System\Classes\CombineAssets;
    use NETHAVN\XAUTH\Models\Settings;

    class Plugin extends PluginBase {

        public $elevated = true;

        public function boot() {

            \Backend\Controllers\Auth::extend(function($controller) {
                if(\Backend\Classes\BackendController::$action == 'signin') {

                    if(Settings::get('google_button') == 'light') {
                        $CSS[] = 'xauth.css';
                    } else {
                        $CSS[] = 'xauth.css';
                    }

                    if(Settings::get('hide_login_fields') == 1) {
                        $CSS[] = 'hide-login.css';
                    }

                    $controller->addCss(CombineAssets::combine($CSS, plugins_path() . '/nethavn/xauth/assets/css/'));

                }
            });

            Event::listen('backend.auth.extendSigninView', function($controller) {
                return View::make("nethavn.xauth::login");
            });

        }

        public function pluginDetails() {
            return [
                'name'        => 'nethavn.xauth::lang.plugin.name',
                'description' => 'nethavn.xauth::lang.plugin.description',
                'author'      => 'nethavn',
                'icon'        => 'icon-key'
            ];
        }

        public function registerSettings() {
            return [
                'settings' => [
                    'label'       => 'nethavn.xauth::lang.plugin.name',
                    'description' => 'nethavn.xauth::lang.plugin.description',
                    'icon'        => 'icon-key',
                    'class'       => '\NETHAVN\XAUTH\Models\Settings',
                    'order'       => 800,
                    'permissions' => ['nethavn.xauth.access'],
                    'category'    => 'system::lang.system.categories.system'
                ],
                'logs' => [
                    'label'       => 'nethavn.xauth::lang.plugin.name',
                    'description' => 'nethavn.xauth::lang.plugin.description_log',
                    'icon'        => 'icon-key',
                    'url'         => \Backend::url('nethavn/xauth/logs'),
                    'order'       => 800,
                    'permissions' => ['nethavn.xauth.access'],
                    'category'    => SettingsManager::CATEGORY_LOGS,
                ],
            ];
        }

        public function registerPermissions() {
            return [
                'nethavn.xauth.access'  => ['tab' => 'system::lang.permissions.name', 'label' => 'nethavn.xauth::lang.plugin.permissions'],
            ];
        }

    }

?>
