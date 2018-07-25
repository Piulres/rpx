<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b5894d9acf0aRelationshipsToAssetsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets_histories', function(Blueprint $table) {
            if (!Schema::hasColumn('assets_histories', 'asset_id')) {
                $table->integer('asset_id')->unsigned()->nullable();
                $table->foreign('asset_id', '188465_5b589425098fc')->references('id')->on('assets')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets_histories', 'status_id')) {
                $table->integer('status_id')->unsigned()->nullable();
                $table->foreign('status_id', '188465_5b58942524d6c')->references('id')->on('assets_statuses')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets_histories', 'location_id')) {
                $table->integer('location_id')->unsigned()->nullable();
                $table->foreign('location_id', '188465_5b58942540654')->references('id')->on('assets_locations')->onDelete('cascade');
                }
                if (!Schema::hasColumn('assets_histories', 'assigned_user_id')) {
                $table->integer('assigned_user_id')->unsigned()->nullable();
                $table->foreign('assigned_user_id', '188465_5b5894255b9eb')->references('id')->on('users')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assets_histories', function(Blueprint $table) {
            if(Schema::hasColumn('assets_histories', 'asset_id')) {
                $table->dropForeign('188465_5b589425098fc');
                $table->dropIndex('188465_5b589425098fc');
                $table->dropColumn('asset_id');
            }
            if(Schema::hasColumn('assets_histories', 'status_id')) {
                $table->dropForeign('188465_5b58942524d6c');
                $table->dropIndex('188465_5b58942524d6c');
                $table->dropColumn('status_id');
            }
            if(Schema::hasColumn('assets_histories', 'location_id')) {
                $table->dropForeign('188465_5b58942540654');
                $table->dropIndex('188465_5b58942540654');
                $table->dropColumn('location_id');
            }
            if(Schema::hasColumn('assets_histories', 'assigned_user_id')) {
                $table->dropForeign('188465_5b5894255b9eb');
                $table->dropIndex('188465_5b5894255b9eb');
                $table->dropColumn('assigned_user_id');
            }
            
        });
    }
}
