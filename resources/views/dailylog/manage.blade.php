<section class="bg-white dark:bg-gray-900 rounded-lg p-5">
    @include('dailylog.create-modal')
    @include('dailylog.delete-modal')
    <div class="relative  sm:rounded-lg ">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 py-4">
            <div class="w-full md:w-1/2">
                <h1 class="font-medium text-2xl text-gray-900">Daftar Log Kamu</h1>
            </div>
            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <button type="button" id="defaultModalButton" data-modal-target="defaultModal"
                    data-modal-toggle="defaultModal"
                    class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Tambah Log
                </button>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">Tanggal</th>
                        <th scope="col" class="px-4 py-3">Jam</th>
                        <th scope="col" class="px-4 py-3">Deskripsi</th>
                        <th scope="col" class="px-4 py-3">Status</th>
                        <th scope="col" class="px-4 py-3">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (auth()->user()->dailyLogs as $log)
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3">{{ $log->updatedAtDate() }}</td>
                            <td class="px-4 py-3">{{ $log->updatedAtTime() }}</td>
                            <td class="px-4 py-3 truncate max-w-sm xl:max-w-xs">{{ $log->description }}</td>
                            <td class="px-4 py-3">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full me-2 {{ $log->statusClassName() }}">
                                    </div> {{ $log->status }}
                                </div>
                            </td>
                            <td class="px-4
                                        py-3 flex items-center justify-end">
                                <button id="log-dropdown-{{ $log->id }}"
                                    data-dropdown-toggle=id="log-dropdown-{{ $log->id }}"
                                    class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                    type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
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
                                        <li>
                                            <a href={{ route('dailylog.edit', ['id' => $log->id]) }}
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <button data-modal-target="log-delete" data-modal-toggle="log-delete"
                                            class="w-full block py-2 px-4 text-start text-sm text-red-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                            onclick="document.getElementById('log-delete-form').action = '{{ route('dailylog.destroy', ['id' => $log->id]) }}'">Hapus</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
