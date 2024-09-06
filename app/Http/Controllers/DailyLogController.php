<?php

namespace App\Http\Controllers;

use App\Models\DailyLog;
use Illuminate\Http\Request;

class DailyLogController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pegawai_id' => 'required|exists:pegawai,id',
            'tanggal' => 'required|date',
            'deskripsi' => 'required|string',
            'file' => 'nullable|file',
        ]);

        $log = new DailyLog($validated);
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads');
            $log->file = $path;
        }
        $log->save();

        return redirect()->route('log.index');
    }
}
