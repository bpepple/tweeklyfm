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

class AddCategoryToFeatureRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feature_request', function ($table) {
            $table->integer('feature_category_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('connections', function ($table) {
            $table->dropColumn('feature_request');
        });
    }
}
