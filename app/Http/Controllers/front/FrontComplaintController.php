<?php

namespace App\Http\Controllers\Front;

use App\Models\Complaint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontComplaintController extends Controller
{
    public function storePengaduan(Request $request)
    {
        // dd($request->all());

        $image = $request->file('image');
        $image->storeAs('public/complaints', $image->hashName());
        
        $complaint = new Complaint();
        
        $complaint->title = $request->title;
        $complaint->guest_name = $request->name;
        $complaint->guest_email = $request->email;
        $complaint->guest_telp = $request->telp;
        $complaint->description = $request->description;
        $complaint->image = $image->hashName();
        
        $complaint->save();
        
        return redirect()->back()->with('msg', 'Pengaduan berhasil dikirim');
    }
}
