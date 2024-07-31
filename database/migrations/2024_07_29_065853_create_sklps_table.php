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
        Schema::create('sklps_form2', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('first_name');
            $table->string('father_name');
            $table->string('date_birth')->nullable();
            $table->string('blood_group');
            $table->string('village');
            $table->string('address')->nullable();
            $table->string('mobile_number');
            $table->string('whatsapp_number')->default('')->nullable();
            $table->string('email')->nullable();
            $table->string('user_image');
            $table->string('admission_year');
            $table->string('standard');
            $table->string('leave_year')->default('');
            $table->string('last_standard');
            $table->string('education_status');
            $table->string('qualification_category')->nullable();
            $table->string('last_qualification')->nullable();
            $table->string('work_status')->nullable();
            $table->string('business_name')->nullable();
            $table->string('established_year')->nullable();
            $table->string('business_category')->nullable();
            $table->string('total_staff')->nullable();
            $table->string('business_country')->nullable();
            $table->string('business_city')->nullable();
            $table->string('job_sector')->nullable();
            $table->string('company_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('job_country')->nullable();
            $table->string('job_city')->nullable();
            $table->string('current_address')->default('')->nullable();
            $table->string('current_runningaddress')->default('')->nullable();
            $table->string('students_work_company')->nullable();
            $table->string('many_resources')->nullable();
            $table->string('feedback_samaj')->nullable();
            $table->string('suggestions')->nullable();
            $table->string('attend_samaj_innugration')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sklps');
    }
};
