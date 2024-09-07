@extends('layouts.app')

@section('title', 'Log')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        <div class="p-4 mb-4 text-sm border border-red-300 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                            role="alert">
                            <span class="font-medium me-2">Error!</span>{{ $error }}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="p-4 mb-4 text-sm border border-green-300 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <span class="font-medium">Sukses!</span>
            {{ session('success') }}
        </div>
    @endif

    @if (strtolower(explode(' ', auth()->user()->role)[0]) == 'manager' ||
            strtolower(explode(' ', auth()->user()->role)[0]) == 'direktur')
        @include('dailylog.verification')
    @endif

    @if (strtolower(explode(' ', auth()->user()->role)[0]) == 'manager')
        <hr />
    @endif
    @if (strtolower(explode(' ', auth()->user()->role)[0]) == 'manager' ||
            strtolower(explode(' ', auth()->user()->role)[0]) == 'staf')
        @include('dailylog.manage')
    @endif




@endsection
