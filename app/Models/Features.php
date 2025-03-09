<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    use HasFactory;

    protected $table = "features";

    public function processStore(array $data): Features
    {
        $feature = new Features();
        $feature->name = $data['name'];
        $feature->modifiedby = auth()->user()->name; // Assuming authentication is required

        if (!$feature->save()) {
            throw new \Exception('Error storing feature.');
        }

        return $feature;
    }

    public function processUpdate($id, array $data): Features
    {
        $feature = Features::findOrFail($id);
        $feature->name = $data['name'];
        $feature->modifiedby = auth()->user()->name; // Assuming authentication is required

        if (!$feature->save()) {
            throw new \Exception('Error updating feature.');
        }

        return $feature;
    }

    public function processDestroy($id): Features
    {
        $feature = Features::findOrFail($id); // Get feature or throw 404
        if (!$feature->delete()) {
            throw new \Exception('Error deleting feature.');
        }
        return $feature;
    }
}
