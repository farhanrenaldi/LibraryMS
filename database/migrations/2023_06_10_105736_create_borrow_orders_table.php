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
        Schema::create('borrow_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id');
            $table->integer('book_id');
            $table->string('status'); //Pending, Completed, Void
            $table->dateTime('borrow_date');
            $table->dateTime('return_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrow_orders');
    }
};
