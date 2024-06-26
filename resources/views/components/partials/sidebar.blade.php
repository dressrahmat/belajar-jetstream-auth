<div :class="{ 'w-28 ': !isOpen, 'w-48 lg:w-64': isOpen }"
    class="hidden md:block bg-primary text-white shadow z-30 transition-width duration-300 fixed inset-y-0">

    <!-- Logo -->
    <div class="flex items-center justify-between my-3">
        <div :class="{ 'text-2xl': isOpen, 'hidden': !isOpen }" class=" w-1/2 text-base-100">
            <p class="text-center">Simple Projek</p>
        </div>
        <button @click="isOpen = !isOpen" class="p-2 ml-4">
            <!-- Toggle -->
            <div x-show="isOpen">
                <i class="far fa-caret-square-left text-2xl"></i>
            </div>
            <div x-show="!isOpen">
                <i class="far fa-caret-square-right text-2xl"></i>
            </div>
        </button>
    </div>

    <!-- Sidebar Content -->
    <ul class="menu text-lg">
        <li>
            <a wire:navigate href="{{ route('dashboard') }}"
                class="flex items-center px-4 py-4 my-1 {{ request()->routeIs('dashboard') ? 'glass rounded-md active bg-base-100 shadow-sm text-neutral' : ' text-base-100' }}">
                <i class="fas fa-home"></i>
                <span class="ml-2" x-show="isOpen">Dashboard</span>
            </a>
        </li>
        <li>
            <a wire:navigate href="{{ route('customers.index') }}"
                class="flex items-center px-4 py-4 my-1 {{ request()->routeIs('customers.index') ? 'glass rounded-md active bg-base-100 shadow-sm text-neutral' : ' text-base-100' }}">
                <i class="fab fa-intercom"></i>
                <span class="ml-2" x-show="isOpen">Customer</span>
            </a>
        </li>
        <li>
            <a wire:navigate href="{{ route('services.index') }}"
                class="flex items-center px-4 py-4 my-1 {{ request()->routeIs('services.index') ? 'glass rounded-md active bg-base-100 shadow-sm text-neutral' : ' text-base-100' }}">
                <i class="fas fa-concierge-bell"></i>
                <span class="ml-2" x-show="isOpen">Services</span>
            </a>
        </li>
        <li>
            <a wire:navigate href="{{ route('rewards.index') }}"
                class="flex items-center px-4 py-4 my-1 {{ request()->routeIs('rewards.index') ? 'glass rounded-md active bg-base-100 shadow-sm text-neutral' : ' text-base-100' }}">
                <i class="fas fa-gift"></i>
                <span class="ml-2" x-show="isOpen">Rewards</span>
            </a>
        </li>
        <li>
            <a wire:navigate href="{{ route('select.index') }}"
                class="flex items-center px-4 py-4 my-1 {{ request()->routeIs('select.index') ? 'glass rounded-md active bg-base-100 shadow-sm text-neutral' : ' text-base-100' }}">
                <i class="fas fa-check-double"></i>
                <span class="ml-2" x-show="isOpen">Select 2</span>
            </a>
        </li>
        <li
            class="{{ request()->routeIs('permissions.*') || request()->routeIs('roles.*') || request()->routeIs('users.*') ? 'glass rounded-md' : '' }}">
            <details
                {{ request()->routeIs('permissions.*') || request()->routeIs('roles.*') || request()->routeIs('users.*') ? 'open' : '' }}>
                <summary
                    class="px-4 py-4 text-base-content hover:bg-base-content glass rounded-md hover:text-base-100 ">
                    <i class="fa fa-solid fa-toolbox"></i>
                    <span class="ml-2" x-show="isOpen">Setting</span>
                </summary>
                <ul :class="{ 'mt-2': isOpen, 'ml-0 mt-4': !isOpen }">
                    <li>
                        <a wire:navigate href="{{ route('permissions.index') }}"
                            class="flex items-center py-4 my-1 {{ request()->routeIs('permissions.index') ? 'glass rounded-md active bg-base-100 shadow-sm text-neutral' : ' text-base-100' }}">
                            <i class="fas fa-file-contract"></i>
                            <span class="ml-2" x-show="isOpen">Hak Akses</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('roles.index') ? 'bg-gray-900 glass rounded-md' : '' }}">
                        <a wire:navigate href="{{ route('roles.index') }}"
                            class="flex items-center py-4 my-1 {{ request()->routeIs('roles.index') ? 'glass rounded-md active bg-base-100 shadow-sm text-neutral' : ' text-base-100' }}">
                            <i class="fas fa-plus-circle"></i>
                            <span class="ml-2" x-show="isOpen">Jabatan</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('users.index') ? 'bg-gray-900 glass rounded-md' : '' }}">
                        <a wire:navigate href="{{ route('users.index') }}"
                            class="flex items-center py-4 my-1 {{ request()->routeIs('users.index') ? 'glass rounded-md active bg-base-100 shadow-sm text-neutral' : ' text-base-100' }}">
                            <i class="fas fa-users"></i>
                            <span class="ml-2" x-show="isOpen">User</span>
                        </a>
                    </li>
                </ul>
            </details>
        </li>
    </ul>
</div>
