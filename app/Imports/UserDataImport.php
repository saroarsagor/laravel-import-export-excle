<?php

namespace App\Imports;

use App\Models\Core\Categories;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;
use App\Models\User;
use DB;

class UserDataImport implements ToModel, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        //
    }

    /**
     * @param array $row
     * @return Categories
     */
    public function model(array $row)
    {
       /* dd( $row);*/

        $dateTime = Carbon::now();
        $business_networks =DB::table('business_networks')
        ->where('introduce_id',$row['introducer_id'])
        ->first();
 
        $dateTime = Carbon::now();
        $exitData =DB::table('users')
        ->where('userid',$row['userid'])
        ->first();

       $name= 'null';
        if($exitData){
             DB::table('users')
            ->where('userid',$row['userid'])
            ->update([
                'name' =>  $name,
                'last_name' =>  $row['name'],
                'userid' =>  $row['userid'],
                'type_id' =>  '4',
                'phone' =>  $row['contact_no'],
                'email' =>  $row['email_id'],
                'verify_code' => '12345',
                'password' =>  $row['pass'],
                'tran_pass' =>  $row['tran_pass'],
                'joining_date' =>  $row['doj'],
                'is_active' => '1',
                'is_two_factor_auth' => '0',
                'remember_token' => '14',
                'updated_at' =>  $dateTime,
            ]);

           /* if($business_networks){
                 DB::table('business_networks')
                ->where('introduce_id',$row['introducer_id'])
                ->update([
                    'introduce_id' =>  $row['introducer_id'],
                    'lower_hand' =>  $row['placement_name'],
                    'position' =>  $row['side'],
                    'user_id' =>  $row['userid'],
                   
                ]);
            }else{

                 DB::table('business_networks')
                ->insert([
                    'introduce_id' =>  $row['introducer_id'],
                    'lower_hand' =>  $row['placement_name'],
                    'position' =>  $row['side'],
                    'user_id' =>  $row['userid'],
                ]);

            }*/

        }else{
             DB::table('users')
            ->insert([
                'name' => $name,
                'last_name' =>  $row['name'],
                'userid' =>  $row['userid'],
                'type_id' =>  '4',
                'phone' =>  $row['contact_no'],
                'email' =>  $row['email_id'],
                'verify_code' => '12345',
                'password' =>  $row['pass'],
                'tran_pass' =>  $row['tran_pass'],
                'joining_date' =>  $row['doj'],
                'is_active' => '1',
                'is_two_factor_auth' => '0',
                'remember_token' => '14',
                'updated_at' =>  $dateTime,
            ]);

            /* if($business_networks){
                 DB::table('business_networks')
                ->where('introduce_id',$row['introducer_id'])
                ->update([
                    'introduce_id' =>  $row['introducer_id'],
                    'lower_hand' =>  $row['placement_name'],
                    'position' =>  $row['side'],
                    'user_id' =>  $row['userid'],
                   
                ]);
            }else{

                 DB::table('business_networks')
                ->insert([
                    'introduce_id' =>  $row['introducer_id'],
                    'lower_hand' =>  $row['placement_name'],
                    'position' =>  $row['side'],
                    'user_id' =>  $row['userid'],
                ]);

            }*/
             
        }

       
    }

}