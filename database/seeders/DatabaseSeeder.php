<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $dataStudentSeed = [
            [
                "ten_sinh_vien"=>"Nguyễn Ngọc Sơn",
                "ngay_nhap_hoc"=>"2022-07-05"

            ],
            [
                "ten_sinh_vien"=>"Nguyễn Ngọc Anh",
                "ngay_nhap_hoc"=>"2022-07-02"
            ]
        ];
        DB::table('students')->insert($dataStudentSeed);
    }
}
