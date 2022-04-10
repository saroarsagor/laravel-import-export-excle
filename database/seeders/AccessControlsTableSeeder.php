<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class AccessControlsTableSeeder extends Seeder
{


    public function run()
    {
        $dev = User::where('email', 'systemadmin@gmail.com')->first();

        if (empty($dev)) {

            $data = [
                [
                    'id'=>'1',
                    'name' => 'System Admin',
                    'email' => 'systemadmin@gmail.com',
                    'mobile' => '01700000000',
                    'status' => '1',
                     'user_id' => null,
                    'user_type' => 'systemadmin',
                    'password' => bcrypt('123456'),
                ],

                [
                    'id'=>'2',
                    'name' => 'shop',
                    'email' => 'shop@gmail.com',
                    'mobile' => '01800000000',
                    'status' => '1',
                    'user_id' => null,
                    'user_type' => 'shop',
                    'password' => bcrypt('123456'),
                ],


                [
                    'id'=>'3',
                    'name' => 'salesman',
                    'email' => 'salesman@gmail.com',
                    'mobile' => '01500000000',
                    'status' => '1',
                    'user_id' => '2',
                    'user_type' => 'salesman',
                    'password' => bcrypt('123456'),
                ]
            ];

            User::insert($data);
        }
    }
}
