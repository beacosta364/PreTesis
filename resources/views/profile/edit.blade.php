@extends('layouts.plantilla')

@section('contenido')


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
            @csrf
            <label for="foto_perfil">Actualizar foto de perfil:</label>
            <input type="file" name="foto_perfil" accept="image/*" required>
            <button type="submit">Actualizar</button>
        </form>

        <div class="p-6 sm:p-12 bg-gray-400 dark:bg-gray-500 shadow-lg sm:rounded-xl">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>




    </div>
</div>


@endsection
