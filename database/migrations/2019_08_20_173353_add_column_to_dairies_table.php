<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToDairiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dairies', function (Blueprint $table) {
            $table->longtext('Bangla_1st_paper');
            $table->longtext('Bangla_2nd_paper');
            $table->longtext('English_1st_paper');
            $table->longtext('English_2nd_paper');
            $table->longtext('Sociology');
            $table->longtext('General_knowledge');
            $table->longtext('English_literature');
            $table->longtext('Example1');
            $table->longtext('Example2');
            $table->longtext('Example3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dairies', function (Blueprint $table) {
            $table->dropColumn('Bangla_1st_paper');
            $table->dropColumn('Bangla_2nd_paper');
            $table->dropColumn('English_1st_paper');
            $table->dropColumn('English_2nd_paper');
            $table->dropColumn('Sociology');
            $table->dropColumn('General_knowledge');
            $table->dropColumn('English_literature');
            $table->dropColumn('Example1');
            $table->dropColumn('Example2');
            $table->dropColumn('Example3');
        });
    }
}
