@extends('layouts.app')

@section('title', 'Log')

@section('content')
    <form action={{ route('dailylog.update', ['id' => $log->id]) }} method="post" enctype="multipart/form-data"
        class="grid gap-4 sm:grid-cols-2 bg-white p-5 rounded-lg">
        @method('PUT')
        @csrf
        <div class="sm:col-span-2 ">
            <label for="description" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Deskripsi</label>
            <textarea id="description" rows="4" name="description"
                class="block p-2.5 w-full border-2 text-sm text-gray-900 bg-gray-50 rounded-lg border-gray-300 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500"
                placeholder="Tulis dekripsi apa yang telah kamu kerjakan hari ini">{{ $log->description }}</textarea>
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
            <div class="flex flex-col items-start justify-center w-full">

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file">Upload Bukti
                    Pekerjaan (optional)</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    name="file" aria-describedby="file_help" id="file" type="file">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_help">Format PNG,
                    JPG</p>
            </div>
        </div>

        <div class="sm:col-span-1">
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
        <div class="sm:col-span-1">
            <button type="submit"
                class="inline-flex w-full justify-center items-center py-3 px-5 text-sm font-medium focus:outline-none bg-gray-900 text-white rounded-lg border hover:bg-gray-950 hover:text-gray-50 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-70">
                Update
            </button>
        </div>
    </form>
@endsection
