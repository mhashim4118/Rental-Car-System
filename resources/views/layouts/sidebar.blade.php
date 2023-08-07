<!-- Sidebar -->
<div class="sidebar">
    <ul>
        <li><a href="route('dashboard')" :active="request()->routeIs('dashboard')">Dasboard</a></li>
        <li><a href="route('vehiclesdetails')" :active="request()->routeIs('vehiclesdetails')">Vehicles</a></li>
        <li><a href="route('usersdetails')" :active="request()->routeIs('usersdetails')">User Details</a></li>
        <li><a href="route('profile.locationadd')" :active="request()->routeIs('profile.locationadd')"></a>Location</li>
        <li><a href="route('contactdetails')" :active="request()->routeIs('contactdetails')"></a>Users Message</li>
    </ul>
</div>

<!-- Content area -->
<div class="content">
    @yield('content')
</div>

{{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
    <x-nav-link :href="route('vehiclesdetails')" :active="request()->routeIs('vehiclesdetails')">
        {{ __('Vehicles') }}
    </x-nav-link>
    <x-nav-link :href="route('usersdetails')" :active="request()->routeIs('usersdetails')">
        {{ __('User Details') }}
    </x-nav-link>
    <x-nav-link :href="route('profile.locationadd')" :active="request()->routeIs('profile.locationadd')">
        {{ __('Location') }}
    </x-nav-link>
    <x-nav-link :href="route('contactdetails')" :active="request()->routeIs('contactdetails')">
        {{ __('Users Message') }}
    </x-nav-link>
</div> --}}