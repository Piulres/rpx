<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5b5893f67011c5b5893f66a766InternalNotificationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('internal_notification_user');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('internal_notification_user')) {
            Schema::create('internal_notification_user', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('internal_notification_id')->unsigned()->nullable();
            $table->foreign('internal_notification_id', 'fk_p_185454_185447_user_i_5b4e2b74248fd')->references('id')->on('internal_notifications');
                $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id', 'fk_p_185447_185454_intern_5b4e2b7423ae7')->references('id')->on('users');
                
                $table->timestamps();
                
            });
        }
    }
}
