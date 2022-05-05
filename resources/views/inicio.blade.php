@extends('layauds.plantilla')

@section('cuerpo')

<nav class="border">
            <div class="border-slate-500">
                <div class="border-slate-500"" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->
                    <ul class="flex">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="mr-6">
                                    <a class="text-blue-500 hover:text-blue-800" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="mr-6">
                                    <a class="text-blue-500 hover:text-blue-800" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

@endsection

