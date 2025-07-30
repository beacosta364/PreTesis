<section class="p-6 bg-gray-200 dark:bg-gray-800 rounded-lg shadow">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-200">
            {{ __('Actualizar contraseña') }}
        </h2>

        <p class="mt-1 text-sm text-gray-700 dark:text-gray-300">
            {{ __('Asegúrese de que su cuenta utilice una contraseña larga y aleatoria para mantenerse segura...') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Contraseña actual')" class="text-gray-900 dark:text-gray-200" />
            <x-text-input 
                id="current_password" 
                name="current_password" 
                type="password" 
                class="mt-1 block w-full bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-200" 
                autocomplete="current-password" 
            />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-red-600 dark:text-red-400" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Nueva Contraseña')" class="text-gray-900 dark:text-gray-200" />
            <x-text-input 
                id="password" 
                name="password" 
                type="password" 
                class="mt-1 block w-full bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-200" 
                autocomplete="new-password" 
            />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-red-600 dark:text-red-400" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" class="text-gray-900 dark:text-gray-200" />
            <x-text-input 
                id="password_confirmation" 
                name="password_confirmation" 
                type="password" 
                class="mt-1 block w-full bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-200" 
                autocomplete="new-password" 
            />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-red-600 dark:text-red-400" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-blue-600 dark:bg-blue-500 hover:bg-blue-700 dark:hover:bg-blue-400 text-white">
                {{ __('Guardar') }}
            </x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600 dark:text-green-400"
                >{{ __('Guardado.') }}</p>
            @endif
        </div>
    </form>
</section>

