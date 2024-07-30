<?php

use yii\helpers\Url;

$controller = Yii::$app->controller->id;
$action = Yii::$app->controller->action->id;
$isDashboard = ($controller === 'dashboard');
$isJobdesk = ($controller === 'jobdesk');
$isEmployee = ($controller === 'employee');
$isLeave = ($controller === 'leave');
$isAttendance = ($controller === 'attendance');
$isAdministration = ($controller === 'administration');
$isSetting = ($controller === 'setting');
?>

<div x-show="open" class="relative z-50 lg:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true" style="display: none;">
    <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-900/80" x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state." aria-hidden="true" style="display: none;"></div>
    <div class="fixed inset-0 flex">
        <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." class="relative mr-16 flex w-full max-w-xs flex-1" @click.away="open = false" style="display: none;">
            <div x-show="open" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Close button, show/hide based on off-canvas menu state." class="absolute left-full top-0 flex w-16 justify-center pt-5" style="display: none;">
                <button type="button" class="-m-2.5 p-2.5" @click="open = false">
                    <span class="sr-only">Close sidebar</span>
                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-white px-6 pb-4">
                <div class="flex h-16 shrink-0 items-center">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="Your Company">
                </div>
                <nav class="flex-1 space-y-2 bg-white px-2" aria-label="Sidebar">
                    <div>
                        <a href="<?= Url::to(['/dashboard']) ?>" class="<?= $isDashboard ? 'bg-gray-200 text-gray-900' : 'bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900' ?> group flex w-full items-center rounded-md py-2 pl-2 text-sm font-medium">
                            <svg class="<?= $isDashboard ? 'text-gray-800' : 'text-gray-600 group-hover:text-gray-900' ?> mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                            </svg>
                            Dashboard
                        </a>
                    </div>
                    <div>
                        <a href="<?= Url::to(['/jobdesk']) ?>" class="<?= $isJobdesk ? 'bg-gray-200 text-gray-900' : 'bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900' ?> gap-x-3 group flex w-full items-center rounded-md py-2 pl-2 text-sm font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                            </svg>
                            Job Desk
                        </a>
                    </div>
                    <div x-data="{ open: false }" class="space-y-1">
                        <button type="button" class="<?= $isEmployee ? 'bg-gray-200 text-gray-900' : 'bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900' ?> gap-x-3 group flex w-full items-center rounded-md py-2 pl-2 pr-1 text-left text-sm font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-controls="sub-menu-1" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <span class="flex-1">Employee</span>
                            <svg class="ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-gray-400 text-gray-300" viewBox="0 0 20 20" aria-hidden="true" :class="{ 'rotate-90 text-gray-400': open, 'text-gray-300': !(open) }">
                                <path d="M6 6L14 10L6 14V6Z" fill="currentColor"></path>
                            </svg>
                        </button>
                        <div x-description="Expandable link section, show/hide based on state." class="space-y-1" id="sub-menu-1" x-show="open" style="display: none;">
                            <a href="<?= \yii\helpers\Url::to(['/employee/allemployee']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">All Employee</a>
                            <a href="<?= \yii\helpers\Url::to(['/employee/apointment']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Appointment</a>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="space-y-1">
                        <button type="button" class="<?= $isLeave ? 'bg-gray-200 text-gray-900' : 'bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900' ?> gap-x-3 group flex w-full items-center rounded-md py-2 pl-2 pr-1 text-left text-sm font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-controls="sub-menu-2" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                            </svg>

                            <span class="flex-1">Leave</span>
                            <svg class="ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-gray-400 text-gray-300" viewBox="0 0 20 20" aria-hidden="true" :class="{ 'rotate-90 text-gray-400': open, 'text-gray-300': !(open) }">
                                <path d="M6 6L14 10L6 14V6Z" fill="currentColor"></path>
                            </svg>
                        </button>
                        <div x-description="Expandable link section, show/hide based on state." class="space-y-1" id="sub-menu-2" x-show="open" style="display: none;">
                            <a href="<?= \yii\helpers\Url::to(['/leave/status']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Status</a>
                            <a href="<?= \yii\helpers\Url::to(['/leave/request']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Request</a>
                            <a href="<?= \yii\helpers\Url::to(['/leave/calendar']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Calendar</a>
                            <a href="<?= \yii\helpers\Url::to(['/leave/summary']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Summary</a>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="space-y-1">
                        <button type="button" class="<?= $isAttendance ? 'bg-gray-200 text-gray-900' : 'bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900' ?> gap-x-3 group flex w-full items-center rounded-md py-2 pl-2 pr-1 text-left text-sm font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-controls="sub-menu-3" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>

                            <span class="flex-1">Attendance</span>
                            <svg class="text-gray-300 ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-gray-400" viewBox="0 0 20 20" aria-hidden="true" :class="{ 'rotate-90 text-gray-400': open, 'text-gray-300': !(open) }">
                                <path d="M6 6L14 10L6 14V6Z" fill="currentColor"></path>
                            </svg>
                        </button>
                        <div x-description="Expandable link section, show/hide based on state." class="space-y-1" id="sub-menu-3" x-show="open" style="display: none;">
                            <a href="<?= \yii\helpers\Url::to(['/attendance/dailylog']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Daily Log</a>
                            <a href="<?= \yii\helpers\Url::to(['/attendance/request']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Request</a>
                            <a href="<?= \yii\helpers\Url::to(['/attendance/detail']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Details</a>
                            <a href="<?= \yii\helpers\Url::to(['/attendance/summary']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Summary</a>

                        </div>
                    </div>
                    <div x-data="{ open: false }" class="space-y-1">
                        <button type="button" class="<?= $isAdministration ? 'bg-gray-200 text-gray-900' : 'bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900' ?> gap-x-3 group flex w-full items-center rounded-md py-2 pl-2 pr-1 text-left text-sm font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-controls="sub-menu-4" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                            </svg>

                            <span class="flex-1">Administration</span>
                            <svg class="text-gray-300 ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-gray-400" viewBox="0 0 20 20" aria-hidden="true" :class="{ 'rotate-90 text-gray-400': open, 'text-gray-300': !(open) }">
                                <path d="M6 6L14 10L6 14V6Z" fill="currentColor"></path>
                            </svg>
                        </button>
                        <div x-description="Expandable link section, show/hide based on state." class="space-y-1" id="sub-menu-4" x-show="open" style="display: none;">
                            <a href="<?= \yii\helpers\Url::to(['/administration/role']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Role</a>
                            <a href="<?= \yii\helpers\Url::to(['/administration/shift']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Shift</a>
                            <a href="<?= \yii\helpers\Url::to(['/administration/department']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Department</a>
                            <a href="<?= \yii\helpers\Url::to(['/administration/holiday']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Holiday</a>
                            <a href="<?= \yii\helpers\Url::to(['/administration/announcement']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Announcement</a>
                        </div>
                    </div>
                    <div x-data="{ open: false }" class="space-y-1">
                        <button type="button" class="<?= $isSetting ? 'bg-gray-200 text-gray-900' : 'bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900' ?> gap-x-3 group flex w-full items-center rounded-md py-2 pl-2 pr-1 text-left text-sm font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-controls="sub-menu-5" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            <span class="flex-1">Setting</span>
                            <svg class="text-gray-300 ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-gray-400" viewBox="0 0 20 20" aria-hidden="true" :class="{ 'rotate-90 text-gray-400': open, 'text-gray-300': !(open) }">
                                <path d="M6 6L14 10L6 14V6Z" fill="currentColor"></path>
                            </svg>
                        </button>
                        <div x-description="Expandable link section, show/hide based on state." class="space-y-1" id="sub-menu-5" x-show="open" style="display: none;">
                            <a href="<?= \yii\helpers\Url::to(['/setting/general']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">General</a>
                            <a href="<?= \yii\helpers\Url::to(['/setting/leave']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Leave</a>
                            <a href="<?= \yii\helpers\Url::to(['/setting/attendance']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Attendance</a>
                            <a href="<?= \yii\helpers\Url::to(['/setting/payroll']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Payroll</a>
                            <a href="<?= \yii\helpers\Url::to(['/setting/import']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Import</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </div>
</div>

<!-- Static sidebar for desktop -->
<div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6 pb-4">
        <a class="flex h-16 shrink-0 items-center" href="/">
            <img class="h-8 w-auto" src="" alt="Djipay">
        </a>
        <nav class="flex-1 space-y-2 bg-white px-2" aria-label="Sidebar">
            <div>
                <a href="<?= Url::to(['/dashboard']) ?>" class="<?= $isDashboard ? 'bg-gray-200 text-gray-900' : 'bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900' ?> group flex w-full items-center rounded-md py-2 pl-2 text-sm font-medium">
                    <svg class="<?= $isDashboard ? 'text-gray-800' : 'text-gray-600 group-hover:text-gray-900' ?> mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                    </svg>
                    Dashboard
                </a>
            </div>
            <div>
                <a href="<?= Url::to(['/jobdesk']) ?>" class="<?= $isJobdesk ? 'bg-gray-200 text-gray-900' : 'bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900' ?> gap-x-3 group flex w-full items-center rounded-md py-2 pl-2 text-sm font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                    </svg>
                    Job Desk
                </a>
            </div>
            <div x-data="{ open: false }" class="space-y-1">
                <button type="button" class="<?= $isEmployee ? 'bg-gray-200 text-gray-900' : 'bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900' ?> gap-x-3 group flex w-full items-center rounded-md py-2 pl-2 pr-1 text-left text-sm font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-controls="sub-menu-1" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <span class="flex-1">Employee</span>
                    <svg class="ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-gray-400 text-gray-300" viewBox="0 0 20 20" aria-hidden="true" :class="{ 'rotate-90 text-gray-400': open, 'text-gray-300': !(open) }">
                        <path d="M6 6L14 10L6 14V6Z" fill="currentColor"></path>
                    </svg>
                </button>
                <div x-description="Expandable link section, show/hide based on state." class="space-y-1" id="sub-menu-1" x-show="open" style="display: none;">
                    <a href="<?= \yii\helpers\Url::to(['/employee/allemployee']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">All Employee</a>
                    <a href="<?= \yii\helpers\Url::to(['/employee/apointment']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Appointment</a>
                </div>
            </div>
            <div x-data="{ open: false }" class="space-y-1">
                <button type="button" class="<?= $isLeave ? 'bg-gray-200 text-gray-900' : 'bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900' ?> gap-x-3 group flex w-full items-center rounded-md py-2 pl-2 pr-1 text-left text-sm font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-controls="sub-menu-2" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                    </svg>

                    <span class="flex-1">Leave</span>
                    <svg class="ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-gray-400 text-gray-300" viewBox="0 0 20 20" aria-hidden="true" :class="{ 'rotate-90 text-gray-400': open, 'text-gray-300': !(open) }">
                        <path d="M6 6L14 10L6 14V6Z" fill="currentColor"></path>
                    </svg>
                </button>
                <div x-description="Expandable link section, show/hide based on state." class="space-y-1" id="sub-menu-2" x-show="open" style="display: none;">
                    <a href="<?= \yii\helpers\Url::to(['/leave/status']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Status</a>
                    <a href="<?= \yii\helpers\Url::to(['/leave/request']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Request</a>
                    <a href="<?= \yii\helpers\Url::to(['/leave/calendar']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Calendar</a>
                    <a href="<?= \yii\helpers\Url::to(['/leave/summary']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Summary</a>
                </div>
            </div>
            <div x-data="{ open: false }" class="space-y-1">
                <button type="button" class="<?= $isAttendance ? 'bg-gray-200 text-gray-900' : 'bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900' ?> gap-x-3 group flex w-full items-center rounded-md py-2 pl-2 pr-1 text-left text-sm font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-controls="sub-menu-3" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                    <span class="flex-1">Attendance</span>
                    <svg class="text-gray-300 ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-gray-400" viewBox="0 0 20 20" aria-hidden="true" :class="{ 'rotate-90 text-gray-400': open, 'text-gray-300': !(open) }">
                        <path d="M6 6L14 10L6 14V6Z" fill="currentColor"></path>
                    </svg>
                </button>
                <div x-description="Expandable link section, show/hide based on state." class="space-y-1" id="sub-menu-3" x-show="open" style="display: none;">
                    <a href="<?= \yii\helpers\Url::to(['/attendance/dailylog']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Daily Log</a>
                    <a href="<?= \yii\helpers\Url::to(['/attendance/request']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Request</a>
                    <a href="<?= \yii\helpers\Url::to(['/attendance/detail']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Details</a>
                    <a href="<?= \yii\helpers\Url::to(['/attendance/summary']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Summary</a>

                </div>
            </div>
            <div x-data="{ open: false }" class="space-y-1">
                <button type="button" class="<?= $isAdministration ? 'bg-gray-200 text-gray-900' : 'bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900' ?> gap-x-3 group flex w-full items-center rounded-md py-2 pl-2 pr-1 text-left text-sm font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-controls="sub-menu-4" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                    </svg>

                    <span class="flex-1">Administration</span>
                    <svg class="text-gray-300 ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-gray-400" viewBox="0 0 20 20" aria-hidden="true" :class="{ 'rotate-90 text-gray-400': open, 'text-gray-300': !(open) }">
                        <path d="M6 6L14 10L6 14V6Z" fill="currentColor"></path>
                    </svg>
                </button>
                <div x-description="Expandable link section, show/hide based on state." class="space-y-1" id="sub-menu-4" x-show="open" style="display: none;">
                    <a href="<?= \yii\helpers\Url::to(['/administration/role']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Role</a>
                    <a href="<?= \yii\helpers\Url::to(['/administration/shift']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Shift</a>
                    <a href="<?= \yii\helpers\Url::to(['/administration/department']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Department</a>
                    <a href="<?= \yii\helpers\Url::to(['/administration/holiday']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Holiday</a>
                    <a href="<?= \yii\helpers\Url::to(['/administration/announcement']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Announcement</a>
                </div>
            </div>
            <div x-data="{ open: false }" class="space-y-1">
                <button type="button" class="<?= $isSetting ? 'bg-gray-200 text-gray-900' : 'bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900' ?> gap-x-3 group flex w-full items-center rounded-md py-2 pl-2 pr-1 text-left text-sm font-medium focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-controls="sub-menu-5" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>

                    <span class="flex-1">Setting</span>
                    <svg class="text-gray-300 ml-3 h-5 w-5 flex-shrink-0 transform transition-colors duration-150 ease-in-out group-hover:text-gray-400" viewBox="0 0 20 20" aria-hidden="true" :class="{ 'rotate-90 text-gray-400': open, 'text-gray-300': !(open) }">
                        <path d="M6 6L14 10L6 14V6Z" fill="currentColor"></path>
                    </svg>
                </button>
                <div x-description="Expandable link section, show/hide based on state." class="space-y-1" id="sub-menu-5" x-show="open" style="display: none;">
                    <a href="<?= \yii\helpers\Url::to(['/setting/general']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">General</a>
                    <a href="<?= \yii\helpers\Url::to(['/setting/leave']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Leave</a>
                    <a href="<?= \yii\helpers\Url::to(['/setting/attendance']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Attendance</a>
                    <a href="<?= \yii\helpers\Url::to(['/setting/payroll']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Payroll</a>
                    <a href="<?= \yii\helpers\Url::to(['/setting/import']) ?>" class="group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Import</a>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="lg:pl-72">
    <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
        <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden" @click="open = true">
            <span class="sr-only">Open sidebar</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
            </svg>
        </button>

        <!-- Separator -->
        <div class="h-6 w-px bg-gray-200 lg:hidden" aria-hidden="true"></div>

        <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
            <form class="relative flex flex-1" action="#" method="GET">
                <label for="search-field" class="sr-only">Search</label>
            </form>
            <div class="flex items-center gap-x-4 lg:gap-x-6">
                <button class="-m-2.5 p-2.5 text-gray-600 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>
                </button>
                <button type="button" class="-m-2.5 p-2.5 text-gray-600 hover:text-gray-700">
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"></path>
                    </svg>
                </button>
                <!-- Separator -->
                <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-200" aria-hidden="true"></div>

                <!-- Profile dropdown -->
                <div x-data="Components.menu({ open: false })" x-init="init()" @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)" class="relative">
                    <button type="button" class="-m-1.5 flex items-center p-1.5" id="user-menu-button" x-ref="button" @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                        <span class="hidden lg:flex lg:items-center">
                            <span class="ml-4 text-sm font-semibold leading-6 text-gray-900" aria-hidden="true">Tom Cook</span>
                            <svg class="ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </button>

                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none" x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state." x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()" @keyup.space.prevent="open = false; focusButton()" style="display: none;">
                        <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-50': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 0)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Your profile</a>
                        <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" :class="{ 'bg-gray-50': activeIndex === 1 }" role="menuitem" tabindex="-1" id="user-menu-item-1" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 1)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">Sign out</a>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>