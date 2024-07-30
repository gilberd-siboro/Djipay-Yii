<?php

/** @var yii\web\View $this */

$this->title = 'Setting Import';
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
                            <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Import</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <h2 class="mt-2 text-2xl text-gray-900 sm:truncate sm:text-2xl sm:tracking-tight">Import</h2>
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
                                Employes
                            </button>
                            <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-2" data-hs-tab="#tabs-with-badges-2" aria-controls="tabs-with-badges-2" role="tab" aria-selected="false">
                                Attendance
                            </button>
                        </nav>
                    </div>
                    <div class="" id="tabs-with-badges-1" role="tabpanel">
                        <div class="bg-white py-2 mb-6" role="">
                            <div>
                                <h1 class="font-bold text-lg">Employes</h1>
                                <div>
                                    <div>
                                        <div class="bg-yellow-5 border-1 border-orange-500  p-4 mb-4 rounded-lg mt-4 bg-orange-100">
                                            <div class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <div class="ml-3 w-full ">
                                                    <h3 class="text-lg font-bold text-gray-900">How payrun works?</h3>
                                                    <div class="mt-2 text-sm text-gray-700">
                                                        <ol class=" list-decimal">
                                                            <li>
                                                                Please make sure you setup the cron job on your hosted server as instructed on the documentation for sending emails.
                                                            <li>
                                                                To import employees you must set up email settings. Click here to add email settings. </li>
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </div>
                                                <button id="closexbutton" class="ml-auto -mx-1.5 -my-1.5 bg-orange-200 text-orange-600 rounded-lg focus:ring-2 focus:ring-orange-900 p-1.5 hover:bg-orange-300 inline-flex h-8 w-8 items-center justify-center" aria-label="Dismiss">
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
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
                                <h1 class="font-bold text-lg">Employes</h1>
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
                                                    <h3 class="text-lg font-bold text-gray-900">CSV format guideline</h3>
                                                    <div class="mt-2 text-sm text-gray-700">
                                                        <ol class=" list-decimal">
                                                            <li>
                                                                Format your CSV the same way as the sample file.
                                                            <li>
                                                                Your CSV columns should be separated by commas, not semicolons or any other characters.
                                                            </li>
                                                            <li>
                                                                The names and the number of the column in your CSV should be the same as the sample.
                                                            </li>
                                                            <li>
                                                                Required field's (employee_id, in_time, out_time) column cell must not be empty.
                                                            </li>
                                                            <li>
                                                                The column : employee_id value must be the same value that exists on the application and the in_time and out_time columns must be the date format of 'Y-m-d H:m:s' (the hour should be 24hour format)
                                                            </li>
                                                            <li>
                                                                Recommended CSV file should not contain more than 500 rows with default server configuration. </li>
                                                            </li>
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
                                        <label for="employe" class="block mt-4 text-sm font-medium leading-6 text-gray-900">Sample</label>
                                        <div class="mt-2 border rounded-md">
                                            <div class="relative inline-block w-full text-left">
                                                <input type="file" class=" w-full px-1 py-2 border rounded-md">
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