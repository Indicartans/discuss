<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <section class="px-6">
        <div class="overflow-hidden border-b border-gray-200">
            <table class="min-w-full">
                <thead class="bg-blue-500">
                    <tr>
                        <x-table.head>Name</x-table.head>
                        <x-table.head>Bio</x-table.head>
                        <x-table.head>Birthday</x-table.head>
                        <x-table.head class="text-center">Role</x-table.head>
                        <x-table.head class="text-center">Joined Date</x-table.head>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 divide-solid">
                    <tr>
                        <x-table.data>
                            <div>Hanna Maghfiroh</div>
                        </x-table.data>
                        <x-table.data>
                            <div>This is bio</div>
                        </x-table.data>
                        <x-table.data>
                            <div>2002-06-12</div>
                        </x-table.data>
                        <x-table.data>
                            <div class="px-2 py-1 text-center text-gray-700 bg-green-200 rounded">
                                Moderator
                            </div>
                        </x-table.data>
                        <x-table.data>
                            <div class="text-center">2023-20-06</div>
                        </x-table.data>
                    </tr>
                    <tr>
                        <x-table.data>
                            <div>Zultan Viky</div>
                        </x-table.data>
                        <x-table.data>
                            <div>Ini bio bkn fisika</div>
                        </x-table.data>
                        <x-table.data>
                            <div>2003-09-02</div>
                        </x-table.data>
                        <x-table.data>
                            <div class="px-2 py-1 text-center text-gray-700 bg-green-200 rounded">
                                Default
                            </div>
                        </x-table.data>
                        <x-table.data>
                            <div class="text-center">2023-20-06</div>
                        </x-table.data>
                    </tr>
                    <tr>
                        <x-table.data>
                            <div>Alfa Indica</div>
                        </x-table.data>
                        <x-table.data>
                            <div>emg bleh se bio enih?</div>
                        </x-table.data>
                        <x-table.data>
                            <div>2003-09-22</div>
                        </x-table.data>
                        <x-table.data>
                            <div class="px-2 py-1 text-center text-gray-700 bg-green-200 rounded">
                                Default
                            </div>
                        </x-table.data>
                        <x-table.data>
                            <div class="text-center">2023-20-06</div>
                        </x-table.data>
                    </tr>
                </tbody>

            </table>
        </div>
    </section>
</x-app-layout>
