<div id="sidebar" class="fixed z-40 h-[95vh] p-4 overflow-y-auto bg-sky-400 w-80 dark:bg-sky-800 inset-5 sidebar rounded-md shadow-md">

    <a href="{{ route('dashboard') }}">
        <span class="self-center text-xl font-semibold whitespace-nowrap text-white ml-2">{{ config('app.name') }}</span>
    </a>
    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 items-center dark:hover:bg-gray-600 dark:hover:text-white sidebar-toggle inline-flex md:hidden" id="close-sidebar-toggle">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Close menu</span>
    </button>

    <hr class="border border-white mt-5">
    <div class="overflow-y-auto">
        <ul class="space-y-2 mt-7">
            <li>
                <a href="{{ route('dashboard') }}" class="nav__link">
                    <span class="ml-3">Dashboard</span>
                </a>
                <form method="POST" action="{{ route('logout') }}" id="sidebar-logout-form" class="inline">
                    @csrf
                    <a href="#" onclick="event.preventDefault(); handleLogout();" class="nav__link">
                        <span class="ml-3">Logout</span>
                    </a>
                </form>
            </li>
         
        </ul>
    </div>
</div>
