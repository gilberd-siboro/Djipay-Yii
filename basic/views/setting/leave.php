<?php

/** @var yii\web\View $this */

$this->title = 'Setting Leave';
?>
<div class="">
    <div class="lg:flex lg:items-center lg:justify-between">
        <div class="min-w-0 flex-1">
            <nav class="flex" aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div class="flex">
                            <a href="#" class="text-sm font-medium text-gray-500 hover:text-gray-700">Setting</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                            <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Leave</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <h2 class="mt-2 text-2xl text-gray-900 sm:truncate sm:text-2xl sm:tracking-tight">Setting</h2>
        </div>
        <div class="mt-5 flex lg:ml-4 lg:mt-0">
            <span class="sm:ml-3">
                <button id="openModalButton" type="button" class="inline-flex items-center rounded-md mx-3 bg-gray-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Add Leave Type
                </button>
            </span>
            <div id="modal" class="fixed inset-0 z-10 w-screen h-screen flex items-center justify-center hidden">
                <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <div class="relative bg-white rounded-lg overflow-hidden max-w-md w-full">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900">Add Leave Type</h3>
                        <div class="mt-2">
                            <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                            <div class="mt-2 border rounded-md">
                                <input type="text" employe="employe" id="employe" class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter Name">
                            </div>
                            <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Type</label>
                            <div class="mt-2 border rounded-md">
                                <div class="relative inline-block w-full text-left">
                                    <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-lg">
                                        <option>Select</option>
                                        <option>Opsi 1</option>
                                        <option>Opsi 2</option>
                                        <option>Opsi 3</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Amount</label>
                            <div class="mt-2 border rounded-md">
                                <input type="text" employe="employe" id="employe" class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Amount">
                            </div>
                            <div class="grid grid-cols-2 gap-6 mt-4">
                                <div>
                                    <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">Amount</label>
                                    <div class="relative inline-block w-full text-left">
                                        <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-lg">
                                            <option>Yes</option>
                                            <option>Opsi 1</option>
                                            <option>Opsi 2</option>
                                            <option>Opsi 3</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">Allow monthly earning</label>
                                    <div class="relative inline-block w-full text-left">
                                        <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-lg">
                                            <option>Yes</option>
                                            <option>Opsi 1</option>
                                            <option>Opsi 2</option>
                                            <option>Opsi 3</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 flex justify-start">
                            <button id="saveModalButton" type="button" class="inline-flex bg-gray-900 mr-3 justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white hover:bg-gray-600 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">
                                Save
                            </button>
                            <button id="closeModalButton" type="button" class="inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-700 bg-gray-200 hover:bg-gray-300 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class=" bg-white mt-4">
        <div class="flex mt-4">
            <!-- Main Content -->
            <div class="w-full px-6">
                <div class="bg-white p-4 mb-6">
                    <div class="flex justify-between items-center border-b pb-2 mb-4 overflow-x-auto">
                        <nav class="flex space-x-4 text-sm text-gray-600 " role="tablist">
                            <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none active" id="tabs-with-badges-item-1" data-hs-tab="#tabs-with-badges-1" aria-controls="tabs-with-badges-1" role="tab" aria-selected="true">
                                Setting
                            </button>
                            <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-2" data-hs-tab="#tabs-with-badges-2" aria-controls="tabs-with-badges-2" role="tab" aria-selected="false">
                                Policy
                            </button>
                            <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-3" data-hs-tab="#tabs-with-badges-3" aria-controls="tabs-with-badges-3" role="tab" aria-selected="false">
                                Approval
                            </button>
                        </nav>
                    </div>
                    <div class="" id="tabs-with-badges-1" role="tabpanel">
                        <div class="bg-white py-2 mb-6" role="">
                            <div>
                                <h1 class="font-bold text-lg">Leave Type</h1>
                                <div>
                                    <div class="bg-yellow-5 border-1 border-yellow-400  p-4 mb-4 rounded-lg mt-4">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ml-3 w-full">
                                                <h3 class="text-sm font-medium text-yellow-800">Note</h3>
                                                <div class="mt-2 text-sm text-yellow-700">
                                                    <ol class="list-decimal list-inside space-y-1">
                                                        <li>Any type of change will be effective on the next day.</li>
                                                        <li>To understand how leave settings work, please checkout the <a href="#" class="underline">documentation</a>.</li>
                                                        <li>You must setup the cron job in your hosted server for assigning work shift, generating payslip, sending bulk emails, assigning leaves and renew holidays.</li>
                                                        <li>Remained leave will not carry forward to next leave year.</li>
                                                    </ol>
                                                </div>
                                            </div>
                                            <button class="ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-100 inline-flex h-8 w-8 items-center justify-center" aria-label="Dismiss">
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="max-w-md ">
                                        <div class="relative">
                                            <div class="absolute inset-y-0  flex pl-3  pointer-events-none">
                                                <svg class="w-4 h-4 mt-3 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                                </svg>
                                            </div>
                                            <input type="search" id="search" class="block w-full py-2 px-5  text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500" placeholder="Search" required>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <table class="w-full">
                                            <thead>
                                                <tr class="bg-gray-50 text-left">
                                                    <th class="px-4 py-2">Name</th>
                                                    <th class="px-4 py-2">Type</th>
                                                    <th class="px-4 py-2">Ammount</th>
                                                    <th class="px-4 py-2">Enabled</th>
                                                    <th class="px-4 py-2">Allow monthly earning</th>
                                                    <th class="px-4 py-2">Action</th>
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
                                                        <td class="px-4 py-2">Support</td>
                                                        <td class="px-4 py-2 text-center">
                                                            <div class="flex h-6 items-center">
                                                                <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4  rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                            </div>
                                                        </td>
                                                        <td class="px-4 py-2">
                                                            <button class="update-btn" data-id="<?= $i ?>">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                                                </svg>
                                                            </button>
                                                            <button class="setting-btn" data-id="<?= $i ?>">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-red-600">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                                </svg>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php endfor; ?>
                                            </tbody>
                                        </table>
                                    </div>
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
                        </div>
                    </div>
                    <div id="tabs-with-badges-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-badges-item-2">
                        <div class="bg-white py-2 mb-6" role="">
                            <div>
                                <h1 class="font-bold text-lg my-4">Policy</h1>
                                <div>
                                    <div>
                                        <div class="bg-yellow-5 border-1 border-yellow-400  p-4 mb-4 rounded-lg mt-4">
                                            <div class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <div class="ml-3 w-full">
                                                    <h3 class="text-sm font-medium text-yellow-800">Note</h3>
                                                    <div class="mt-2 text-sm text-yellow-700">
                                                        <ol class="list-decimal list-inside space-y-1">
                                                            <li>Any type of change will be effective on the next day.</li>
                                                            <li>To understand how leave settings work, please checkout the <a href="#" class="underline">documentation</a>.</li>
                                                            <li>You must setup the cron job in your hosted server for assigning work shift, generating payslip, sending bulk emails, assigning leaves and renew holidays.</li>
                                                            <li>Remained leave will not carry forward to next leave year.</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                                <button class="ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-100 inline-flex h-8 w-8 items-center justify-center" aria-label="Dismiss">
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Start Month</label>
                                        <div class="mt-2 border rounded-md">
                                            <div class="relative inline-block w-full text-left">
                                                <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-lg">
                                                    <option>Januari</option>
                                                    <option>Opsi 1</option>
                                                    <option>Opsi 2</option>
                                                    <option>Opsi 3</option>
                                                </select>
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="max-full mt-4">
                                            <div class="flex items-center justify-between mb-2">
                                                <label class="text-sm font-medium text-gray-700">For paid leave</label>
                                                <span class="text-xs text-gray-500">(Add employment status to allow employee for auto allowance)</span>
                                            </div>
                                            <div class="relative">
                                                <div class="flex flex-wrap items-center gap-2 p-2 bg-white border border-gray-300 rounded-md">
                                                    <div class="flex items-center  bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-2 rounded-lg">
                                                        Tag name
                                                        <button class="ml-1 text-blue-600 hover:text-blue-800">
                                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="flex items-center bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-2 rounded-lg">
                                                        Tag name
                                                        <button class="ml-1 text-blue-600 hover:text-blue-800">
                                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <input type="text" class="flex-grow outline-none text-sm" placeholder="Add more...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="max-full mt-4">
                                            <div class="flex items-center justify-between mb-2">
                                                <label class="text-sm font-medium text-gray-700">For paid leave</label>
                                                <span class="text-xs text-gray-500">(Add employment status to allow employee for auto allowance)</span>
                                            </div>
                                            <div class="relative">
                                                <div class="flex flex-wrap items-center gap-2 p-2 bg-white border border-gray-300 rounded-md">
                                                    <div class="flex items-center  bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-2 rounded-lg">
                                                        Tag name
                                                        <button class="ml-1 text-blue-600 hover:text-blue-800">
                                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="flex items-center bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-2 rounded-lg">
                                                        Tag name
                                                        <button class="ml-1 text-blue-600 hover:text-blue-800">
                                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <input type="text" class="flex-grow outline-none text-sm" placeholder="Add more...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 flex justify-start">
                                <button type="button" class="ml-2 mr-2 inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">
                                    Save
                                </button>
                                <button id="closeModalButton" type="button" class="inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-700 bg-gray-200 hover:bg-gray-300 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="tabs-with-badges-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-badges-item-3">
                        <div class="bg-white py-2 mb-6" role="">
                            <div>
                                <h1 class="font-bold text-lg my-4">Approval</h1>
                                <div>
                                    <div class="mt-2">
                                        <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Request Approval Type</label>
                                        <div class="mt-2 border rounded-md">
                                            <div class="relative inline-block w-full text-left">
                                                <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-lg">
                                                    <option>Single Level</option>
                                                    <option>Opsi 1</option>
                                                    <option>Opsi 2</option>
                                                    <option>Opsi 3</option>
                                                </select>
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="max-full mt-4">
                                            <div class="flex items-center justify-between mb-2">
                                                <label class="text-sm font-medium text-gray-700">Spesial Audience By Role</label>
                                                <span class="text-xs text-gray-500">(Add employment status to allow employee for auto allowance)</span>
                                            </div>
                                            <div class="relative">
                                                <div class="flex flex-wrap items-center gap-2 p-2 bg-white border border-gray-300 rounded-md">
                                                    <div class="flex items-center  bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-2 rounded-lg">
                                                        Tag name
                                                        <button class="ml-1 text-blue-600 hover:text-blue-800">
                                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="flex items-center bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-2 rounded-lg">
                                                        Tag name
                                                        <button class="ml-1 text-blue-600 hover:text-blue-800">
                                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <input type="text" class="flex-grow outline-none text-sm" placeholder="Add more...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="max-full mt-4">
                                            <div class="flex items-center justify-between mb-2">
                                                <label class="text-sm font-medium text-gray-700">Special Audianc By Role</label>
                                                <span class="text-xs text-gray-500">(Add employment status to allow employee for auto allowance)</span>
                                            </div>
                                            <div class="relative">
                                                <div class="flex flex-wrap items-center gap-2 p-2 bg-white border border-gray-300 rounded-md">
                                                    <div class="flex items-center  bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-2 rounded-lg">
                                                        Tag name
                                                        <button class="ml-1 text-blue-600 hover:text-blue-800">
                                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="flex items-center bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-2 rounded-lg">
                                                        Tag name
                                                        <button class="ml-1 text-blue-600 hover:text-blue-800">
                                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <input type="text" class="flex-grow outline-none text-sm" placeholder="Add more...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 flex justify-start">
                                <button type="button" class="ml-2 mr-2 inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">
                                    Save
                                </button>
                                <button id="closeModalButton" type="button" class="inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-700 bg-gray-200 hover:bg-gray-300 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- JavaScript untuk mengatur tampilan modal -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const updateBtns = document.querySelectorAll('.update-btn');
        const settingBtns = document.querySelectorAll('.setting-btn');
        const updateModal = document.getElementById('updateModal');
        const settingModal = document.getElementById('settingModal');
        const closeUpdateModal = document.getElementById('closeUpdateModal');
        const closeSettingModal = document.getElementById('closeSettingModal');
        const saveSettingModal = document.getElementById('saveSettingModal');

        updateBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                // Di sini Anda bisa mengambil data berdasarkan ID dan mengisi form update
                updateModal.classList.remove('hidden');
            });
        });

        settingBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                // Di sini Anda bisa mengambil data berdasarkan ID dan mengisi form setting
                settingModal.classList.remove('hidden');
            });
        });

        closeUpdateModal.addEventListener('click', function() {
            updateModal.classList.add('hidden');
        });

        closeSettingModal.addEventListener('click', function() {
            settingModal.classList.add('hidden');
        });

        saveSettingModal.addEventListener('click', function() {
            settingModal.classList.add('hidden');
        });

        // Menutup modal jika mengklik di luar modal
        window.addEventListener('click', function(event) {
            if (event.target === updateModal) {
                updateModal.classList.add('hidden');
            }
            if (event.target === settingModal) {
                settingModal.classList.add('hidden');
            }
        });
    });
</script>



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
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('[role="tab"]');
        const tabPanels = document.querySelectorAll('[role="tabpanel"]');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Nonaktifkan semua tab
                tabs.forEach(t => t.setAttribute('aria-selected', 'false'));
                tabPanels.forEach(p => p.classList.add('hidden'));

                // Aktifkan tab yang diklik
                tab.setAttribute('aria-selected', 'true');
                const panelId = tab.getAttribute('aria-controls');
                const panel = document.getElementById(panelId);
                panel.classList.remove('hidden');
            });
        });
    });
</script>