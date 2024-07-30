<?php

/** @var yii\web\View $this */

$this->title = 'Setting Payroll';
?>
<div class="mt-4">
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
                            <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Payroll</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <h2 class="mt-2 text-2xl text-gray-900 sm:truncate sm:text-2xl sm:tracking-tight">Payroll</h2>
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
                                Default pay run
                            </button>
                            <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-2" data-hs-tab="#tabs-with-badges-2" aria-controls="tabs-with-badges-2" role="tab" aria-selected="false">
                                Value
                            </button>
                            <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-3" data-hs-tab="#tabs-with-badges-3" aria-controls="tabs-with-badges-3" role="tab" aria-selected="false">
                                Manage audiance
                            </button>
                            <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-4" data-hs-tab="#tabs-with-badges-4" aria-controls="tabs-with-badges-4" role="tab" aria-selected="false">
                                Payslip
                            </button>
                        </nav>
                    </div>
                    <div class="" id="tabs-with-badges-1" role="tabpanel">
                        <div class="bg-white py-2 mb-6" role="">
                            <div>
                                <h1 class="font-bold text-lg">Preference</h1>
                                <div>
                                    <div>
                                        <div class="bg-yellow-5 border-1 border-indigo-600  p-4 mb-4 rounded-lg mt-4 bg-indigo-100">
                                            <div class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-5 w-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <div class="ml-3 w-full ">
                                                    <h3 class="text-lg font-bold text-gray-900">How payrun works?</h3>
                                                    <div class="mt-2 text-sm text-gray-700">
                                                        <ol class=" list-decimal">
                                                            <li>
                                                                Default pay run is applicable to generate pays lip for all employees (Except those are updated individually) whenever it execute from Payrun module.
                                                            </li>
                                                            <li>
                                                                You can set pay run individually over the default from the Employees details.
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </div>
                                                <button id="closexbutton" class="ml-auto -mx-1.5 -my-1.5 bg-indigo-100 text-indigo-600 rounded-lg focus:ring-2 focus:ring-indigo-900 p-1.5 hover:bg-indigo-300 inline-flex h-8 w-8 items-center justify-center" aria-label="Dismiss">
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Payrun period</label>
                                        <div class="mt-2 border rounded-md">
                                            <div class="relative inline-block w-full text-left">
                                                <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-lg">
                                                    <option>Monthly</option>
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
                                        <label for="employe" class="block mt-4 text-sm font-medium leading-6 text-gray-900">Payrun generating type</label>
                                        <div class="mt-2 border rounded-md">
                                            <div class="relative inline-block w-full text-left">
                                                <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-lg">
                                                    <option>Hour</option>
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
                            <div class="mt-4 flex justify-start">
                                <button type="button" class=" mr-2 inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">
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
                                <h1 class="font-bold text-lg">How badge value work ?</h1>
                                <div>
                                    <div>
                                        <div class="bg-yellow-5 border-1 border-indigo-600  p-4 mb-4 rounded-lg mt-4 bg-indigo-100">
                                            <div class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-5 w-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <div class="ml-3 w-full ">
                                                    <h3 class="text-lg font-bold text-gray-900">How payrun works?</h3>
                                                    <div class="mt-2 text-sm text-gray-700">
                                                        <ol class=" list-decimal">
                                                            <li>Create badge for allowance or deduction from Beneficiary badge module.</li>
                                                            <li> Select badge and assign a value that will applicable for all employees (Except those are updated individually) while execute payrun.</li>
                                                            <li> You can set beneficiary individually over the default from the Employees details.</li>
                                                            <li> You can also update beneficiaries in Payslip generated for every employee.</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                                <button id="closexbutton2" class="ml-auto -mx-1.5 -my-1.5 bg-indigo-100 text-indigo-600 rounded-lg focus:ring-2 focus:ring-indigo-900 p-1.5 hover:bg-indigo-300 inline-flex h-8 w-8 items-center justify-center" aria-label="Dismiss">
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Alowance</label>
                                        <div class="mt-2 border rounded-md">
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
                                        <label for="employe" class="block mt-4 text-sm font-medium leading-6 text-gray-900">Deducation</label>
                                        <div class="mt-2 border rounded-md">
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
                                <button type="button" class="mr-2 inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">
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
                                <h1 class="font-bold text-lg">How badge value work ?</h1>
                                <div>
                                    <div>
                                        <div class="bg-yellow-5 border-1 border-indigo-600  p-4 mb-4 rounded-lg mt-4 bg-indigo-100">
                                            <div class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-5 w-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <div class="ml-3 w-full ">
                                                    <h3 class="text-lg font-bold text-gray-900">How payrun works?</h3>
                                                    <div class="mt-2 text-sm text-gray-700">
                                                        <ol class=" list-decimal">
                                                            <li>Create badge for allowance or deduction from Beneficiary badge module.</li>
                                                            <li> Select badge and assign a value that will applicable for all employees (Except those are updated individually) while execute payrun.</li>
                                                            <li> You can set beneficiary individually over the default from the Employees details.</li>
                                                            <li> You can also update beneficiaries in Payslip generated for every employee.</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                                <button id="closexbutton3" class="ml-auto -mx-1.5 -my-1.5 bg-indigo-100 text-indigo-600 rounded-lg focus:ring-2 focus:ring-indigo-900 p-1.5 hover:bg-indigo-300 inline-flex h-8 w-8 items-center justify-center" aria-label="Dismiss">
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Department preference</label>
                                        <div class="mt-2 border rounded-md">
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
                                        <label for="employe" class="block mt-4 text-sm font-medium leading-6 text-gray-900">User preference</label>
                                        <div class="mt-2 border rounded-md">
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
                                        <label for="employe" class="block mt-4 text-sm font-medium leading-6 text-gray-900">Employment Status preference</label>
                                        <div class="mt-2 border rounded-md">
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
                                        <label for="employe" class="block mt-4 text-sm font-medium leading-6 text-gray-900">Department preference</label>
                                        <div class="mt-2 border rounded-md">
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
                                        <label for="employe" class="block mt-4 text-sm font-medium leading-6 text-gray-900">User preference</label>
                                        <div class="mt-2 border rounded-md">
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
                                <button type="button" class="mr-2 inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">
                                    Save
                                </button>
                                <button id="closeModalButton" type="button" class="inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-700 bg-gray-200 hover:bg-gray-300 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="tabs-with-badges-4" class="hidden" role="tabpanel" aria-labelledby="tabs-with-badges-item-3">
                        <div class="bg-white py-2 mb-6" role="">
                            <div>
                                <h1 class="font-bold text-lg">Payslip</h1>
                                <div>
                                    <div class="mt-4">
                                        <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Payslip logo</label>
                                        <div class="mt-2 border rounded-md">
                                            <div class="relative inline-block w-full text-left">
                                                <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-lg">
                                                    <option>Default</option>
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
                                        <label for="employe" class="block mt-4 text-sm font-medium leading-6 text-gray-900">Payslip title</label>
                                        <div class="mt-2 border rounded-md">
                                            <div class="relative inline-block w-full text-left">
                                                <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-lg">
                                                    <option>Default</option>
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
                                        <label for="employe" class="block mt-4 text-sm font-medium leading-6 text-gray-900">Payslip address</label>
                                        <div class="mt-2 border rounded-md">
                                            <div class="relative inline-block w-full text-left">
                                                <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded-lg">
                                                    <option>Default</option>
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
                            <div class="mt-4 flex justify-start">
                                <button type="button" class=" mr-2 inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const closexbutton = document.getElementById('closexbutton');
        closexbutton.addEventListener('click', () => {
            closexbutton.parentElement.parentElement.parentElement.remove();
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const closexbutton = document.getElementById('closexbutton2');
        closexbutton.addEventListener('click', () => {
            closexbutton.parentElement.parentElement.parentElement.remove();
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const closexbutton = document.getElementById('closexbutton3');
        closexbutton.addEventListener('click', () => {
            closexbutton.parentElement.parentElement.parentElement.remove();
        });
    });
</script>