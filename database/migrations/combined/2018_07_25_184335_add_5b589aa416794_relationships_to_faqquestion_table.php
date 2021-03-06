<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b589aa416794RelationshipsToFaqQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faq_questions', function(Blueprint $table) {
            if (!Schema::hasColumn('faq_questions', 'category_id')) {
                $table->integer('category_id')->unsigned()->nullable();
                $table->foreign('category_id', '186455_5b50f2950a00e')->references('id')->on('faq_categories')->onDelete('cascade');
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
        Schema::table('faq_questions', function(Blueprint $table) {
            if(Schema::hasColumn('faq_questions', 'category_id')) {
                $table->dropForeign('186455_5b50f2950a00e');
                $table->dropIndex('186455_5b50f2950a00e');
                $table->dropColumn('category_id');
            }
            
        });
    }
}
