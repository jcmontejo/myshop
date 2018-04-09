<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('orders', function(Blueprint $table) {
                $table->increments('id');
                $table->string('billing_first_name');
                $table->string('billing_last_name');
                $table->string('billing_address_1');
                $table->string('billing_city');
                $table->string('billing_postcode');
                $table->string('billing_email');
                $table->string('billing_phone');
                $table->string('order_comments');
                $table->string('order_color_card');
                $table->string('order_color_letter');
                $table->date('order_date');
                $table->string('total');
                $table->string('card');
                $table->integer('number_cards');
                $table->integer('status')->default(1);

                $table->timestamps();
                $table->softDeletes();
            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }

}
