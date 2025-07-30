@extends('layouts.plantilla')

@section('contenido')
<section class="p-6 bg-gray-200 dark:bg-gray-800 rounded-lg shadow">
    <section class="space-y-6 bg-gray-200 dark:bg-gray-800 p-6 rounded-lg shadow">
        <div class="py-12">
            
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                
                <div class="p-4 sm:p-8 bg-gray-200 dark:bg-gray-500 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-gray-300 dark:bg-gray-600 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
                
                <form action="{{ route('perfil.actualizar-foto') }}" method="POST" enctype="multipart/form-data">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                            {{ __('Actualizar foto de perfil:') }}
                        </h2>
                    </header>
                    @csrf
                    <input type="file" name="foto_perfil" accept="image/*" required>
                    <div class="flex items-center gap-4">
                    <x-primary-button class="bg-blue-600 dark:bg-blue-500 hover:bg-blue-700 dark:hover:bg-blue-400 text-white">
                        {{ __('Actualizar') }}
                    </x-primary-button>
                    </div>
                </form>

                <div class="p-6 sm:p-12 bg-gray-400 dark:bg-gray-500 shadow-lg sm:rounded-xl">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
