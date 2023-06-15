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
                        <form action="{{ route('countries.update', [$country->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                            <div class="px-4 py-6">
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                                    <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                                    type="text" id="name" name="name" placeholder="Israel" required value="{{ $country->name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="iso">ISO</label>
                                    <input class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                                    type="iso" id="iso" name="iso" placeholder="IL" required value="{{ $country->iso }}">
                                </div>
                            </div>
                            <div class="bg-gray-100 px-4 py-2">
                                <div class="flex items-center justify-end">
                                    <button class="bg-blue-950 hover:bg-blue-900 text-white py-2 px-6 text-sm font-bold rounded focus:outline-none focus:shadow-outline" type="submit">
                                    EDIT
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
