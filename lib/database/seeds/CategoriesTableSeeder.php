<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        	[
        		'cate_name'=>'Đơn hàng đi Nhật',
        		'cate_slug'=>Str::slug('Don-hang-di-Nhat')
        	],
        	[
        		'cate_name'=>'Xuất khẩu lao động Nhật Bản',
        		'cate_slug'=>Str::slug('Xuat-khau-lao-dong-Nhat-Ban')
        	],
        ];
        DB::table('vp_categories')->insert($data);
    }
}
