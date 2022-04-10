<?php

namespace App\Imports;

use App\Models\Core\Categories;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;
use App\Models\User;
use DB;

class businessNetworkDataImport implements ToModel, WithHeadingRow
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
        ->where('user_id',$row['userid'])
        ->first();
 
            if($business_networks){
                 DB::table('business_networks')
                ->where('user_id',$row['userid'])
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

            }

       
    }

}