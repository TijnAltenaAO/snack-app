<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Bestellijst details
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg text-gray-600 dark:text-gray-400">
                <div class="relative overflow-x-auto">
                   <h1>Bestellijst #{{ $orderList->id }}</h1>
                   <p>Naam: {{ $orderList->name }}</p>
                   <p>Created at: {{ $orderList->created_at }}</p>
                   <p>Updated at: {{ $orderList->updated_at }}</p>
                </div>
                <br>
                <a class="gray" href="/place-order/create/{{ $orderList->id}}">Bestel hier!</a>
            </div>
        </div>
    </div>
</x-app-layout>