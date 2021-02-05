<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tender_id')->constrained('tenders');
            $table->foreignId('tender_section_id')->constrained('tender_sections');
            $table->foreignId('product_id')->constrained('products');
            $table->integer('quantity');
            $table->mediumText('notes');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('section_products');
    }
}
