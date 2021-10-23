<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 mb-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <div class="p-6 mb-6 bg-white border-b border-gray-200">
                    <table>
                        @foreach ($users as $day => $users_list)
                            <tr>
                                <th colspan="3"><strong>{{ $day }}: {{ $users_list->count() }} users<strong></th>
                            </tr>
                            @foreach ($users_list as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                </tr>
                            @endforeach
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
