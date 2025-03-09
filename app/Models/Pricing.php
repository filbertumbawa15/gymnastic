<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'duration', 'features', 'modifiedby'];
    protected $table = "pricingplans";

    public function processStore(array $data): Pricing
    {
        $pricing = new Pricing();
        $pricing->name = $data['name'];
        $pricing->price = $data['price'];
        $pricing->features = $data['features']; // Stored as JSON
        $pricing->modifiedby = auth()->user()->name;

        if (!$pricing->save()) {
            throw new \Exception('Error storing pricing plan.');
        }

        return $pricing;
    }

    public function processUpdate($id, array $data): Pricing
    {
        $pricing = Pricing::findOrFail($id);
        $pricing->name = $data['name'];
        $pricing->price = $data['price'];
        $pricing->features = $data['features']; // Stored as JSON
        $pricing->modifiedby = auth()->user()->name;

        if (!$pricing->save()) {
            throw new \Exception('Error updating pricing plan.');
        }

        return $pricing;
    }

    public function processDestroy($id): Features
    {
        $pricing = Pricing::findOrFail($id); // Get pricing or throw 404
        if (!$pricing->delete()) {
            throw new \Exception('Error deleting pricing.');
        }
        return $pricing;
    }
}
