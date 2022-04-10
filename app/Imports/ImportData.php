<?php

namespace App\Imports;

use App\Models\Core\Categories;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;
use DB;

class ImportData implements ToModel, WithHeadingRow
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
        $dateTime = Carbon::now();

        $exitData =DB::table('referrals')
        ->where('referral_id',$row['refarral_user_id'])
        ->where('position',$row['position'])
        ->first();

        if($row['introducer']){
           $introducer =  $row['introducer'];
        }else{
            $introducer =null;
        }

        if($exitData){
             DB::table('referrals')
            ->where('referral_id',$row['refarral_user_id'])
            ->where('position',$row['position'])
            ->update([
                'introducer_id' =>  $introducer,
                'referral_id' =>  $row['refarral_user_id'],
                'position' =>  $row['position'],
                'updated_at' =>  $dateTime,
            ]);
        }else{

             DB::table('referrals')
            ->insert([
                'introducer_id' =>  $introducer,
                'referral_id' =>  $row['refarral_user_id'],
                'position' =>  $row['position'],
                'created_at' =>  $dateTime,
                'updated_at' =>  $dateTime,
            ]);

        }
        
       
 
        // $categories = DB::table('categories')->where('categories_id',$row['categories_id'])->first();
        // $categories->categories_slug =  $row['categories_slug'];
        // $categories->save();
        // return new Categories([
        //     'categories_id' => $row['categories_id'],
        //     'categories_slug' => $row['categories_slug'],
         
        // ]);
    }

}