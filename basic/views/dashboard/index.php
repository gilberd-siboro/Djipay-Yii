<?php

/** @var yii\web\View $this */

$this->title = 'Dashboard';
?>
<div class="px-2" style="min-height: 384px">
    <div class="mx-auto max-w-7xl">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="min-w-0 flex-1">
                <h2 class="mt-2 text-2xl text-gray-900 sm:truncate sm:text-2xl sm:tracking-tight">Dashboard</h2>
            </div>
            <div class="mt-5 flex lg:ml-4 lg:mt-0">
                <span class="sm:ml-3">
                    <button type="button" class="inline-flex items-center rounded-md bg-gray-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Budsy Punching
                    </button>
                </span>
                <span class="ml-3 hidden sm:block">
                    <button type="button" class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">                   
                        Manager POV
                    </button>
                </span>
            </div>
        </div>
    </div>
    <div class="flex justify-between items-center p-2 bg-white rounded-lg mt-3">
        <div>
            <h2 class="text-lg font-semibold">Good to see you, Kimi <span class="wave">👋</span></h2>
            <p class="text-sm text-gray-500">You came 15 minutes early today.</p>
        </div>
        <div class="flex space-x-4">
            <div class="text-center">
                <div class="text-green-600 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-2.93-8.93a.75.75 0 111.06-1.06l1.72 1.72 4.2-4.2a.75.75 0 111.06 1.06l-4.75 4.75a.75.75 0 01-1.06 0l-2.25-2.25z" clip-rule="evenodd" />
                    </svg>
                    <span class="ml-2">7:14 AM</span>
                </div>
                <p class="text-xs text-gray-500">Punch In</p>
            </div>
            <div class="text-center">
                <div class="text-red-600 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1.07-7.25a.75.75 0 011.06 0l2.25 2.25 4.75-4.75a.75.75 0 011.06 1.06l-4.2 4.2-1.72-1.72a.75.75 0 11-1.06 1.06l-2.25-2.25a.75.75 0 010-1.06z" clip-rule="evenodd" />
                    </svg>
                    <span class="ml-2">05:00 PM</span>
                </div>
                <p class="text-xs text-gray-500">Punch Out</p>
            </div>
        </div>
    </div>
    <style>
        .wave {
            animation: wave-animation 2s infinite;
            transform-origin: 70% 70%;
            display: inline-block;
        }

        @keyframes wave-animation {
            0% {
                transform: rotate(0.0deg)
            }

            10% {
                transform: rotate(14.0deg)
            }

            20% {
                transform: rotate(-8.0deg)
            }

            30% {
                transform: rotate(14.0deg)
            }

            40% {
                transform: rotate(-4.0deg)
            }

            50% {
                transform: rotate(10.0deg)
            }

            60% {
                transform: rotate(0.0deg)
            }

            100% {
                transform: rotate(0.0deg)
            }
        }
    </style>

    <div class="mt-4 rounded-lg">
        <dl class="mx-auto grid grid-cols-1 gap-px bg-gray-900/5 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-4 sm:px-6 xl:px-8">
                <dt class="text-sm font-semibold leading-6 text-gray-900">Total Leave Allowence</dt>
                <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">34</dd>
            </div>
            <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-4 sm:px-6 xl:px-8">
                <dt class="text-sm font-semibold leading-6 text-gray-900">Total Leave Taken</dt>
                <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">20</dd>
            </div>
            <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-4 sm:px-6 xl:px-8">
                <dt class="text-sm font-semibold leading-6 text-gray-900">Total Leave Available</dt>
                <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">87</dd>
            </div>
            <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-4 sm:px-6 xl:px-8">
                <dt class="text-sm font-semibold leading-6 text-gray-900">Leave Request Pending</dt>
                <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">122</dd>
            </div>
        </dl>
    </div>

    <div class="mt-4">
        <div class="p-6 bg-white  rounded-lg  ">
            <h2 class="text-xl font-semibold mb-4">Time Log</h2>
            <div class="flex justify-between items-start ">
                <!-- Today's Time Log -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Today</h3>
                    <div class="flex space-x-24">
                        <div class="text-center p-4 bg-gray-100 rounded-lg ">
                            <p class="text-2xl font-bold">08:00</p>
                            <p class="text-sm text-gray-500">Scheduled</p>
                        </div>
                        <div class="text-center p-4 bg-gray-100 rounded-lg ">
                            <p class="text-2xl font-bold">12:00</p>
                            <p class="text-sm text-gray-500">Balance</p>
                        </div>
                        <div class="text-center p-4 bg-gray-100 rounded-lg ">
                            <p class="text-2xl font-bold">05:00</p>
                            <p class="text-sm text-gray-500">Worked</p>
                        </div>
                    </div>
                </div>
                <div class="border-l pl-6 w-full">
                    <h3 class="text-lg font-semibold mb-2">This month</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <div class="flex items-center justify-between">
                                <p class="text-sm">Total</p>
                                <p class="text-sm">216 hour / .... hour</p>
                            </div>
                            <div class="bg-gray-200 h-2 rounded-full overflow-hidden mb-2">
                                <div class="bg-blue-600 h-full w-3/4"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <p class="text-sm">Worked time</p>
                                <p class="text-sm">189 hour / .... hour</p>
                            </div>
                            <div class="bg-gray-200 h-2 rounded-full overflow-hidden mb-2">
                                <div class="bg-blue-600 h-full w-2/3"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <p class="text-sm">Shortage time</p>
                                <p class="text-sm">23 hour / .... hour</p>
                            </div>
                            <div class="bg-gray-200 h-2 rounded-full overflow-hidden mb-2">
                                <div class="bg-blue-600 h-full w-1/5"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <p class="text-sm">Over time</p>
                                <p class="text-sm">56 hour / .... hour</p>
                            </div>
                            <div class="bg-gray-200 h-2 rounded-full overflow-hidden mb-2">
                                <div class="bg-blue-600 h-full w-1/3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 bg-white rounded-lg">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="sm:flex-auto mt-2">
                <h1 class="text-base font-semibold leading-6 text-gray-900">Announcement</h1>
            </div>
            <table class="min-w-full  mt-2">
                <thead class="bg-gray-100  rounded-lg">
                    <tr class="mx-4">
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0 border-r">Title</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 border-r">Start date</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 border-r">End date</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 ">Description</th>
                    </tr>
                </thead>
                <tbody class=" divide-gray-200">
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">Lindsay Walton</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Front-end Developer</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">lindsay.walton@example.com</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">Courtney Henry</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Designer</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">courtney.henry@example.com</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Admin</td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">Tom Cook</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Director of Product</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">tom.cook@example.com</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">Whitney Francis</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Copywriter</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">whitney.francis@example.com</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Admin</td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">Leonard Krasner</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Senior Designer</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">leonard.krasner@example.com</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Owner</td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">Floyd Miles</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Principal Designer</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">floyd.miles@example.com</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Member</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>