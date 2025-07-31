@extends('layouts.plantilla')

@section('contenido')
<section class="p-6 bg-gray-200 dark:bg-gray-800 rounded-lg shadow">
        <div class="py-12">
            
            
                
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
                
                <div class="p-6 sm:p-12 bg-gray-400 dark:bg-gray-500 shadow-lg sm:rounded-xl">
                    <div class="max-w-xl">
                        @include('profile.partials.foto-perfil')
                    </div>
                </div>

                <div class="p-6 sm:p-12 bg-gray-400 dark:bg-gray-500 shadow-lg sm:rounded-xl">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection



