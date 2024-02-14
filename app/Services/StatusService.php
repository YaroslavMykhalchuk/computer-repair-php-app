<?php

namespace App\Services;
use App\Models\Status;

class StatusService
{
    public function getAllStatuses()
    {
        return Status::all();
    }

    public function getStatusById($id)
    {
        return Status::find($id);
    }

    public function createStatus(array $data)
    {
        return Status::create($data);
    }

    public function updateStatus(Status $status, array $data)
    {
        $status->update($data);
        return $status;
    }

    public function deleteStatus(Status $status)
    {
        $status->delete();
    }
}