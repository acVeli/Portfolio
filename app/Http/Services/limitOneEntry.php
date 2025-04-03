<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Session;

class limitOneEntry
{
    public function check($model)
    {
        if ($model::count() > 0) {
            Session::flash('error', 'An entry already exists in the database.');
        }
    }
}