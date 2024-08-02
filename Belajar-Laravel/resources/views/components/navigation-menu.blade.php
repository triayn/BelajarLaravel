<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Livewire</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <x-nav-link :active="request()->routeIs('home')" href='/'>Home</x-nav-link>
                <x-nav-link :active="request()->routeIs('users')" href='/users'>User</x-nav-link>
                <x-nav-link :active="request()->routeIs('users.show')" href='/users/{user}'>Show</x-nav-link>
            </ul>
        </div>
    </div>
</nav>