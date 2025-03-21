<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void
    {
        Schema::create('loan_remarks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('loan_id');
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected', 'disbursed']);
            $table->text('remark');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loan_remarks');
    }
};
