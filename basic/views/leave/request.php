<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\LinkPager;

/** @var yii\web\View $this */

$this->title = 'Leave Request';
?>
<div class="">
    <div class="lg:flex lg:items-center lg:justify-between">
        <div class="min-w-0 flex-1">
            <nav class="flex" aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div class="flex">
                            <a href="#" class="text-sm font-medium text-gray-500 hover:text-gray-700">Leave</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                            <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Request</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <h2 class="mt-2 text-2xl text-gray-900 sm:truncate sm:text-2xl sm:tracking-tight">Leave Request</h2>
        </div>
        <div class="mt-5 flex lg:ml-4 lg:mt-0">
            <span class="sm:ml-3">
                <button id="openModalButton" type="button" class="inline-flex items-center rounded-md mx-3 bg-gray-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                    </svg>
                    Assign Leave
                </button>
            </span>
            <!-- Modal add Apointment -->
            <div id="modal" class="fixed inset-0 z-10 w-screen h-screen flex items-center justify-center hidden">
                <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <div class="relative bg-white rounded-lg overflow-hidden max-w-md w-full">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900">Assign Leave</h3>
                        <form id="assignLeave" action="<?= Url::to(['leave/create-leave']) ?>" method="post">
                            <?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken) ?>
                            <div>
                                <div>
                                    <label for="employe" class="block text-sm font-medium leading-6 text-gray-900">Employee</label>
                                    <div class="mt-2 border rounded-md">
                                        <!-- <input type="text" employe="employe" id="employe" class="block w-full px-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter Name"> -->
                                        <select id="employee" name="employee" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                            <option value="">Choose Employee</option>
                                            <?php foreach ($employees as $employee) : ?>
                                                <option value="<?= $employee['id'] ?>"><?= $employee['nama_depan'] ?> <?= $employee['nama_belakang'] ?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="grid grid-cols-2 gap-6 mt-4">
                                        <!-- <div>
                                            <label for="leaveType" class="block text-sm font-medium text-gray-700 mb-1">Leave Type</label>
                                            <div class="relative border rounded-md">
                                                <select id="leaveType" name="leaveType" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                                    <option value="">Choose leave type</option>
                                                    <?php foreach ($absensi_type as $type) : ?>
                                                        <option value="<?= $type['id'] ?>"><?= $type['type'] ?> </option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="mt-2">
                                            <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                                            <div class="relative border rounded-md">
                                                <input type="date" id="date" name="date" placeholder="Choose date" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <label for="duration" class="block text-sm font-medium text-gray-700 mb-1">Duration</label>
                                            <div class="relative border rounded-md">
                                                <select id="duration" name="duration" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                                    <option value="">Choose duration</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                </select>
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <label for="attachments" class="block text-sm font-medium text-gray-700 mb-1">Attachments</label>
                                            <div class="relative border rounded-md">
                                                <input type="file" id="attachments" name="attachments" placeholder="Choose file" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=" border rounded-md mt-4">
                                            <textarea rows="4" name="comment" id="comment" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Reason"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 flex justify-start">
                                <button id="saveButton" type="submit" class="ml-2 mr-2 inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">Save</button>
                                <button id="closeModalButton" type="button" class="inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-700 bg-gray-200 hover:bg-gray-300 focus-visible:outline focus-visible:outline-2 focus-visible:ring-2 focus-visible:ring-gray-500 focus-visible:ring-opacity-50">Cancel</button>
                            </div>
                        </form>
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
                <form method="get" class="">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <input type="text" name="search" value="<?= htmlspecialchars($searchModel) ?>" id="default-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search ..." />
                    </div>
                </form>

            </div>
        </div>


        <table class="w-full">
            <thead>
                <tr class="bg-gray-50 text-left">
                    <th class="px-4 py-2">Profile</th>
                    <th class="px-4 py-2">Date & Time</th>
                    <th class="px-4 py-2">Duration</th>
                    <th class="px-4 py-2">Department</th>
                    <th class="px-4 py-2">Type</th>
                    <th class="px-4 py-2">Attachment</th>
                    <th class="px-4 py-2">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($leave as $leaves) : ?>
                    <tr class="py-2">
                        <td class="px-4 py-2">
                            <img class="inline-block h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""> <?= $leaves['nama_depan'] ?> <?= $leaves['nama_belakang'] ?>
                        </td>
                        <td class="px-4 py-2"><?= $leaves['tanggal_absensi'] ?></td>
                        <td class="px-4 py-2"><span class=""><?= $leaves['day'] ?></span></td>
                        <td class="px-4 py-2"></td>
                        <td class="px-4 py-2"><?= $leaves['type'] ?></td>
                        <td class="px-4 py-2"><?= $leaves['bukti_hadir'] ?></td>
                        <td class="px-4 py-2">
                            <div x-data="Components.menu({ open: false })" x-init="init()" @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)" class="relative inline-block text-left">
                                <div>
                                    <button type="button" class="relative -m-2 flex items-center rounded-full p-2 text-gray-400 hover:text-gray-600" id="options-menu-0-button" x-ref="button" @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="true" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
                                        <span class="absolute -inset-1"></span>
                                        <span class="sr-only">Open options</span>
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- <a href="#" class="text-gray-700 flex px-4 py-2 text-sm" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100 text-gray-900': activeIndex === 0, 'text-gray-700': !(activeIndex === 0) }" role="menuitem" tabindex="-1" id="options-menu-0-item-0" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 0)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">
                                <span>Response</span>
                            </a> -->
                                <?php foreach ($leave as $log) : ?>
                                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white  ring-1 ring-black ring-opacity-5 focus:outline-none" x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state." x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical" aria-labelledby="options-menu-0-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()" @keyup.space.prevent="open = false; focusButton()">
                                        <div class="py-1" role="none">
                                            <form action="<?= Url::to(['leave/approve']) ?>" method="post" style="display:inline;">
                                                <?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken) ?>
                                                <?= Html::hiddenInput('logId', $log['id']) ?>
                                                <button type="submit" class="text-gray-700 flex px-4 py-2 text-sm" role="menuitem" tabindex="-1">
                                                    <span>Approve</span>
                                                </button>
                                            </form>
                                            <form action="<?= Url::to(['leave/reject']) ?>" method="post" style="display:inline;">
                                                <?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken) ?>
                                                <?= Html::hiddenInput('logId', $log['id']) ?>
                                                <button type="submit" class="text-gray-700 flex px-4 py-2 text-sm" role="menuitem" tabindex="-1">
                                                    <span>Reject</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                <?php endforeach; ?>


                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
        <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
            <div class="flex flex-1 justify-between sm:hidden">
                <?= LinkPager::widget([
                    'pagination' => $pagination,
                    'prevPageLabel' => 'Previous',
                    'nextPageLabel' => 'Next',
                    'options' => ['class' => 'relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50'],
                ]) ?>
            </div>
            <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700">
                        Showing
                        <span class="font-medium"><?= $pagination->offset + 1 ?></span>
                        to
                        <span class="font-medium"><?= $pagination->offset + count($leave) ?></span>
                        of
                        <span class="font-medium"><?= $pagination->totalCount ?></span>
                        results
                    </p>
                </div>
                <div>
                    <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                        <?= LinkPager::widget([
                            'pagination' => $pagination,
                            'linkOptions' => ['class' => 'relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 ring-1 ring-inset ring-gray-300  focus:z-20 focus:outline-offset-0'],
                            'disabledPageCssClass' => 'relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 ring-1 ring-inset ring-gray-300',
                            'activePageCssClass' => 'relative z-10 inline-flex items-center bg-blue-600  text-sm font-semibold  focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600',
                            'prevPageLabel' => '<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" /></svg>',
                            'nextPageLabel' => '<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" /></svg>',
                            'options' => ['class' => 'pagination'],
                        ]) ?>
                    </nav>
                </div>
            </div>
        </div>


    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const openModalButton = document.getElementById('openModalButton');
        const closeModalButton = document.getElementById('closeModalButton');
        const modal = document.getElementById('modal');
        const assignLeave = document.getElementById('assignLeave');

        // Function to show the modal
        function openModal() {
            modal.classList.remove('hidden'); // Show the modal
            document.body.classList.add('overflow-hidden'); // Optional: Disable scroll on the body
        }

        // Function to hide the modal
        function closeModal() {
            modal.classList.add('hidden'); // Hide the modal
            document.body.classList.remove('overflow-hidden'); // Optional: Enable scroll on the body
        }

        // Event listener to open the modal
        openModalButton.addEventListener('click', openModal);

        // Event listener to close the modal
        closeModalButton.addEventListener('click', closeModal);

        // Optional: Close modal when clicking outside of it
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                closeModal();
            }
        });

        // Handle form submission
        assignLeave.onsubmit = function(event) {
            event.preventDefault();

            const formData = new FormData(this);

            fetch('<?= Url::to(['leave/create-leave']) ?>', {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Response:', data); // Tambahkan log untuk melihat respons
                    if (data.status === 'success') {
                        // Tutup modal dan atur ulang form jika respons sukses
                        closeModal();
                        assignLeave.reset();
                        // location.reload(); // Refresh the page
                    } else {
                        // Jika ada pesan kesalahan dari server
                        console.error('Server error:', data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
        };
    });
</script>