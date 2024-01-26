<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Split extends Model
{
    use HasFactory;
    protected $fillable = ['email','subject', 'message'];

    public function createSplit()
    {
        return Split::create(['name' => 'Dit is een Split']);
    }
    public function retrieveModel(): void
    {
        foreach (Split::all() as $split) echo $split->name;
    }

}

