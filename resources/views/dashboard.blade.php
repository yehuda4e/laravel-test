<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <div class="p-6 grid grid-cols-5 gap-4">

                    <div class="w-full mx-auto bg-white rounded-lg overflow-hidden shadow-sm col-span-2">
                        <div class="bg-gray-100 p-4">
                            <h2 class="text-md text-gray-800">Add New Country</h2>
                        </div>
                        <form action="countries" method="post">
                        @csrf
                            <div class="px-4 py-6">
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                                    <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                                    type="text" id="name" name="name" placeholder="Israel" required>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="iso">ISO</label>
                                    <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                                    type="iso" id="iso" name="iso" placeholder="IL" required>
                                </div>
                            </div>
                            <div class="bg-gray-100 px-4 py-2">
                                <div class="flex items-center justify-end">
                                    <button class="bg-blue-950 hover:bg-blue-900 text-white py-2 px-6 text-sm font-bold rounded focus:outline-none focus:shadow-outline" type="submit">
                                    SAVE
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="w-full mx-auto bg-white rounded-lg overflow-hidden shadow-sm col-span-3">
                    <div class="bg-gray-100 p-4 mb-2">
                            <h2 class="text-md text-gray-800">List Of Countries</h2>
                        </div>
                        <table class="table-auto w-full border-collapse">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>ISO</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($countries as $country)
                                <tr class="text-center" style="border-top: 1px solid lightgray;padding: 1rem;">
                                    <td>{{ $country->id }}</td>
                                    <td>{{ $country->name }}</td>
                                    <td>{{ $country->iso }}</td>
                                    <td>
                                        <a href="{{ route('countries.edit', [$country->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-2 rounded hover:cursor-pointer inline-block">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
