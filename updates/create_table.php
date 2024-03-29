<?php

    namespace NETHAVN\XAUTH\Updates;

    use Schema;
    use October\Rain\Database\Updates\Migration;

    class CreateTable extends Migration {

        public function up() {
            Schema::create('nethavn_xauth_logs', function($table) {
                $table->increments('id')->unsigned();
                $table->string('provider',  100)->nullable();
                $table->enum('result', ['successful', 'failed']);
                $table->integer('user_id')->unsigned()->nullable()->index();
                $table->string('email',  200)->nullable();
                $table->string('ip'   ,   50)->nullable();
                $table->timestamps();
            });
        }

        public function down() {
            Schema::drop('nethavn_xauth_logs');
        }

    }

?>