<div class="navbar bg-base-100 glass">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li>
                    <x-navlink href="/" class="active">Home</x-navlink>
                </li>
                <li>
                    <x-navlink href="/jobs">Jobs</x-navlink>
                </li>
                <li>
                    <x-navlink href="/contact">Contact</x-navlink>
                </li>
            </ul>
        </div>
        <x-navlink href="/contact" class="btn btn-ghost text-2xl">{{ config('app.name') }}</x-navlink>
      </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        <li>
            @if (request()->routeIs('home'))
                <x-navlink href="{{ route('home') }}" class="active">Home</x-navlink>
            @else 
                <x-navlink href="{{ route('home') }}">Home</x-navlink>
            @endif
        </li>
        <li>
            @if (request()->routeIs('jobs'))
                <x-navlink href="{{ route('jobs') }}" class="active">Jobs</x-navlink>
            @else 
                <x-navlink href="{{ route('jobs') }}">Jobs</x-navlink>
            @endif
        </li>
        <li>
            @if (request()->routeIs('contact'))
                <x-navlink href="{{ route('contact') }}" class="active mx-2">Contact</x-navlink>
            @else 
                <x-navlink href="{{ route('contact') }}">Contact</x-navlink>
            @endif
        </li>
      </ul>
    </div>
    <div class="navbar-end">
        <x-navlink href="#" class="btn">Login</x-navlink>
    </div>
  </div>
