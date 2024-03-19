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
            $table->smallInteger('user'); 
            $table->date('receipt_date');
            $table->integer('application')->unique();
            $table->smallInteger('type_application');                     
            $table->smallInteger('status_application');
            $table->string('payment_type',300); 
            $table->string('payment_method',300);            
            $table->tinyInteger('payment_complement'); 
            $table->tinyInteger('patrimonial_registration'); 
            $table->tinyInteger('travel_format'); 
            $table->string('beneficiary_name', 200);
            $table->text('concept');
            $table->string('project_p3e',500); 
            $table->string('project_name',500);
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
