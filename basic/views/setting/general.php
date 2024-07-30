<?php

/** @var yii\web\View $this */

$this->title = 'Setting General';
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
                            <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">General</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <h2 class="mt-2 text-2xl text-gray-900 sm:truncate sm:text-2xl sm:tracking-tight">Default</h2>
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
    <div class=" bg-white mt-4">
        <div class="flex mt-4">
            <!-- Main Content -->
            <div class="w-full px-6">
                <div class="bg-white p-4 mb-6">
                    <div class="flex justify-between items-center border-b pb-2 mb-4 overflow-x-auto">
                        <nav class="flex space-x-4 text-sm text-gray-600 " role="tablist">
                            <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none active" id="tabs-with-badges-item-1" data-hs-tab="#tabs-with-badges-1" aria-controls="tabs-with-badges-1" role="tab" aria-selected="true">
                                Default
                            </button>
                            <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-2" data-hs-tab="#tabs-with-badges-2" aria-controls="tabs-with-badges-2" role="tab" aria-selected="false">
                                Module
                            </button>
                            <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-3" data-hs-tab="#tabs-with-badges-3" aria-controls="tabs-with-badges-3" role="tab" aria-selected="false">
                                Job
                            </button>
                            <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-4" data-hs-tab="#tabs-with-badges-4" aria-controls="tabs-with-badges-4" role="tab" aria-selected="false">
                                Email
                            </button>
                            <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-5" data-hs-tab="#tabs-with-badges-5" aria-controls="tabs-with-badges-5" role="tab" aria-selected="false">
                                Notification
                            </button>
                        </nav>
                    </div>
                    <div class="" id="tabs-with-badges-1" role="tabpanel">
                        <div class="bg-white py-2 mb-6" role="">
                            <div>
                                <h1 class="font-bold text-lg">Company Info</h1>
                                <div>
                                    <div class="mt-2">
                                        <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Employee</label>
                                        <div class="mt-2 border rounded-md">
                                            <input type="text" employe="employe" id="employe" class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter Employess">
                                        </div>
                                        <div class="grid grid-cols-2 gap-6 mt-4">
                                            <div>
                                                <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">Company Logo</label>
                                                <input type="file" id="date" name="date" placeholder="Choose date" class="block border w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">Company File</label>
                                                <input type="file" id="date" name="date" placeholder="Choose date" class="block border w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 gap-6 mt-4">
                                            <div>
                                                <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">Company Banner</label>
                                                <input type="file" id="date" name="date" placeholder="Choose date" class="block border w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">Language</label>
                                                <input type="text" id="date" name="date" placeholder="Choose Language" class="block border w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <h1 class="font-bold text-lg">Addres Detail</h1>
                                <div>
                                    <div class="mt-2">
                                        <div class="grid grid-cols-2 gap-6 mt-4">
                                            <div>
                                                <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                                                <div class="mt-2 border rounded-md">
                                                    <input type="text" employe="employe" id="employe" class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter Your Country">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">Area</label>
                                                <input type="text" id="date" name="date" placeholder="Mhancesterd" class="block border w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 gap-6 mt-4">
                                            <div>
                                                <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                                                <div class="mt-2 border rounded-md">
                                                    <input type="text" employe="employe" id="employe" class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter Your Country">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">State</label>
                                                <input type="text" id="date" name="date" placeholder="Mhancesterd" class="block border w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 gap-6 mt-4">
                                            <div>
                                                <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Zip Code</label>
                                                <div class="mt-2 border rounded-md">
                                                    <input type="text" employe="employe" id="employe" class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter Your Country">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">Addres</label>
                                                <input type="text" id="date" name="date" placeholder="Mhancesterd" class="block border w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <h1 class="font-bold text-lg">Date and time setting</h1>
                                <div>
                                    <div class="mt-2">
                                        <div class="grid grid-cols-2 gap-6 mt-4">
                                            <div>
                                                <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Date Formating</label>
                                                <div class="mt-2 border rounded-md">
                                                    <input type="date" employe="employe" id="employe" class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter Your Country">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">Time formating</label>
                                                <input type="date" id="date" name="date" placeholder="Mhancesterd" class="block border w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <h1 class="font-bold text-lg">Curency Setting</h1>
                                <div>
                                    <div class="mt-2">
                                        <div class="grid grid-cols-2 gap-6 mt-4">
                                            <div>
                                                <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Curency Simbol</label>
                                                <div class="mt-2 border rounded-md">
                                                    <input type="text" employe="employe" id="employe" class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="USD">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">Curency</label>
                                                <input type="text" id="date" name="date" placeholder="s" class="block border w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
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
                    <div id="tabs-with-badges-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-badges-item-2">
                        <div class="bg-white py-2 mb-6" role="">
                            <div>
                                <h1 class="font-bold text-lg my-4">Module List</h1>
                                <div>
                                    <p ml-4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, molestiae.</p>
                                    <div class="m-4">
                                        <fieldset>
                                            <div class="space-y-5">
                                                <div class="relative flex items-start">
                                                    <div class="flex h-6 items-center">
                                                        <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="ml-3 text-sm leading-6">
                                                        <label for="comments" class="font-medium text-gray-900">New comments</label>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start">
                                                    <div class="flex h-6 items-center">
                                                        <input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="ml-3 text-sm leading-6">
                                                        <label for="candidates" class="font-medium text-gray-900">New candidates</label>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start">
                                                    <div class="flex h-6 items-center">
                                                        <input id="offers" aria-describedby="offers-description" name="offers" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="ml-3 text-sm leading-6">
                                                        <label for="offers" class="font-medium text-gray-900">Offers</label>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start">
                                                    <div class="flex h-6 items-center">
                                                        <input id="comments" aria-describedby="comments-description" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="ml-3 text-sm leading-6">
                                                        <label for="comments" class="font-medium text-gray-900">New comments</label>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start">
                                                    <div class="flex h-6 items-center">
                                                        <input id="candidates" aria-describedby="candidates-description" name="candidates" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="ml-3 text-sm leading-6">
                                                        <label for="candidates" class="font-medium text-gray-900">New candidates</label>
                                                    </div>
                                                </div>
                                                <div class="relative flex items-start">
                                                    <div class="flex h-6 items-center">
                                                        <input id="offers" aria-describedby="offers-description" name="offers" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                    </div>
                                                    <div class="ml-3 text-sm leading-6">
                                                        <label for="offers" class="font-medium text-gray-900">Offers</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
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
                        <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-4xl">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-lg font-semibold text-gray-900">Leave</h3>
                                <button class="flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    <input type="date">

                                </button>
                            </div>
                            <div class="mt-4 rounded-lg border ">
                                <dl class="mx-auto grid grid-cols-1 gap-px bg-gray-900/5 sm:grid-cols-2 lg:grid-cols-3">
                                    <div class="flex flex-wrap items-baseline justify-between gap-x-4 bg-white px-4 sm:px-6 xl:px-8">
                                        <dt class="text-sm font-semibold leading-6 text-gray-900">15 days</dt>
                                        <dd class="w-full flex-none text-sm font-medium leading-10 tracking-tight text-gray-600">Leave Taken</dd>
                                    </div>
                                    <div class="flex flex-wrap items-baseline justify-between gap-x-4 bg-white px-4 sm:px-6 xl:px-8">
                                        <dt class="text-sm font-semibold leading-6 text-gray-900">2 days</dt>
                                        <dd class="w-full flex-none text-sm font-medium leading-10 tracking-tight text-gray-600">Upcoming left</dd>
                                    </div>
                                    <div class="flex flex-wrap items-baseline justify-between gap-x-4 bg-white px-4 sm:px-6 xl:px-8">
                                        <dt class="text-sm font-semibold leading-6 text-gray-900">32</dt>
                                        <dd class="w-full flex-none text-sm font-medium leading-10 tracking-tight text-gray-600">Pending request</dd>
                                    </div>
                                </dl>
                            </div>
                            <div class="mt-4 shadow-sm">
                                <div class="overflow-x-auto">
                                    <table class="min-w-full bg-white  rounded-lg">
                                        <thead class="bg-gray-100">
                                            <tr>
                                                <th class="text-sm px-2 py-2">Date& Time</th>
                                                <th class="text-sm px-2 py-2">Leave Duration</th>
                                                <th class="text-sm px-2 py-2">Leave Type</th>
                                                <th class="text-sm px-2 py-2">Attachement </th>
                                                <th class="text-sm px-2 py-2">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Contoh data -->
                                            <tr>
                                                <td class=" px-2 py-2 text-sm">2024-06</td>
                                                <td class=" px-2 py-2 text-sm">Meeting</td>
                                                <td class=" px-2 py-2 text-sm">09:00 </td>
                                                <td class=" px-2 py-2 text-sm">Latitude: </td>
                                                <td class=" px-2 py-2 text-sm">Latitude: </td>

                                            </tr>
                                            <tr>
                                                <td class=" px-2 py-2 text-sm">2024-06</td>
                                                <td class=" px-2 py-2 text-sm">Training</td>
                                                <td class=" px-2 py-2 text-sm">10:30 </td>
                                                <td class=" px-2 py-2 text-sm">Latitude: </td>
                                                <td class=" px-2 py-2 text-sm">Latitude: </td>
                                            </tr>
                                            <tr>
                                                <td class=" px-2 py-2 text-sm">2024-06</td>
                                                <td class=" px-2 py-2 text-sm">Training</td>
                                                <td class=" px-2 py-2 text-sm">10:30 </td>
                                                <td class=" px-2 py-2 text-sm">Latitude: </td>
                                                <td class=" px-2 py-2 text-sm">Latitude: </td>
                                            </tr>
                                            <tr>
                                                <td class=" px-2 py-2 text-sm">2024-06</td>
                                                <td class=" px-2 py-2 text-sm">Training</td>
                                                <td class=" px-2 py-2 text-sm">10:30 </td>
                                                <td class=" px-2 py-2 text-sm">Latitude: </td>
                                                <td class=" px-2 py-2 text-sm">Latitude: </td>
                                            </tr>
                                            <tr>
                                                <td class=" px-2 py-2 text-sm">2024-06</td>
                                                <td class=" px-2 py-2 text-sm">Training</td>
                                                <td class=" px-2 py-2 text-sm">10:30 </td>
                                                <td class=" px-2 py-2 text-sm">Latitude: </td>
                                                <td class=" px-2 py-2 text-sm">Latitude: </td>
                                            </tr>
                                            <tr>
                                                <td class=" px-2 py-2 text-sm">2024-06</td>
                                                <td class=" px-2 py-2 text-sm">Training</td>
                                                <td class=" px-2 py-2 text-sm">10:30 </td>
                                                <td class=" px-2 py-2 text-sm">Latitude: </td>
                                                <td class=" px-2 py-2 text-sm">Latitude: </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

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
                    <div id="tabs-with-badges-4" class="hidden" role="tabpanel" aria-labelledby="tabs-with-badges-item-4">
                        <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-4xl">
                            <div class="mt-2">
                                <h1 class="font-bold text-lg">Email</h1>
                                <div>
                                    <div class="mt-2">
                                        <div class="grid grid-cols-2 gap-6 mt-4">
                                            <div>
                                                <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                                                <div class="mt-2 border rounded-md">
                                                    <input type="text" employe="employe" id="employe" class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter Your Email">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">Api Region</label>
                                                <input type="text" id="date" name="date" placeholder="Mhancesterd" class="block border w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 gap-6 mt-4">
                                            <div>
                                                <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Akses Key ID</label>
                                                <div class="mt-2 border rounded-md">
                                                    <input type="text" employe="employe" id="employe" class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Akses Key ID">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">Secret acces ID</label>
                                                <input type="text" id="date" name="date" placeholder="Secret acces ID" class="block border w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 gap-6 mt-4">
                                            <div>
                                                <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Secret acces key</label>
                                                <div class="mt-2 border rounded-md">
                                                    <input type="text" employe="employe" id="employe" class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Secret acces key">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">From email</label>
                                                <input type="text" id="date" name="date" placeholder="From email" class="block border w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                </div>
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
                    <div id="tabs-with-badges-5" class="hidden" role="tabpanel" aria-labelledby="tabs-with-badges-item-5">
                        <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-4xl">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-lg font-semibold text-gray-900">Notification</h3>
                            </div>
                            <div class="mt-4 shadow-sm">
                                <div class="overflow-x-auto">
                                    <table class="min-w-full bg-white  rounded-lg">
                                        <thead class="bg-gray-100">
                                            <tr>
                                                <th class="text-sm px-2 py-2">Event Name</th>
                                                <th class="text-sm px-2 py-2">Notification Chanel</th>
                                                <th class="text-sm px-2 py-2">Templates</th>
                                                <th class="text-sm px-2 py-2">Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < 5; $i++) {
                                            ?>
                                                <tr>
                                                    <td class=" px-2 py-2 text-sm">2024-06</td>
                                                    <td class=" px-2 py-2 text-sm">Meeting</td>
                                                    <td class="px-2 py-2 text-sm">
                                                        <button class="update-btn" data-id="<?= $i ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                            </svg>
                                                        </button>

                                                    </td>
                                                    <td class="px-2 py-2 text-sm">
                                                        <button class="setting-btn" data-id="<?= $i ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                            </svg>
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
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
        </div>
    </div>
</div>


<!-- Modal Update -->
<div id="updateModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3 ">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Update Data</h3>
            <div class="mt-2 px-7 py-3">
                <!-- Form update di sini -->
            </div>
            <div class="items-center px-4 py-3">
                <button id="closeUpdateModal" class="px-4 py-2 bg-gray-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-300">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Setting -->
<div id="settingModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3 ">
            <div>
                <h3 class="text-lg font-semibold text-gray-900">Add Work Shift</h3>
                <div>
                    <div class="mt-2">
                        <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Chose Notification Chanel</label>
                        <div class="mt-2 border rounded-md">
                            <div class="relative inline-block w-full text-left">
                                <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-2 py-2 pr-8 rounded-lg  leading-tight ">
                                    <option>Choose</option>
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
                        <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Notification Audiences</label>
                        <div class="mt-2 border rounded-md">
                            <div class="relative inline-block w-full text-left">
                                <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-2 py-2 pr-8 rounded-lg  leading-tight ">
                                    <option>Choose</option>
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
                        <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Notification Chanel</label>
                        <div class="mt-2 border rounded-md">
                            <div class="relative inline-block w-full text-left">
                                <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-2 py-2 pr-8 rounded-lg  leading-tight ">
                                    <option>Choose</option>
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
            </div>
            <div class="flex px-2 py-3">
                <button id="saveSettingModal" class="px-4 py-2 bg-gray-900 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-300">
                    Save
                </button>
                <button id="closeSettingModal" class="px-4 py-2 border-2 ml-2 text-gray-900 text-base font-medium rounded-md w-full shadow-sm hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-300">
                    Cancel
                </button>
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