<x-guest-layout>
    <!--
        <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Ingresar') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
    -->
    
    <div class="bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen">
            <div class="hidden bg-contain lg:block lg:w-2/3" style="background-image: url(https://senzoracademy.com/img/admin/portada-inicio-sesion.png)">
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-70">
                </div>
            </div>
            
            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6 bg-contain" style="background-image: url(https://senzoracademy.com/img/admin/inicio-sesion-registro.png)">
                <div class="flex-1">
                
                <x-jet-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="flex items-center justify-center">
                        <a href="https://senzor.co">
                            <img src="{{asset('/img/admin/Senzor.png')}}" alt="logo-senzor" style="width:100px;">
                        </a>
                    </div>

                    <div class="text-center">
                        <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white">Senzor</h2>
                        
                        <p class="mt-3 text-gray-500 dark:text-gray-300">Inicia sesíon para acceder a tu cuenta!</p>
                    </div>

                    <div class="mt-8">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <label for="email" value="{{ __('Email') }}" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Correo Electronico</label>
                                <input type="email" name="email" id="email" placeholder="ejemplo@ejemplo.com" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" :value="old('email')" required autofocus />
                            </div>

                            <div class="mt-6">
                                <div class="flex justify-between mb-2">
                                    <label for="password" value="{{ __('Password') }}" class="text-sm text-gray-600 dark:text-gray-200">Contraseña</label>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">¿Olvidaste tu contraseña?</a>
                                    @endif
                                </div>

                                <input type="password" name="password" id="password" placeholder="Escribe tu contraseña" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" required autocomplete="current-password" />
                            </div>

                            <div class="mt-6">
                                <button
                                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                    Inicia sesión
                                </button>
                            </div>

                        </form>

                        <p class="mt-6 text-sm text-center text-gray-400">Aun no tienes una cuenta? <a href="{{route ('register')}}" class="text-blue-500 focus:outline-none focus:underline hover:underline">Registrate ahora!</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
