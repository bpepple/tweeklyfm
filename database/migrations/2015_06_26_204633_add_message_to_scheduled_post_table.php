<?php

/*
 * This file is part of tweeklyfm/tweeklyfm
 *
 *  (c) Scott Wilcox <scott@dor.ky>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 */

use Illuminate\Database\Migrations\Migration;

class AddMessageToScheduledPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scheduled', function ($table) {
            $table->string('last_message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scheduled', function ($table) {
            $table->dropColumn('last_message');
        });
    }
}
