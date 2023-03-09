<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Plaats een bestelling!
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg text-gray-600 dark:text-gray-400">
                <div class="relative overflow-x-auto">
                    <form method="POST" action="/place-order">
                        @csrf
                        <div>
                            <x-input-label for="title" :value="__('Naam')"/>
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                          :value="old('title')" autofocus />
                            <x-input-error :messages="$errors->get('title')" class="mt-2"/>
                            <x-input-label for="title" :value="__('Bestelling')"/>
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                          :value="old('title')" autofocus />
                            <x-input-error :messages="$errors->get('title')" class="mt-2"/>
                        </div>

                        <div class="mt-4">
                            <x-primary-button>
                                {{ __('Bestel nu!') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
