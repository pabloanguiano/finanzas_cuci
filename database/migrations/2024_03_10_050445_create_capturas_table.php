<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('capturas', function (Blueprint $table) {
            $table->id();
            $table->integer('application')->unique();
            $table->smallInteger('type_application'); 
            $table->datetime('receipt_date');
            $table->smallInteger('user'); 
            $table->smallInteger('status_application');
            $table->smallInteger('payment_method');
            $table->smallInteger('payment_type'); 
            $table->tinyInteger('payment_complement'); 
            $table->tinyInteger('patrimonial_registration'); 
            $table->tinyInteger('travel_format'); 
            $table->string('beneficiary_name', 200);
            $table->text('concept');
            $table->string('proyect_p3e',500); 
            $table->string('proyect_name',500);
            $table->string('fund',100); 
            $table->integer('stock'); 
            $table->string('stock_name',150); 
            $table->string('ures',50); 
            $table->string('ures_name',200);
            $table->float('request_amount'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capturas');
    }
};
