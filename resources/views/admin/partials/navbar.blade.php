<div>
    <nav class="bg-gray-800" x-data="{ open: false }">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items justify-between">
                <div>
                    <a class="text-white" href="{{ route('admin.dashboard') }}">
                        <h1 class="text-3xl font-bold">Jewelry</h1>
                    </a>
                </div>

                <div>
                    <button @click="open = !open" class="text-gray-300 focus:outline-none lg:hidden">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>

                    <ul :class="open ? 'block' : 'hidden'" class="hidden lg:flex lg:items-center lg:w-auto">
                        <li>
                            <a class="text-sm text-gray-300 hover:text-white px-4 py-2 flex items-center gap-2"
                                href="{{ route('admin.logout') }}">
                                Logout <i class="fas fa-sign-out-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>