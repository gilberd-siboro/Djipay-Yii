<?php

/** @var yii\web\View $this */

$this->title = 'Administration Holiday';
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
                            <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Holiday</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <h2 class="mt-2 text-2xl text-gray-900 sm:truncate sm:text-2xl sm:tracking-tight">Holiday</h2>
        </div>
        <div class="mt-5 flex lg:ml-4 lg:mt-0">
            <span class="sm:ml-3">
                <button id="openModalButton" type="button" class="inline-flex items-center rounded-md mx-3 bg-gray-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Add Department
                </button>
            </span>
            <!-- Modal add Apointment -->
            <div id="modal" class="fixed inset-0 z-10 w-screen h-screen flex items-center justify-center hidden mt-10">
                <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <div class="relative bg-white rounded-lg overflow-hidden max-w-md w-full">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900">Add Department</h3>
                        <div>
                            <div class="mt-2">
                                <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Employee</label>
                                <div class="mt-2 border rounded-md">
                                    <input type="text" employe="employe" id="employe" class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter Employess">
                                </div>
                                <div class="grid grid-cols-2 gap-6 mt-4">
                                    <div>
                                        <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">Punch In</label>
                                        <input type="date" id="date" name="date" placeholder="Choose date" class="block border w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">Punch Out</label>
                                        <input type="date" id="date" name="date" placeholder="Choose date" class="block border w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=" border rounded-md mt-4">
                                        <textarea rows="4" name="comment" id="comment" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Reason note"></textarea>
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

    <div class=" bg-white rounded-lg mt-4 ">
        <!-- component -->
        <div class="lg:flex lg:h-full lg:flex-col mb-10">
            <header class="flex items-center justify-between border-b border-gray-200 px-6 py-4 lg:flex-none">
                <div class="relative flex items-center rounded-md bg-white shadow-sm md:items-stretch">
                    <button type="button" class="flex h-9 w-12 items-center justify-center rounded-l-md border-y border-l border-gray-300 pr-1 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:pr-0 md:hover:bg-gray-50">
                        <span class="sr-only">Previous month</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button type="button" class="hidden border-y border-gray-300 px-3.5 text-sm font-semibold text-gray-900 hover:bg-gray-50 focus:relative md:block">March</button>
                    <span class="relative -mx-px h-5 w-px bg-gray-300 md:hidden"></span>
                    <button type="button" class="flex h-9 w-12 items-center justify-center rounded-r-md border-y border-r border-gray-300 pl-1 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:pl-0 md:hover:bg-gray-50">
                        <span class="sr-only">Next month</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center">

                    <h1 class="text-3xl font-semibold leading-6 text-gray-900">
                        <time datetime="2022-01"> 2023</time>
                    </h1>
                </div>
            </header>
            <div class="shadow ring-1 ring-black ring-opacity-5 lg:flex lg:flex-auto lg:flex-col">
                <div class="grid grid-cols-7 gap-px border-b border-gray-300 bg-gray-200 text-center text-xs font-semibold leading-6 text-gray-700 lg:flex-none">
                    <div class="flex justify-center bg-white py-2">
                        <span>M</span>
                        <span class="sr-only sm:not-sr-only">on</span>
                    </div>
                    <div class="flex justify-center bg-white py-2">
                        <span>T</span>
                        <span class="sr-only sm:not-sr-only">ue</span>
                    </div>
                    <div class="flex justify-center bg-white py-2">
                        <span>W</span>
                        <span class="sr-only sm:not-sr-only">ed</span>
                    </div>
                    <div class="flex justify-center bg-white py-2">
                        <span>T</span>
                        <span class="sr-only sm:not-sr-only">hu</span>
                    </div>
                    <div class="flex justify-center bg-white py-2">
                        <span>F</span>
                        <span class="sr-only sm:not-sr-only">ri</span>
                    </div>
                    <div class="flex justify-center bg-white py-2">
                        <span>S</span>
                        <span class="sr-only sm:not-sr-only">at</span>
                    </div>
                    <div class="flex justify-center bg-white py-2">
                        <span>S</span>
                        <span class="sr-only sm:not-sr-only">un</span>
                    </div>
                </div>
                <div class="flex bg-gray-200 text-xs leading-6 text-gray-700 lg:flex-auto">
                    <div class="hidden w-full lg:grid lg:grid-cols-7 lg:grid-rows-6 lg:gap-px">
                        <!--
          Always include: "relative py-2 px-3"
          Is current month, include: "bg-white"
          Is not current month, include: "bg-gray-50 text-gray-500"
        -->
                        <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
                            <!--
            Is today, include: "flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white"
          -->
                            <time datetime="2021-12-27">27</time>
                        </div>
                        <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
                            <time datetime="2021-12-28">28</time>
                        </div>
                        <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
                            <time datetime="2021-12-29">29</time>
                        </div>
                        <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
                            <time datetime="2021-12-30">30</time>
                        </div>
                        <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
                            <time datetime="2021-12-31">31</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-01">1</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-01">2</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-03">3</time>
                            <ol class="mt-2">
                                <li>
                                    <a href="#" class="group flex">
                                        <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Design review</p>
                                        <time datetime="2022-01-03T10:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">10AM</time>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="group flex">
                                        <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Sales meeting</p>
                                        <time datetime="2022-01-03T14:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">2PM</time>
                                    </a>
                                </li>
                            </ol>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-04">4</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-05">5</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-06">6</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-07">7</time>
                            <ol class="mt-2">
                                <li>
                                    <a href="#" class="group flex">
                                        <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Date night</p>
                                        <time datetime="2022-01-08T18:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">6PM</time>
                                    </a>
                                </li>
                            </ol>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-08">8</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-09">9</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-10">10</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-11">11</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-12" class="flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white">12</time>
                            <ol class="mt-2">
                                <li>
                                    <a href="#" class="group flex">
                                        <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Sam's birthday party</p>
                                        <time datetime="2022-01-25T14:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">2PM</time>
                                    </a>
                                </li>
                            </ol>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-13">13</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-14">14</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-15">15</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-16">16</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-17">17</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-18">18</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-19">19</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-20">20</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-21">21</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-22">22</time>
                            <ol class="mt-2">
                                <li>
                                    <a href="#" class="group flex">
                                        <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Maple syrup museum</p>
                                        <time datetime="2022-01-22T15:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">3PM</time>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="group flex">
                                        <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Hockey game</p>
                                        <time datetime="2022-01-22T19:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">7PM</time>
                                    </a>
                                </li>
                            </ol>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-23">23</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-24">24</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-25">25</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-26">26</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-27">27</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-28">28</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-29">29</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-30">30</time>
                        </div>
                        <div class="relative bg-white px-3 py-2">
                            <time datetime="2022-01-31">31</time>
                        </div>
                        <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
                            <time datetime="2022-02-01">1</time>
                        </div>
                        <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
                            <time datetime="2022-02-02">2</time>
                        </div>
                        <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
                            <time datetime="2022-02-03">3</time>
                        </div>
                        <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
                            <time datetime="2022-02-04">4</time>
                            <ol class="mt-2">
                                <li>
                                    <a href="#" class="group flex">
                                        <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Cinema with friends</p>
                                        <time datetime="2022-02-04T21:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">9PM</time>
                                    </a>
                                </li>
                            </ol>
                        </div>
                        <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
                            <time datetime="2022-02-05">5</time>
                        </div>
                        <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
                            <time datetime="2022-02-06">6</time>
                        </div>
                    </div>
                    <div class="isolate grid w-full grid-cols-7 grid-rows-6 gap-px lg:hidden">

                        <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">


                            <time datetime="2021-12-27" class="ml-auto">27</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2021-12-28" class="ml-auto">28</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2021-12-29" class="ml-auto">29</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2021-12-30" class="ml-auto">30</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2021-12-31" class="ml-auto">31</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-01" class="ml-auto">1</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-02" class="ml-auto">2</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-03" class="ml-auto">3</time>
                            <span class="sr-only">2 events</span>
                            <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
                                <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
                                <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
                            </span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-04" class="ml-auto">4</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-05" class="ml-auto">5</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-06" class="ml-auto">6</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-07" class="ml-auto">7</time>
                            <span class="sr-only">1 event</span>
                            <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
                                <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
                            </span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-08" class="ml-auto">8</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-09" class="ml-auto">9</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-10" class="ml-auto">10</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-11" class="ml-auto">11</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 font-semibold text-indigo-600 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-12" class="ml-auto">12</time>
                            <span class="sr-only">1 event</span>
                            <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
                                <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
                            </span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-13" class="ml-auto">13</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-14" class="ml-auto">14</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-15" class="ml-auto">15</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-16" class="ml-auto">16</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-17" class="ml-auto">17</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-18" class="ml-auto">18</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-19" class="ml-auto">19</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-20" class="ml-auto">20</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-21" class="ml-auto">21</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 font-semibold text-white hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-22" class="ml-auto flex h-6 w-6 items-center justify-center rounded-full bg-gray-900">22</time>
                            <span class="sr-only">2 events</span>
                            <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
                                <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
                                <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
                            </span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-23" class="ml-auto">23</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-24" class="ml-auto">24</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-25" class="ml-auto">25</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-26" class="ml-auto">26</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-27" class="ml-auto">27</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-28" class="ml-auto">28</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-29" class="ml-auto">29</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-30" class="ml-auto">30</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-01-31" class="ml-auto">31</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-01" class="ml-auto">1</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-02" class="ml-auto">2</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-03" class="ml-auto">3</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-04" class="ml-auto">4</time>
                            <span class="sr-only">1 event</span>
                            <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
                                <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
                            </span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-05" class="ml-auto">5</time>
                            <span class="sr-only">0 events</span>
                        </button>
                        <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
                            <time datetime="2022-02-06" class="ml-auto">6</time>
                            <span class="sr-only">0 events</span>
                        </button>
                    </div>
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