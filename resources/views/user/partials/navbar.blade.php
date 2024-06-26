<div class="flex items-center justify-around border-b border-lightgray py-2">
    <span class="text-sm">
        FREE SHIPPING ON ORDERS OVER <br>
        50.000 AMD
    </span>

    <div class="flex items-center gap-2">
        @if(!auth()->guard('user')->check())
            <div>
                <a href="/register" class="text-sm hover:text-orange-500">
                    Create an account
                </a>
            </div>
            <div>
                <a href="/login" class="text-sm hover:text-orange-500">
                    Login
                </a>
            </div>
        @else
            <div>
                <a href="/me" class="text-sm hover:bg-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 text-sm hover:text-orange-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </a>
            </div>
            <div>
                <a href="/logout" class="flex items-center gap-2 text-sm hover:text-orange-500">
                    Logout
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                    </svg>
                </a>
            </div>
        @endif
    </div>
</div>