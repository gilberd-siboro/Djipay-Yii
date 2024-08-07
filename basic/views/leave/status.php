<?php


use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\LinkPager;

/** @var yii\web\View $this */

$this->title = 'Leave Status';
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
                            <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Leave Status</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <h2 class="mt-2 text-2xl text-gray-900 sm:truncate sm:text-2xl sm:tracking-tight">Leave Status</h2>
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
                <button class="px-4 py-2 bg-blue-100 text-blue-700 border-r  font-medium">Department</button>
                <button class="px-4 py-2 text-gray-600 hover:bg-gray-100 border-r  font-medium">Work shift</button>
                <button class="px-4 py-2 text-gray-600 hover:bg-gray-100 border-r  font-medium">Leave duration</button>
                <button class="px-4 py-2 text-gray-600 hover:bg-gray-100   font-medium">Users</button>
            </div>
            <div class="border rounded-md p-1 ">
                <button class="flex items-center text-gray-600 hover:text-gray-800 ">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Select Date
                </button>
            </div>
        </div>

        <div class="mt-4 rounded-lg border mx-4">
            <dl class="mx-auto grid grid-cols-1 gap-px bg-gray-900/5 sm:grid-cols-2 lg:grid-cols-3 ">
                <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-4 sm:px-6 xl:px-8">
                    <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900"><?= $count ?></dd>
                    <dt class="text-sm font-semibold leading-6 text-gray-900"> Leave Employes</dt>
                </div>
                <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-4 sm:px-6 xl:px-8">

                    <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">20 hr</dd>
                    <dt class="text-sm font-semibold leading-6 text-gray-900">Total Leave Hour</dt>
                </div>
                <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-4 sm:px-6 xl:px-8">

                    <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">87</dd>
                    <dt class="text-sm font-semibold leading-6 text-gray-900">On Leave </dt>
                </div>
            </dl>
        </div>


        <div class="p-4">
            <div class="relative">
                <form method="get">
                    <input type="text" name="search" value="<?= htmlspecialchars($searchModel) ?>" placeholder="Search" class="pl-10 pr-4 py-2 border rounded-lg">
                    <div class="absolute left-3 top-2.5">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </form>
            </div>
        </div>

        <div class="px-4 py-2 border-b">
            <h2 class="text-lg font-semibold">Designation</h2>
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
                </tr>
            </thead>
            <tbody>
                <?php foreach ($status as $statuses) : ?>
                    <tr class="py-2">
                        <td class="px-4 py-2">
                            <img class="inline-block h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <?= $statuses['nama_depan'] ?> <?= $statuses['nama_belakang'] ?>
                        </td>
                        <td class="px-4 py-2"><?= $statuses['tanggal_absensi'] ?></td>
                        <td class="px-4 py-2"><span class=""><?= $statuses['day'] ?></span></td>
                        <td class="px-4 py-2"></td>
                        <td class="px-4 py-2"><?= $statuses['type'] ?></td>
                        <td class="px-4 py-2"><?= $statuses['bukti_hadir'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <!-- Pagination -->
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
                        <span class="font-medium"><?= $pagination->offset + count($status) ?></span>
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