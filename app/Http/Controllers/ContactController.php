<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('user.contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'nullable|string|max:255',
            'subject' => 'required|string|in:general,product,order,partnership,complaint,other',
            'message' => 'required|string|min:20'
        ], [
            'name.required' => 'Nama lengkap wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'phone.required' => 'Nomor telepon wajib diisi',
            'subject.required' => 'Subjek wajib dipilih',
            'message.required' => 'Pesan wajib diisi',
            'message.min' => 'Pesan minimal 20 karakter'
        ]);

        // Here you can send email or store in database
        // For now, just redirect with success message
        
        return redirect()->back()->with('success', 'Terima kasih atas pesan Anda! Kami akan segera menghubungi Anda.');
    }
}