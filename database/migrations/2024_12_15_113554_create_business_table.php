<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->enum('state', ['Waiting', 'No','Yes'])->default('Waiting');
            $table->integer('hotline');
            $table->string('customer_mail', 100);
            $table->string('official_website', 100);
            $table->string('official_facebook', 100);
            $table->string('head_offices', 2000);
            $table->string('progress', 2000);
            $table->string('img', 100)->default('default_image.png'); // Giá trị mặc định
            $table->timestamps();
        });
        
        // Insert sample data
        DB::table('business')->insert([
            [
                'name' => 'FPT',
                'state' => 'Yes',
                'hotline' => 19006600,
                'customer_mail' => 'hotrokhachhang@fpt.com.vn',
                'official_website' => 'www.fpt.vn',
                'official_facebook' => 'www.facebook.com/fpttelecom',
                'head_offices' => 'PVI Building, No. 1 Pham Van Bach Street, Cau Giay District',
                'progress' => 'Sau 22 năm, FPT được triển khai ở 20 tỉnh thành trên toàn quốc với hơn 1.500 dịch vụ công trực tuyến, trên 600000 hồ sơ được giải quyết/năm tiết kiệm chi',
                'img' => '../images/fpt.png'
            ],      
        
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business');
    }
};