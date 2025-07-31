<section class="space-y-6 bg-gray-200 dark:bg-gray-800 p-6 rounded-lg shadow">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-200">
            {{ __('Actualizar foto de perfil:') }}
        </h2> 
    </header>
    <form action="{{ route('perfil.actualizar-foto') }}" method="POST" enctype="multipart/form-data">
                    
                    @csrf
                    <input type="file" name="foto_perfil" accept="image/*" required>
                    <div class="flex items-center gap-4">
                    <x-primary-button class="bg-blue-600 dark:bg-blue-500 hover:bg-blue-700 dark:hover:bg-blue-400 text-white">
                        {{ __('Actualizar') }}
                    </x-primary-button>
                    </div>
                </form>
</section>