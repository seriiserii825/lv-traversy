<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


    // "salary" => 90000,
    // "tags" => "development,coding,java,python",
    // "job_type" => "Part-Time",
    // "remote" => false,
    // "requirements" => "Bachelors degree in Computer Science or related field, 3+ years of software development experience",
    // "benefits" => "Healthcare, 401(k) matching, flexible work hours",
    // "address" => "123 Main St",
    // "city" => "Albany",
    // "state" => "NY",
    // "zipcode" => "12201",
    // "contact_email" => "info@algorix.com",
    // "contact_phone" => "348-334-3949",
    // "company_name" => "Algorix",
    // "company_description" => "Algorix is a leading tech firm specializing in innovative software solutions and cutting-edge technology.",
    // "company_logo" => "logos/logo-algorix.png",
    // "company_website" => "https://algorix.com"
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            $table->integer('salary');
            $table->string('tags')->nullable();
            $table->enum('job_type', ['Full-Time', 'Part-Time', 'Contract', 'Internship', 'Temporary'])->default('Full-Time');
            $table->boolean('remote')->default(false);
            $table->text('requirements')->nullable();
            $table->text('benefits')->nullable();
            $table->string('address')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zipcode')->nullable();
            $table->string('contact_email');
            $table->string('contact_phone')->nullable();
            $table->string('company_name');
            $table->text('company_description')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_website')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            $table->dropColumn('salary');
            $table->dropColumn('tags');
            $table->dropColumn('job_type');
            $table->dropColumn('remote');
            $table->dropColumn('requirements');
            $table->dropColumn('benefits');
            $table->dropColumn('address');
            $table->dropColumn('city');
            $table->dropColumn('state');
            $table->dropColumn('zipcode');
            $table->dropColumn('contact_email');
            $table->dropColumn('contact_phone');
            $table->dropColumn('company_name');
            $table->dropColumn('company_description');
            $table->dropColumn('company_logo');
            $table->dropColumn('company_website');
        });
    }
};
