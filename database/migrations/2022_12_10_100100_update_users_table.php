<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->after('id', function ($table) {
                $table->uuid()->unique();
                $table->string('title')->nullable();
            });

            $table->after('email_verified_at', function ($table) {
                $table->string('phone')->nullable();
                $table->timestamp('phone_verified_at')->nullable()->index();
            });

            $table->after('password', function ($table) {
                $table->timestamp('password_confirmed_at')->nullable()->index();
                $table->text('two_factor_secret')->nullable();
                $table->text('two_factor_recovery_codes')->nullable();
                $table->timestamp('two_factor_confirmed_at')->nullable()->index();
            });

            $table->after('remember_token', function ($table) {
                $table->text('notes')->nullable();
                $table->boolean('active')->default(1)->index();
            });

            $table->after('updated_at', function ($table) {
                $table->timestamp('authed_at')->nullable()->index();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'uuid',
                'title',
                'phone',
                'phone_verified_at',
                'password_verified_at',
                'two_factor_secret',
                'two_factor_recovery_codes',
                'two_factor_verified_at',
                'notes',
                'active',
                'authed_at'
           ]);
        });
    }
};
