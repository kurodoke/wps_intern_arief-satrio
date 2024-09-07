<section class="bg-white dark:bg-gray-900 rounded-lg p-5">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 py-4">
        <div class="w-full md:w-1/2">
            <h1 class="font-medium text-2xl text-gray-900">Kelola Log Bawahan</h1>
            <h5 class="font-semibold text-sm text-gray-500">Cari Log berdasarkan hari di kalender</h5>
        </div>
    </div>
    <div class="flex flex-wrap md:flex-nowrap justify-center gap-3">
        <div id="datepicker-inline" class="shadow-none" inline-datepicker data-date={{ $formattedDate }}>
        </div>
        <div class="overflow-x-auto w-full">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">Pegawai</th>
                        <th scope="col" class="px-4 py-3">Jam</th>
                        <th scope="col" class="px-4 py-3">Deskripsi</th>
                        <th scope="col" class="px-4 py-3">Status</th>
                        <th scope="col" class="px-4 py-3">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lowers as $lower)
                        @foreach ($lower->dailyLogs as $log)
                            @if ($log->updatedAtDate() === $date)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3">
                                        <p class="font-semibold">{{ $lower->name }}</p>
                                        <p class="text-xs">{{ $lower->role }}</p>
                                    </td>
                                    <td class="px-4 py-3">{{ $log->updatedAtTime() }}</td>
                                    <td class="px-4 py-3 truncate max-w-sm xl:max-w-xs">{{ $log->description }}</td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full me-2 {{ $log->statusClassName() }}">
                                            </div> {{ $log->status }}
                                        </div>
                                    </td>
                                    <td
                                        class="px-4
                                        py-3 flex items-center justify-end">
                                        <button id="log-dropdown-{{ $log->id }}"
                                            data-dropdown-toggle=id="log-dropdown-{{ $log->id }}"
                                            class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                            type="button">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                        <div id=id="log-dropdown-{{ $log->id }}"
                                            class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="log-dropdown-{{ $log->id }}">
                                                <li>
                                                    <a href={{ route('dailylog.show', ['id' => $log->id]) }}
                                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lihat
                                                        Isi</a>
                                                </li>
                                            </ul>
                                            <form action={{ route('dailylog.status', ['id' => $log->id]) }}
                                                method="post" id="log-status-form-{{ $log->id }}">
                                                @csrf
                                                @method('PUT')

                                                <input type="hidden" name="status"
                                                    id="log-status-input-{{ $log->id }}">
                                                <div class="py-1">
                                                    <button type="button"
                                                        class="w-full block py-2 px-4 text-start text-sm text-green-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                                        onclick="document.getElementById('log-status-input-{{ $log->id }}').value='Disetujui'; document.getElementById('log-status-form-{{ $log->id }}').submit();">Setujui</button>
                                                    <button type="button"
                                                        class="w-full block py-2 px-4 text-start text-sm text-red-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                                        onclick="document.getElementById('log-status-input-{{ $log->id }}').value='Ditolak'; document.getElementById('log-status-form-{{ $log->id }}').submit();">Tolak</button>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        document.getElementById('datepicker-inline').addEventListener('changeDate', function(event) {
            const selectedDate = new Date(event.detail.date);
            selectedDate.setDate(selectedDate.getDate() + 1);
            const formattedDate = selectedDate.toISOString().split('T')[0];

            window.location.href = `{{ route('dailylog.index') }}?date=${formattedDate}`;
        });
    </script>
</section>
