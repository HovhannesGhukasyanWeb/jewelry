<div class="w-full">
    <nav class="bg-gray-800 w-full">
        <div class="mx-auto px-6 py-3 w-full">
            <div class=" w-full flex items justify-between">
                <div>
                    <a class="text-white" href="{{ route('admin.dashboard') }}">
                        <h1 class="text-3xl font-bold">Jewelry</h1>
                    </a>
                </div>

                <div>
                    <ul class="items-center w-auto">
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