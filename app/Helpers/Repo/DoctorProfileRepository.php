<?php

namespace App\Helpers\Repo;
use App\Models\User;
use App\Models\DoctorProfile;
use Illuminate\Http\Request;

class CategoryRepository extends EntityRepository
{
    public function __construct()
    {
        parent::setEntity(DoctorProfile::class);
    }

    public function list()
    {
        return DoctorProfile::get();
    }

    public function getById(Request $request, int $id)
    {
        return DoctorProfile::where('id', $id)->first();
    }

    /**
     * @param  string  $id
     * @return bool
     */
    public function destroyById(string $id): bool
    {
        return DoctorProfile::destroy($id);
    }

    public function materialList(Request $request)
    {
        return DoctorProfile::all();
    }

    public function isExist(Request $request): bool
    {
        return DoctorProfile::where('name', $request->input('name'))->exists();
    }
}