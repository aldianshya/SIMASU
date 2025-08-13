<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;
use Illuminate\Support\Facades\Auth;

class SuratController extends Controller
{
    public function index()
    {
        return view('admin.membuat_surat');
    }
    public function pilih()
    {
        $templates = Template::all();

        return view('admin.pilih-template', compact('templates'));
    }
    public function riwayat()
    {
        return view('admin.riwayat-surat');
    }
    public function template()
    {
        // $templates = Template::latest()->get();
        $templates = Template::all();

        return view('admin.template-surat', compact('templates'));
    }
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_surat' => 'required|string|max:255',
            'template' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Simpan file ke storage/public/templates
        $filePath = $request->file('template')->store('templates', 'public');

        // Simpan ke database
        Template::create([
            'nama_surat' => $request->nama_surat,
            'file_path' => $filePath,
            'created_by' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Template berhasil disimpan!');
    }
}
