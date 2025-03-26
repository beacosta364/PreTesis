<!-- Estilos para gestion de inventarios -->
<!-- <link rel="stylesheet" href="{{ asset('css/styles-perfil.css') }}"> -->


@can('eliminarcuenta.show')
<section class="space-y-6 bg-gray-200 dark:bg-gray-800 p-6 rounded-lg shadow">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-200">
            {{ __('Eliminar cuenta') }}
        </h2>

        <p class="mt-1 text-sm text-gray-700 dark:text-gray-300">
            {{ __('Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán permanentemente. Antes de eliminar su cuenta, descargue cualquier dato o información que desee conservar...') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="bg-red-600 dark:bg-red-500 hover:bg-red-700 dark:hover:bg-red-400 text-white"
    >
        {{ __('Eliminar cuenta') }}
    </x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 bg-gray-100 dark:bg-gray-700 rounded-lg">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-200">
                {{ __('¿Estás seguro de que quieres eliminar tu cuenta?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-700 dark:text-gray-300">
                {{ __('Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán permanentemente. Ingrese su contraseña para confirmar que desea eliminar permanentemente su cuenta.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-200"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-red-600 dark:text-red-400" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button 
                    x-on:click="$dispatch('close')" 
                    class="bg-gray-500 dark:bg-gray-600 hover:bg-gray-600 dark:hover:bg-gray-700 text-white"
                >
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ml-3 bg-red-600 dark:bg-red-500 hover:bg-red-700 dark:hover:bg-red-400 text-white">
                    {{ __('Eliminar cuenta') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
@endcan