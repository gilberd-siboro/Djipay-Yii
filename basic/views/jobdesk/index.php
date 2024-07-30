<?php

/** @var yii\web\View $this */

$this->title = 'Jobdesk';
?>
<div>
    <div class="lg:flex lg:items-center lg:justify-between">
        <div class="min-w-0 flex-1">
            <nav class="flex" aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div class="flex">
                            <a href="#" class="text-sm font-medium text-gray-500 hover:text-gray-700">Job Desk</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                            <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Allowence</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <h2 class="mt-2 text-2xl text-gray-900 sm:truncate sm:text-2xl sm:tracking-tight">Job Desk</h2>
        </div>
        <div class="mt-5 flex lg:ml-4 lg:mt-0">
            <span class="sm:ml-3">
                <button type="button" class="inline-flex items-center rounded-md bg-gray-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Action
                </button>
            </span>
        </div>
    </div>
    <div class="flex mt-4">
        <!-- Sidebar -->
        <div class="w-1/4 bg-white p-6 rounded-lg shadow">
            <div class="flex items-center mb-6">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile Picture" class="rounded-full w-12 h-12">
                <div class="ml-4">
                    <h2 class="text-lg font-semibold">Kimi Räikkönen</h2>
                    <p class="text-sm text-gray-500">UX Designer</p>
                </div>
            </div>
            <div class="mb-4">
                <h3 class="text-md font-semibold mb-2">Info</h3>
                <div class="space-y-2">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184" />
                        </svg>

                        <div class="ml-2">
                            <p class="font-medium">Admin & HRM</p>
                            <p class="text-sm text-gray-500">Department</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                        <div class="ml-2">
                            <p class="font-medium">Regular</p>
                            <p class="text-sm text-gray-500">Work Shift</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                        </svg>

                        <div class="ml-2">
                            <p class="font-medium">12 February 2023</p>
                            <p class="text-sm text-gray-500">Joining Date</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="text-md font-semibold mb-2">Contact</h3>
                <div class="space-y-2">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>

                        <div class="ml-2">
                            <p class="text-sm text-gray-500">Email</p>
                            <p class="font-medium">alwissuryatmaja@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>

                        <div class="ml-2">
                            <p class="text-sm text-gray-500">Phone</p>
                            <p class="font-medium">+6282283386756</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>

                        <div class="ml-2">
                            <p class="text-sm text-gray-500">Website</p>
                            <p class="font-medium">https://bit.ly/3uOJF79</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div class="w-3/4 px-6">
            <div class="bg-white p-4 rounded-lg shadow mb-6">
                <div class="flex justify-between items-center border-b pb-2 mb-4 overflow-x-auto">
                    <nav class="flex space-x-4 text-sm text-gray-600 " role="tablist">
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none active" id="tabs-with-badges-item-1" data-hs-tab="#tabs-with-badges-1" aria-controls="tabs-with-badges-1" role="tab" aria-selected="true">
                            Allowance
                        </button>
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-2" data-hs-tab="#tabs-with-badges-2" aria-controls="tabs-with-badges-2" role="tab" aria-selected="false">
                            Attendance
                        </button>
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-3" data-hs-tab="#tabs-with-badges-3" aria-controls="tabs-with-badges-3" role="tab" aria-selected="false">
                            Leave
                        </button>
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-4" data-hs-tab="#tabs-with-badges-4" aria-controls="tabs-with-badges-4" role="tab" aria-selected="false">
                            Folder
                        </button>
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-5" data-hs-tab="#tabs-with-badges-5" aria-controls="tabs-with-badges-5" role="tab" aria-selected="false">
                            Assets
                        </button>
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-6" data-hs-tab="#tabs-with-badges-6" aria-controls="tabs-with-badges-6" role="tab" aria-selected="false">
                            History
                        </button>
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-7" data-hs-tab="#tabs-with-badges-7" aria-controls="tabs-with-badges-7" role="tab" aria-selected="false">
                            Salary
                        </button>
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-8" data-hs-tab="#tabs-with-badges-8" aria-controls="tabs-with-badges-8" role="tab" aria-selected="false">
                            Pay Run
                        </button>
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-9" data-hs-tab="#tabs-with-badges-9" aria-controls="tabs-with-badges-9" role="tab" aria-selected="false">
                            Slip
                        </button>
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-10" data-hs-tab="#tabs-with-badges-10" aria-controls="tabs-with-badges-10" role="tab" aria-selected="false">
                            Addres
                        </button>
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-11" data-hs-tab="#tabs-with-badges-11" aria-controls="tabs-with-badges-11" role="tab" aria-selected="false">
                            Contact
                        </button>
                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-badges-item-12" data-hs-tab="#tabs-with-badges-12" aria-controls="tabs-with-badges-12" role="tab" aria-selected="false">
                            Social
                        </button>
                    </nav>
                </div>
                <div class="" id="tabs-with-badges-1" role="tabpanel">
                    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-6" role="alert">
                        <p class="font-bold">Allowance Policy</p>
                        <p>1. Leave will start from the month of January</p>
                        <p>2. Any type of change will be effective on the next day.</p>
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                        <!-- Paid Casual -->
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h3 class="text-sm font-semibold text-gray-700 mb-2">Paid Casual</h3>
                            <div class="mb-4">
                                <p class="text-gray-900 font-medium">Paid</p>
                                <p class="text-gray-500">Type</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-900 font-medium">07.00</p>
                                <p class="text-gray-500">Allowance</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-900 font-medium">$21,000</p>
                                <p class="text-gray-500">Earned</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-900 font-medium">$3</p>
                                <p class="text-gray-500">Taken</p>
                            </div>
                            <div>
                                <p class="text-gray-900 font-medium">$5</p>
                                <p class="text-gray-500">Availability</p>
                            </div>
                        </div>
                        <!-- Paid Sick -->
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h3 class="text-sm font-semibold text-gray-700 mb-2">Paid Sick</h3>
                            <div class="mb-4">
                                <p class="text-gray-900 font-medium">Paid</p>
                                <p class="text-gray-500">Type</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-900 font-medium">07.00</p>
                                <p class="text-gray-500">Allowance</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-900 font-medium">$21,000</p>
                                <p class="text-gray-500">Earned</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-900 font-medium">$3</p>
                                <p class="text-gray-500">Taken</p>
                            </div>
                            <div>
                                <p class="text-gray-900 font-medium">$5</p>
                                <p class="text-gray-500">Availability</p>
                            </div>
                        </div>
                        <!-- Unpaid Casual -->
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h3 class="text-sm font-semibold text-gray-700 mb-2">Unpaid Casual</h3>
                            <div class="mb-4">
                                <p class="text-gray-900 font-medium">Paid</p>
                                <p class="text-gray-500">Type</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-900 font-medium">07.00</p>
                                <p class="text-gray-500">Allowance</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-900 font-medium">$21,000</p>
                                <p class="text-gray-500">Earned</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-900 font-medium">$3</p>
                                <p class="text-gray-500">Taken</p>
                            </div>
                            <div>
                                <p class="text-gray-900 font-medium">$5</p>
                                <p class="text-gray-500">Availability</p>
                            </div>
                        </div>
                        <!-- Unpaid Sick -->
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h3 class="text-sm font-semibold text-gray-700 mb-2">Unpaid Sick</h3>
                            <div class="mb-4">
                                <p class="text-gray-900 font-medium">Paid</p>
                                <p class="text-gray-500">Type</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-900 font-medium">07.00</p>
                                <p class="text-gray-500">Allowance</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-900 font-medium">$21,000</p>
                                <p class="text-gray-500">Earned</p>
                            </div>
                            <div class="mb-4">
                                <p class="text-gray-900 font-medium">$3</p>
                                <p class="text-gray-500">Taken</p>
                            </div>
                            <div>
                                <p class="text-gray-900 font-medium">$5</p>
                                <p class="text-gray-500">Availability</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tabs-with-badges-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-badges-item-2">
                    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-4xl">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">Attendance</h3>
                            <button class="flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">
                                <input type="date">

                            </button>
                        </div>
                        <div class="flex items-end h-64 space-x-4 p-4">
                            <div class="w-1/4 h-full bg-green-200 rounded-t-lg p-2">
                                <div class="text-sm font-bold">23 Days</div>
                                <div class="text-xs">Regular</div>
                            </div>
                            <div class="w-1/4 h-3/4 bg-blue-200 rounded-t-lg p-2">
                                <div class="text-sm font-bold">18 days</div>
                                <div class="text-xs">Early</div>
                            </div>
                            <div class="w-1/4 h-1/2 bg-yellow-200 rounded-t-lg p-2">
                                <div class="text-sm font-bold">12 days</div>
                                <div class="text-xs">Later</div>
                            </div>
                            <div class="w-1/4 h-1/3 bg-red-200 rounded-t-lg p-2">
                                <div class="text-sm font-bold">10 days</div>
                                <div class="text-xs">None</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 rounded-lg border shadow-sm">
                        <div class="flex justify-between items-center p-4 bg-white rounded-lg shadow-md">
                            <div class="text-center border-r-2">
                                <div class="text-sm font-bold">152:00:00</div>
                                <div class="text-xs text-gray-500 mt-2">Total schedule hour</div>
                            </div>
                            <div class="text-left border-r-2">
                                <div class="text-sm font-bold">00:00:00</div>
                                <div class="text-xs text-gray-500 mt-2">Leave hour</div>
                            </div>
                            <div class="text-left border-r-2">
                                <div class="text-sm font-bold text-blue-500">%97.89</div>
                                <div class="text-xs text-gray-500 mt-2">Total work availability</div>
                            </div>
                            <div class="text-left border-r-2">
                                <div class="text-sm font-bold text-green-500">456 hour</div>
                                <div class="text-xs text-gray-500 mt-2">Total active hour</div>
                            </div>
                            <div class="text-left border-r-2">
                                <div class="text-sm font-bold text-red-500">-52 hour</div>
                                <div class="text-xs text-gray-500 mt-2">Balance</div>
                            </div>
                            <div class="text-left border-r-2">
                                <div class="text-sm font-bold">Early</div>
                                <div class="text-xs text-gray-500 mt-2">Average Behaviour</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 shadow-sm">
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white  rounded-lg">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-sm px-2 py-2">Date</th>
                                        <th class="text-sm px-2 py-2">Title</th>
                                        <th class="text-sm px-2 py-2">Punched in</th>
                                        <th class="text-sm px-2 py-2">In Geolocation</th>
                                        <th class="text-sm px-2 py-2">Out Geolocation</th>
                                        <th class="text-sm px-2 py-2">Behavior</th>
                                        <th class="text-sm px-2 py-2">Type</th>
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
                                        <td class=" px-2 py-2 text-sm">On time</td>
                                        <td class=" px-2 py-2 text-sm">Meeting</td>
                                    </tr>
                                    <tr>
                                        <td class=" px-2 py-2 text-sm">2024-06</td>
                                        <td class=" px-2 py-2 text-sm">Training</td>
                                        <td class=" px-2 py-2 text-sm">10:30 </td>
                                        <td class=" px-2 py-2 text-sm">Latitude: </td>
                                        <td class=" px-2 py-2 text-sm">Latitude: </td>
                                        <td class=" px-2 py-2 text-sm">Late</td>
                                        <td class=" px-2 py-2 text-sm">Training</td>
                                    </tr>
                                    <tr>
                                        <td class=" px-2 py-2 text-sm">2024-06</td>
                                        <td class=" px-2 py-2 text-sm">Training</td>
                                        <td class=" px-2 py-2 text-sm">10:30 </td>
                                        <td class=" px-2 py-2 text-sm">Latitude: </td>
                                        <td class=" px-2 py-2 text-sm">Latitude: </td>
                                        <td class=" px-2 py-2 text-sm">Late</td>
                                        <td class=" px-2 py-2 text-sm">Training</td>
                                    </tr>
                                    <tr>
                                        <td class=" px-2 py-2 text-sm">2024-06</td>
                                        <td class=" px-2 py-2 text-sm">Training</td>
                                        <td class=" px-2 py-2 text-sm">10:30 </td>
                                        <td class=" px-2 py-2 text-sm">Latitude: </td>
                                        <td class=" px-2 py-2 text-sm">Latitude: </td>
                                        <td class=" px-2 py-2 text-sm">Late</td>
                                        <td class=" px-2 py-2 text-sm">Training</td>
                                    </tr>
                                    <tr>
                                        <td class=" px-2 py-2 text-sm">2024-06</td>
                                        <td class=" px-2 py-2 text-sm">Training</td>
                                        <td class=" px-2 py-2 text-sm">10:30 </td>
                                        <td class=" px-2 py-2 text-sm">Latitude: </td>
                                        <td class=" px-2 py-2 text-sm">Latitude: </td>
                                        <td class=" px-2 py-2 text-sm">Late</td>
                                        <td class=" px-2 py-2 text-sm">Training</td>
                                    </tr>
                                    <tr>
                                        <td class=" px-2 py-2 text-sm">2024-06</td>
                                        <td class=" px-2 py-2 text-sm">Training</td>
                                        <td class=" px-2 py-2 text-sm">10:30 </td>
                                        <td class=" px-2 py-2 text-sm">Latitude: </td>
                                        <td class=" px-2 py-2 text-sm">Latitude: </td>
                                        <td class=" px-2 py-2 text-sm">Late</td>
                                        <td class=" px-2 py-2 text-sm">Training</td>
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
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">Document</h3>
                            <button id="openModalButton" type="button" class="inline-flex items-center rounded-md border bg-white px-3 py-2 text-xs font-semibold text-gray-900 shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                                Add New Document
                            </button>

                            <!-- Modal -->
                            <div id="modal" class="fixed inset-0 z-10 w-screen h-screen flex items-center justify-center hidden">
                                <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                                <div class="relative bg-white rounded-lg overflow-hidden max-w-md w-full">
                                    <div class="p-6">
                                        <h3 class="text-lg font-semibold text-gray-900">Add New Document</h3>
                                        <div>
                                            <div>
                                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                                <div class="mt-2 border">
                                                    <input type="name" name="name" id="name" class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter Name">
                                                </div>
                                                <label for="document" class="block text-sm font-medium leading-6 text-gray-900">Document</label>
                                                <div class="mt-2">
                                                    <input type="file" document="document" id="document" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter Name">
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
                        <div class="mt-4 shadow-sm">
                            <div class="overflow-x-auto">
                                <table class="min-w-full bg-white  rounded-lg">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="text-sm px-2 py-2">Name</th>
                                            <th class="text-sm px-2 py-2">Attachement</th>
                                            <th class="text-sm px-2 py-2">Added By</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Contoh data -->
                                        <tr>
                                            <td class=" px-2 py-2 text-sm">2024-06</td>
                                            <td class=" px-2 py-2 text-sm">Meeting</td>
                                            <td class=" px-2 py-2 text-sm">09:00 </td>
                                        </tr>
                                        <tr>
                                            <td class=" px-2 py-2 text-sm">2024-06</td>
                                            <td class=" px-2 py-2 text-sm">Training</td>
                                            <td class=" px-2 py-2 text-sm">10:30 </td>
                                        </tr>
                                        <tr>
                                            <td class=" px-2 py-2 text-sm">2024-06</td>
                                            <td class=" px-2 py-2 text-sm">Training</td>
                                            <td class=" px-2 py-2 text-sm">10:30 </td>
                                        </tr>
                                        <tr>
                                            <td class=" px-2 py-2 text-sm">2024-06</td>
                                            <td class=" px-2 py-2 text-sm">Training</td>
                                            <td class=" px-2 py-2 text-sm">10:30 </td>
                                        </tr>
                                        <tr>
                                            <td class=" px-2 py-2 text-sm">2024-06</td>
                                            <td class=" px-2 py-2 text-sm">Training</td>
                                            <td class=" px-2 py-2 text-sm">10:30 </td>
                                        </tr>
                                        <tr>
                                            <td class=" px-2 py-2 text-sm">2024-06</td>
                                            <td class=" px-2 py-2 text-sm">Training</td>
                                            <td class=" px-2 py-2 text-sm">10:30 </td>
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
                <div id="tabs-with-badges-5" class="hidden" role="tabpanel" aria-labelledby="tabs-with-badges-item-5">
                    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-4xl">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">Assets</h3>
                        </div>
                        <div class="mt-4 shadow-sm">
                            <div class="overflow-x-auto">
                                <table class="min-w-full bg-white  rounded-lg">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="text-sm px-2 py-2">Name</th>
                                            <th class="text-sm px-2 py-2">Code</th>
                                            <th class="text-sm px-2 py-2">Serial No</th>
                                            <th class="text-sm px-2 py-2">Working </th>
                                            <th class="text-sm px-2 py-2">Type</th>
                                            <th class="text-sm px-2 py-2">Date</th>
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
                                            <td class=" px-2 py-2 text-sm">Latitude: </td>
                                        </tr>
                                        <tr>
                                            <td class=" px-2 py-2 text-sm">2024-06</td>
                                            <td class=" px-2 py-2 text-sm">Training</td>
                                            <td class=" px-2 py-2 text-sm">10:30 </td>
                                            <td class=" px-2 py-2 text-sm">Latitude: </td>
                                            <td class=" px-2 py-2 text-sm">Latitude: </td>
                                            <td class=" px-2 py-2 text-sm">Latitude: </td>

                                        </tr>
                                        <tr>
                                            <td class=" px-2 py-2 text-sm">2024-06</td>
                                            <td class=" px-2 py-2 text-sm">Training</td>
                                            <td class=" px-2 py-2 text-sm">10:30 </td>
                                            <td class=" px-2 py-2 text-sm">Latitude: </td>
                                            <td class=" px-2 py-2 text-sm">Latitude: </td>
                                            <td class=" px-2 py-2 text-sm">Latitude: </td>

                                        </tr>
                                        <tr>
                                            <td class=" px-2 py-2 text-sm">2024-06</td>
                                            <td class=" px-2 py-2 text-sm">Training</td>
                                            <td class=" px-2 py-2 text-sm">10:30 </td>
                                            <td class=" px-2 py-2 text-sm">Latitude: </td>
                                            <td class=" px-2 py-2 text-sm">Latitude: </td>
                                            <td class=" px-2 py-2 text-sm">Latitude: </td>

                                        </tr>
                                        <tr>
                                            <td class=" px-2 py-2 text-sm">2024-06</td>
                                            <td class=" px-2 py-2 text-sm">Training</td>
                                            <td class=" px-2 py-2 text-sm">10:30 </td>
                                            <td class=" px-2 py-2 text-sm">Latitude: </td>
                                            <td class=" px-2 py-2 text-sm">Latitude: </td>
                                            <td class=" px-2 py-2 text-sm">Latitude: </td>

                                        </tr>
                                        <tr>
                                            <td class=" px-2 py-2 text-sm">2024-06</td>
                                            <td class=" px-2 py-2 text-sm">Training</td>
                                            <td class=" px-2 py-2 text-sm">10:30 </td>
                                            <td class=" px-2 py-2 text-sm">Latitude: </td>
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
                <div id="tabs-with-badges-6" class="hidden" role="tabpanel" aria-labelledby="tabs-with-badges-item-6">
                    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-4xl">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">History</h3>
                        </div>
                        <div class=" mx-auto bg-gray-100 rounded-lg p-6">
                            <h2 class="text-xl font-bold mb-4">Product Designer</h2>
                            <div class="flex space-x-4">
                                <span class="bg-gray-100 text-gray-700 px-3 py-1  text-sm border-r-2">Full time</span>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1  text-sm border-r-2">Remote</span>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1  text-sm">2019-2022</span>
                            </div>
                        </div>
                        <div class=" mx-auto bg-gray-100 rounded-lg p-6 mt-4">
                            <h2 class="text-xl font-bold mb-4">Customer service manager</h2>
                            <div class="flex space-x-4">
                                <span class="bg-gray-100 text-gray-700 px-3 py-1  text-sm border-r-2">Full time</span>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1  text-sm border-r-2">Remote</span>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1  text-sm">2019-2022</span>
                            </div>
                        </div>
                        <div class=" mx-auto bg-gray-100 rounded-lg p-6 mt-4">
                            <h2 class="text-xl font-bold mb-4">Human Resource manager</h2>
                            <div class="flex space-x-4">
                                <span class="bg-gray-100 text-gray-700 px-3 py-1  text-sm border-r-2">Full time</span>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1  text-sm border-r-2">Remote</span>
                                <span class="bg-gray-100 text-gray-700 px-3 py-1  text-sm">2019-2022</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tabs-with-badges-7" class="hidden" role="tabpanel" aria-labelledby="tabs-with-badges-item-7">
                    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-4xl">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">Salary</h3>
                        </div>
                        <div class=" mx-auto bg-white rounded-lg p-6 border-b shadow-sm">
                            <div class="mb-4">
                                <p class="text-sm text-gray-500 mb-1">Amount</p>
                                <p class="text-2xl font-bold text-green-600">$8,865.00</p>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="text-left">
                                    <p class="text-gray-500">To</p>
                                    <p class="text-black font-medium">Kristin Watson</p>
                                </div>
                                <div class="text-left">
                                    <p class="text-gray-500">Date</p>
                                    <p class="text-black font-medium">6/19/14</p>
                                </div>
                                <div class="text-left">
                                    <p class="text-gray-500">Payment code</p>
                                    <p class="text-black font-medium">B-8640</p>
                                </div>
                            </div>
                        </div>
                        <div class=" mx-auto bg-white rounded-lg p-6 border-b shadow-sm">
                            <div class="mb-4">
                                <p class="text-sm text-gray-500 mb-1">Amount</p>
                                <p class="text-2xl font-bold text-green-600">$8,865.00</p>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="text-left">
                                    <p class="text-gray-500">To</p>
                                    <p class="text-black font-medium">Kristin Watson</p>
                                </div>
                                <div class="text-left">
                                    <p class="text-gray-500">Date</p>
                                    <p class="text-black font-medium">6/19/14</p>
                                </div>
                                <div class="text-left">
                                    <p class="text-gray-500">Payment code</p>
                                    <p class="text-black font-medium">B-8640</p>
                                </div>
                            </div>
                        </div>
                        <div class=" mx-auto bg-white rounded-lg p-6 border-b shadow-sm">
                            <div class="mb-4">
                                <p class="text-sm text-gray-500 mb-1">Amount</p>
                                <p class="text-2xl font-bold text-green-600">$8,865.00</p>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="text-left">
                                    <p class="text-gray-500">To</p>
                                    <p class="text-black font-medium">Kristin Watson</p>
                                </div>
                                <div class="text-left">
                                    <p class="text-gray-500">Date</p>
                                    <p class="text-black font-medium">6/19/14</p>
                                </div>
                                <div class="text-left">
                                    <p class="text-gray-500">Payment code</p>
                                    <p class="text-black font-medium">B-8640</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="tabs-with-badges-8" class="hidden" role="tabpanel" aria-labelledby="tabs-with-badges-item-8">
                    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-4xl">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">Payrun</h3>
                        </div>
                        <div class="rounded-md p-4 bg-blue-100">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-semibold text-black">Payrun</h3>
                                    <div class="mt-2 text-sm text-black">
                                        <ol role="list" class="list-decimal space-y-1 pl-5">
                                            <li>Your password must be at least 8 characters</li>
                                            <li>Your password must include at least one pro wrestling finishing move</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center py-4 space-x-2">
                            <div class="text-left">
                                <p class="text-gray-500">Payrun period</p>
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-white border border-gray-300 rounded-md py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option>Monthly</option>
                                        <option>Year</option>
                                        <option>Day</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="text-left">
                                <p class="text-gray-500">Bonus <span class="text-gray-400">(Allowance)</span></p>
                                <div class="border border-gray-300 rounded-md py-2 px-4">
                                    <p class="text-black">10 %</p>
                                </div>
                            </div>
                            <div class="text-left">
                                <p class="text-gray-500">Tax <span class="text-gray-400">(Deduction)</span></p>
                                <div class="border border-gray-300 rounded-md py-2 px-4">
                                    <p class="text-black">1.5 %</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tabs-with-badges-9" class="hidden" role="tabpanel" aria-labelledby="tabs-with-badges-item-9">
                    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-4xl">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">Slip</h3>
                            <button class="flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">
                                <input type="date">
                            </button>
                        </div>
                        <div class="mt-4 rounded-lg border ">
                            <dl class="mx-auto grid grid-cols-1 gap-px bg-gray-900/5 sm:grid-cols-2 lg:grid-cols-3">
                                <div class="flex flex-wrap items-baseline justify-between gap-x-4 bg-white px-4 sm:px-6 xl:px-8">
                                    <dt class="text-sm font-bold leading-6 text-gray-900">24</dt>
                                    <dd class="w-full flex-none text-sm font-medium leading-10 tracking-tight text-gray-600">Total Paymant</dd>
                                </div>
                                <div class="flex flex-wrap items-baseline justify-between gap-x-4 bg-white px-4 sm:px-6 xl:px-8">
                                    <dt class="text-sm font-bold leading-6 text-gray-900">6</dt>
                                    <dd class="w-full flex-none text-sm font-medium leading-10 tracking-tight text-gray-600"> Pay sent</dd>
                                </div>
                                <div class="flex flex-wrap items-baseline justify-between gap-x-4 bg-white px-4 sm:px-6 xl:px-8">
                                    <dt class="text-sm font-bold leading-6 text-gray-900">2</dt>
                                    <dd class="w-full flex-none text-sm font-medium leading-10 tracking-tight text-gray-600">Conficted payslip</dd>
                                </div>
                            </dl>
                        </div>
                        <div class="mt-4 shadow-sm">
                            <div class="overflow-x-auto">
                                <table class="min-w-full bg-white  rounded-lg">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="text-sm px-2 py-2">Payrun</th>
                                            <th class="text-sm px-2 py-2">Period</th>
                                            <th class="text-sm px-2 py-2">Payrun Type</th>
                                            <th class="text-sm px-2 py-2">Status </th>
                                            <th class="text-sm px-2 py-2">Slary</th>
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
                <div id="tabs-with-badges-10" class="hidden" role="tabpanel" aria-labelledby="tabs-with-badges-item-10">
                    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-4xl">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">Addres</h3>
                        </div>
                        <div>
                            <label for="Addres" class="block text-sm font-semibold leading-6 text-gray-900">Permanent Addres</label>
                            <div class="mt-2 border rounded-lg">
                                <input type="Addres" name="Addres" id="Addres" class="block w-full rounded-md border-0 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="you@example.com">
                            </div>
                        </div>
                        <div>
                            <label for="current Status" class="block text-sm font-semibold leading-6 text-gray-900">Current Status</label>
                            <div class="mt-2 border rounded-lg">
                                <input type="current Status" name="current Status" id="current Status" class="block w-full rounded-md border-0 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="you@example.com">
                            </div>
                        </div>
                        <div class="">
                            <button type="button" class="mt-3 border inline-flex w-full justify-center rounded-md bg-gray-900 hover:bg-gray-600 px-3 py-1 text-sm font-semibold text-white   shadow-sm ring-1 ring-inset ring-gray-300  sm:mt-0 sm:w-auto mr-3">Save</button>
                            <button type="button" class="mt-3 border inline-flex w-full justify-center rounded-md bg-gray-100 hover:bg-gray-50 px-3 py-1 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                        </div>
                    </div>
                </div>
                <div id="tabs-with-badges-11" class="hidden" role="tabpanel" aria-labelledby="tabs-with-badges-item-11">
                    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-4xl">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">Contact</h3>
                        </div>
                        <div class=" mx-auto p-4">
                            <ul class="space-y-4">
                                <li class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                        <span class="text-gray-700">Product manager</span>
                                    </div>
                                    <span class="text-blue-500 text-sm">+7 (903) 679-96-15</span>
                                </li>

                                <li class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                        <span class="text-gray-700">Chief Executive Officer</span>
                                    </div>
                                    <div class="border border-blue-500 rounded px-2 py-1">
                                        <span class="text-blue-500 text-sm">+7 (903) 679-96-15</span>
                                    </div>
                                </li>

                                <li class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                        <span class="text-gray-700">Human Resource Manager</span>
                                    </div>
                                    <span class="text-blue-500 text-sm">+7 (903) 880-93-38</span>
                                </li>

                                <li class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                        <span class="text-gray-700">Front End Developer</span>
                                    </div>
                                    <span class="text-blue-500 text-sm">+7 (903) 941-02-27</span>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <button type="button" class="mt-3 border inline-flex w-full justify-center rounded-md bg-gray-900 hover:bg-gray-600 px-3 py-1 text-sm font-semibold text-white   shadow-sm ring-1 ring-inset ring-gray-300  sm:mt-0 sm:w-auto mr-3">Save</button>
                            <button type="button" class="mt-3 border inline-flex w-full justify-center rounded-md bg-gray-100 hover:bg-gray-50 px-3 py-1 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                        </div>
                    </div>
                </div>
                <div id="tabs-with-badges-12" class="hidden" role="tabpanel" aria-labelledby="tabs-with-badges-item-12">
                    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-4xl">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-900">Sosial</h3>
                        </div>
                        <div class=" py-6 bg-white rounded-lg ">
                            <form>
                                <div class="space-y-4">
                                    <div class="flex items-center">
                                        <label for="instagram" class="w-24 text-gray-700 font-medium">Instagram</label>
                                        <input type="text" id="instagram" name="instagram" placeholder="Paste link here" class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>

                                    <div class="flex items-center">
                                        <label for="twitter" class="w-24 text-gray-700 font-medium">Twitter</label>
                                        <input type="text" id="twitter" name="twitter" placeholder="Paste link here" class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>

                                    <div class="flex items-center">
                                        <label for="facebook" class="w-24 text-gray-700 font-medium">Facebook</label>
                                        <input type="text" id="facebook" name="facebook" placeholder="Paste link here" class="flex-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div>
                            <button type="button" class="mt-3 border inline-flex w-full justify-center rounded-md bg-gray-900 hover:bg-gray-600 px-3 py-1 text-sm font-semibold text-white   shadow-sm ring-1 ring-inset ring-gray-300  sm:mt-0 sm:w-auto mr-3">Save</button>
                            <button type="button" class="mt-3 border inline-flex w-full justify-center rounded-md bg-gray-100 hover:bg-gray-50 px-3 py-1 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
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

<!-- js untuk modal -->
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