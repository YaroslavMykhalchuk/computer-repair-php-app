<?php

namespace App\Services;
use App\Models\TypeRepair;

class TypeRepairService
{
    public function getAllTypeServices()
    {
        return TypeRepair::all();
    }

    public function getTypeServiceById($id)
    {
        return TypeRepair::find($id);
    }

    public function createTypeService(array $data)
    {
        return TypeRepair::create($data);
    }

    public function updateTypeService(TypeRepair $type_repair, array $data)
    {
        $type_repair->update($data);
        return $type_repair;
    }

    public function deleteTypeService(TypeRepair $type_repair)
    {
        $type_repair->delete();
    }
}