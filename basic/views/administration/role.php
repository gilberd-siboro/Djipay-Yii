<?php

/** @var yii\web\View $this */

$this->title = 'Administration Role';
?>
<div class="">
    <div class="lg:flex lg:items-center lg:justify-between">
        <div class="min-w-0 flex-1">
            <nav class="flex" aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div class="flex">
                            <a href="#" class="text-sm font-medium text-gray-500 hover:text-gray-700">Administration</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                            <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Role</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <h2 class="mt-2 text-2xl text-gray-900 sm:truncate sm:text-2xl sm:tracking-tight">Role</h2>
        </div>
        <div class="mt-5 flex lg:ml-4 lg:mt-0">
            <span class="sm:ml-3">
                <button id="openModalButton" type="button" class="inline-flex items-center rounded-md mx-3 bg-gray-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>

                    Add User
                </button>
                <button id="openModalButton2" type="button" class="inline-flex items-center rounded-md mx-3 bg-gray-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                    </svg>
                    Invite User
                </button>
            </span>
            <!-- Modal add user -->
            <div id="modal" class="fixed inset-0 z-10 w-screen h-screen flex items-center justify-center hidden">
                <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <div class="relative bg-white rounded-lg overflow-hidden max-w-md w-full">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900">Add User</h3>
                        <div>
                            <p class="text-gray-900 text-sm">No email setting found</p>
                            <ul class="list-decimal mx-4 text-gray-900 text-sm">
                                <li>Please make sure you setup the job on your hosted server as instructed on the <a href="#" class="text-blue-600">documentation</a>for sending emails.</li>
                                <li>For sending invitation you must set up email settings. Click <a href="" class="text-blue-600">here</a> to add email settings.</li>
                            </ul>
                        </div>
                        <div class="mt-4 flex justify-start">
                            <button id="closeModalButton" type="button" class="inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-700 bg-gray-200 hover:bg-gray-300 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">
                                Close
                            </button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal invite user -->
            <div id="modal2" class="fixed inset-0 z-10 w-screen h-screen flex items-center justify-center hidden">
                <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <div class="relative bg-white rounded-lg overflow-hidden max-w-md w-full">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900">Invite User</h3>
                        <div>
                            <p class="text-gray-900 text-sm">No email setting found</p>
                            <ul class="list-decimal mx-4 text-gray-900 text-sm">
                                <li>Please make sure you setup the job on your hosted server as instructed on the <a href="#" class="text-blue-600">documentation</a>for sending emails.</li>
                                <li>For sending invitation you must set up email settings. Click <a href="" class="text-blue-600">here</a> to add email settings.</li>
                            </ul>
                        </div>
                        <div class="mt-4 flex justify-start">
                            <button id="closeModalButton2" type="button" class="inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-700 bg-gray-200 hover:bg-gray-300 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">
                                Close
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" bg-white rounded-lg shadow-md mt-4">
        <div class=" bg-white  p-4 flex justify-between items-center">
            <div class="flex border rounded-lg">
                <button class="px-4 py-2 bg-blue-100 text-blue-700 border-r  font-medium">Apply Between</button>
                <button class="px-4 py-2 text-gray-600 hover:bg-gray-100 border-r  font-medium">Department</button>
                <button class="px-4 py-2 text-gray-600 hover:bg-gray-100 border-r  font-medium">Work Shift</button>
                <button class="px-4 py-2 text-gray-600 hover:bg-gray-100 border-r  font-medium">Rejected</button>
                <button class="px-4 py-2 text-gray-600 hover:bg-gray-100   font-medium">Duration</button>
            </div>
            <div class="">
                <div class="flex border rounded-lg">
                    <div x-data="Components.menu({ open: true })" x-init="init()" @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)" class="relative inline-block text-left">
                        <div>
                            <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" x-ref="button" @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
                                Mark Osimpson
                                <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state." x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()" @keyup.space.prevent="open = false; focusButton()" style="display: none;">
                            <div class="py-1" role="none">
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100 text-gray-900': activeIndex === 0, 'text-gray-700': !(activeIndex === 0) }" role="menuitem" tabindex="-1" id="menu-item-0" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 0)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Account settings</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" :class="{ 'bg-gray-100 text-gray-900': activeIndex === 1, 'text-gray-700': !(activeIndex === 1) }" role="menuitem" tabindex="-1" id="menu-item-1" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 1)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Support</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm" :class="{ 'bg-gray-100 text-gray-900': activeIndex === 2, 'text-gray-700': !(activeIndex === 2) }" role="menuitem" tabindex="-1" id="menu-item-2" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 2)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">License</a>
                                <form method="POST" action="#" role="none">
                                    <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" :class="{ 'bg-gray-100 text-gray-900': activeIndex === 3, 'text-gray-700': !(activeIndex === 3) }" role="menuitem" tabindex="-1" id="menu-item-3" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 3)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Sign out</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="mx-4 mb-2">
            <form class="relative flex flex-1 border rounded-lg" action="#" method="GET">
                <label for="search-field" class="sr-only">Search</label>
                <svg class="pointer-events-none absolute inset-y-0 left-0 h-full w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                </svg>
                <input id="search-field" class="border rounded-lg block py-2 h-full w-full border-0  pl-8 pr-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm" placeholder="Search..." type="search" name="search">
            </form>
        </div>
        <table class="w-full">
            <thead>
                <tr class="bg-gray-50 text-left">
                    <th class="px-4 py-2">Role Name</th>
                    <th class="px-4 py-2">Permission</th>
                    <th class="px-4 py-2">Users</th>
                    <th class="px-4 py-2">Manage Users</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < 5; $i++) : ?>
                    <tr class="py-2">
                        <td class="px-4 py-2">
                            <img class="inline-block h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""> Bayu
                        </td>
                        <td class="px-4 py-2">AQRS0328</td>
                        <td class="px-4 py-2"><span class="">Part-time</span></td>
                        <td class="px-4 py-2"><button class="" id="openModalButton3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                                </svg>
                            </button>

                            <!-- Modal invite user -->
                            <div id="modal3" class="fixed inset-0 z-10 w-screen h-screen flex items-center justify-center hidden">
                                <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                                <div class="relative bg-white rounded-lg overflow-hidden max-w-md w-full">
                                    <div class="p-6">
                                        <h3 class="text-lg font-semibold text-gray-900">Manage User</h3>
                                        <div>
                                            <div class="max-w-md mx-auto mt-2">
                                                <div class="flex items-center justify-between mb-4">
                                                    <div class="flex items-center">
                                                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Jeremy Neigh" class="w-10 h-10 rounded-full mr-3">
                                                        <span class="font-medium">Jeremy Neigh</span>
                                                    </div>
                                                    <button class="text-gray-500 hover:text-gray-700">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </div>

                                                <h2 class="text-lg font-semibold mb-4">Add user</h2>

                                                <div class="relative">
                                                    <input type="text" placeholder="Search name" class="w-full pl-3 pr-10 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                                                    <button class="absolute right-2 top-1/2 transform -translate-y-1/2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 flex justify-start">
                                            <button id="closeModalButton4" type="button" class="inline-flex mr-2 justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white  bg-gray-900 hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">
                                                Save
                                            </button>
                                            <button id="closeModalButton3" type="button" class="inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-700 bg-gray-200 hover:bg-gray-300 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">
                                                Close
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
        <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
            <div class="flex flex-1 justify-between sm:hidden">
                <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
            </div>
            <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700">
                        Showing
                        <span class="font-medium">1</span>
                        to
                        <span class="font-medium">10</span>
                        of
                        <span class="font-medium">97</span>
                        results
                    </p>
                </div>
                <div>
                    <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Previous</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-blue-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                        <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Next</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const openModalButton = document.getElementById('openModalButton');
    const closeModalButton = document.getElementById('closeModalButton');
    const modal = document.getElementById('modal');

    // Fungsi untuk menampilkan modal
    function openModal() {
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden'); // Optional: Untuk mengunci scroll di belakang modal
    }

    // Fungsi untuk menyembunyikan modal
    function closeModal() {
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden'); // Optional: Mengembalikan scroll di belakang modal
    }

    // Event listener untuk tombol buka modal
    openModalButton.addEventListener('click', openModal);

    // Event listener untuk tombol tutup modal
    closeModalButton.addEventListener('click', closeModal);
</script>

<script>
    const openModalButton2 = document.getElementById('openModalButton2');
    const closeModalButton2 = document.getElementById('closeModalButton2');
    const modal2 = document.getElementById('modal2');

    // Fungsi untuk menampilkan modal
    function openModal() {
        modal2.classList.remove('hidden');
        document.body.classList.add('overflow-hidden'); // Optional: Untuk mengunci scroll di belakang modal
    }

    // Fungsi untuk menyembunyikan modal
    function closeModal() {
        modal2.classList.add('hidden');
        document.body.classList.remove('overflow-hidden'); // Optional: Mengembalikan scroll di belakang modal
    }

    // Event listener untuk tombol buka modal
    openModalButton2.addEventListener('click', openModal);

    // Event listener untuk tombol tutup modal
    closeModalButton2.addEventListener('click', closeModal);
</script>

<script>
    const openModalButton3 = document.getElementById('openModalButton3');
    const closeModalButton3 = document.getElementById('closeModalButton3');
    const modal3 = document.getElementById('modal3');

    // Fungsi untuk menampilkan modal
    function openModal() {
        modal3.classList.remove('hidden');
        document.body.classList.add('overflow-hidden'); // Optional: Untuk mengunci scroll di belakang modal
    }

    // Fungsi untuk menyembunyikan modal
    function closeModal() {
        modal3.classList.add('hidden');
        document.body.classList.remove('overflow-hidden'); // Optional: Mengembalikan scroll di belakang modal
    }

    // Event listener untuk tombol buka modal
    openModalButton3.addEventListener('click', openModal);

    // Event listener untuk tombol tutup modal
    closeModalButton3.addEventListener('click', closeModal);
    // Event listener untuk tombol buka modal
    openModalButton4.addEventListener('click', openModal);

    // Event listener untuk tombol tutup modal
    closeModalButton4.addEventListener('click', closeModal);
</script>