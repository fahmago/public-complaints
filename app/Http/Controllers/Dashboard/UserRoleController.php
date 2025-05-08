<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Complaint;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserRoleController extends Controller
{
    public function riwayatPengaduan()
    {
        $complaints = Complaint::where('user_id', Auth::user()->id)->get();
        return $complaints;
    }
}
