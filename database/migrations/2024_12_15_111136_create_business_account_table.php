<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('business_account', function (Blueprint $table) {
            $table->id('business_id'); // Tự động tăng, khóa chính
            $table->string('business_name', 255); // Tên business
            $table->string('business_password', 255); // Mật khẩu
            $table->string('mail', 255)->unique(); // Email, duy nhất
            $table->boolean('is_admin')->default(2); // Trạng thái admin, mặc định là false
            $table->timestamps(); // Thêm cột created_at và updated_at
        });
    
    DB::table('business_account')->insert([
        [
            'business_id' => 1,
            'business_name' => 'admin',
            'business_password' => Hash::make('123456'),
            'mail'=>'fpt@gmail.vn.com',
            'is_admin' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]]);
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_account');
    }
};
