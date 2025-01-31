<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InfoController extends Controller
{
    public function show()
    {
        return response()->json([
            'email' => 'bolufunmiluyi@gmail.com', // change email to the one used to register on the HNG12 Slack workspace
            'current_datetime' => now()->utc()->format('Y-m-d\TH:i:s\Z'),
            'github_url' => 'https://github.com/Boluwatife01-bea/hng_gopher'
        ]);
    }
}
