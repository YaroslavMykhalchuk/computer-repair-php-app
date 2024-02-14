<?php

namespace App\Services;
use App\Models\TypeService;

class TypeService
{
    public function getAllTypeServices()
    {
        return TypeService::all();
    }

    public function getTypeServiceById($id)
    {
        return TypeService::find($id);
    }

    public function createTypeService(array $data)
    {
        return TypeService::create($data);
    }

    public function updateTypeService(TypeService $type_service, array $data)
    {
        $type_service->update($data);
        return $type_service;
    }

    public function deleteTypeService(TypeService $type_service)
    {
        $type_service->delete();
    }
}