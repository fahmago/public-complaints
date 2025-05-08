<?php

namespace App\Http\Controllers\front;

use App\Models\Complaint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        $complaints = Complaint::all();
        return view('front.semua-pengaduan',[
            'complaints' => $complaints
        ]);
    }

    public function formpengaduan()
    {
        return view('front.form-pengaduan');
    }
    public function statistikpengaduan()
    {
        return view('front.statistik');
    }
}
