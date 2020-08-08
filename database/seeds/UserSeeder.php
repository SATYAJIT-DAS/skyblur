<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $usersrecords = [
            [
                'id' => 1, 'name' => 'flytesoln', 'email' => 'flytesoln@gmail.com', 'password' => '$2y$10$NvMBZ2SjWXF2qSWa/lo1RuyUEkakpvhchik.EG2PwfekCzbJ.QcHO', 'image' => ''
            ],

        ];
        foreach ($usersrecords as $key => $record) {
            # code...
            \App\Models\User::create($record);
        }
    }
}
