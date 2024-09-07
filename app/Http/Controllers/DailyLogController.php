<?php

namespace App\Http\Controllers;

use App\Models\DailyLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Carbon\Carbon;

class DailyLogController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required',
            'file' => 'nullable|file|mimes:jpg,png'
        ]);

        $log = DailyLog::create([
            'user_id' => auth()->user()->id,
            'description' => $validated['description']
        ]);

        if ($request->hasFile('file')) {
            $filepath = $this->fileUploader($request);
            $log->filepath = $filepath;
        }
        $log->save();

        return redirect()->route('dailylog.index')->with('success', 'Menambahkan Data Log');
    }

    public function index(Request $request)
    {
        $date = $request->query('date', now()->format('Y-m-d'));

        $lowers = auth()->user()->lower;

        // $logs = DailyLog::whereIn('user_id', $lower)
        //     ->whereDate('updated_at', $date)
        //     ->get();

        $formattedDate = Carbon::parse($date)->format('m-d-Y');
        $date = Carbon::parse($date)->format('d-m-Y');

        return view('dailylog.index', compact('lowers', 'date', 'formattedDate'));
    }

    public function edit($id)
    {
        $log = DailyLog::findOrFail($id);
        return view('dailylog.update', compact('log'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:jpg,png'
        ]);

        $log = DailyLog::findOrFail($id);

        $log->description = $request->input('description');

        if ($request->hasFile('file')) {
            $filepath = $this->fileUploader($request);
            if ($log->filepath) {
                Storage::delete($log->filepath);
            }

            $log->filepath = $filepath;
        }

        $log->save();

        return redirect()->route('dailylog.index')->with('success', 'Mengupdate Data Log');
    }

    public function show(Request $request, $id)
    {
        $log = DailyLog::findOrFail($id);

        return view('dailylog.show', compact('log'));
    }

    public function destroy(Request $request, $id)
    {
        $log = DailyLog::find($id);

        if ($log->filepath) {
            Storage::delete($log->filepath);
        }
        $log->delete();

        return redirect()->route('dailylog.index')->with('success', 'Menghapus Data Log');
    }

    //status update
    public function status(Request $request, $id)
    {
        $validated = $request->validate([
            "status" => "required|in:Disetujui,Ditolak"
        ]);

        $log = DailyLog::find($id);

        $log->timestamps = false;
        $log->status = $validated['status'];
        $log->save();
        $log->timestamps = true;

        return redirect()->route('dailylog.index')->with('success', 'Mengubah Status Log Pegawai');
    }

    private function fileUploader(Request $request): string
    {
        $file = $request->file('file');
        $filename = now()->format('YmdHis') . '.' . $file->getClientOriginalExtension(); //YYmmDDhhMMss.
        return $file->storeAs('uploads', $filename, 'public');
    }
}
