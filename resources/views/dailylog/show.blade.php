@extends('layouts.app')

@section('title', 'Log')

@section('content')
    <div class="grid gap-4 sm:grid-cols-2 bg-white p-5 rounded-lg">
        <div class="sm:col-span-2 ">
            <label for="description" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Deskripsi</label>
            <textarea id="description" rows="4"
                class="block p-2.5 w-full border-2 text-sm text-gray-900 bg-gray-50 rounded-lg border-dashed border-gray-300 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500"
                placeholder="Tulis dekripsi apa yang telah kamu kerjakan hari ini" disabled>{{ $log->description }}</textarea>
        </div>

        @if ($log->filepath)
            <div class="sm:col-span-2">
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-auto border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500">
                        <div class="flex flex-col items-center justify-center p-5 w-full h-auto">
                            <img src="{{ asset('storage/' . $log->filepath) }}" class=" w-full h-auto rounded-lg"
                                alt="file_log">
                        </div>
                    </label>
                </div>
            </div>
        @endif

        <div class="sm:col-span-2">
            <a href={{ route('dailylog.index') }}
                class="inline-flex w-full justify-center items-center py-3 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-70">
                Kembali
                <svg class="w-3.5 h-3.5 ms-2 rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    @endsection
