@include(".Includes/header")
@include(".Includes/sidebar")
<div class="p-4 sm:ml-64 flex-auto" style="margin-top: 20px; margin-bottom: 20px">
    <div class="p-4 border-2  rounded-lg mt-10">
        <div id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-3">
                <button type="button" class="flex items-center justify-between w-full p-5 font-large rtl:text-right text-gray-500 border border-blue-600 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                    <span>ተጠቃሚን ያስተዳድሩ</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <div class="grid grid-cols-2 md:grid-cols-2 gap-2">
                        <form id="userfrm">
                            @csrf
                        <div>
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="full_name" class="rounded-none rounded-e-sm bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Full Name">
                        </div>
                        <div>
                          <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Name</label>
                            <input type="text" name="user_name" class="rounded-none rounded-e-sm bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="User Name">
                        <div>
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" class="rounded-none rounded-e-sm bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password">
                        </div>
                        <div>
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Role</label>
                            <select name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>User Role</option>
                                <option value="admin">Admin</option>
                                <option value="subcity">Subcity</option>
                                <option value="woreda">Woreda</option>
                            </select>
                        </div>
                        <div>
                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">&nbsp;</label>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="container mx-auto mt-8">
                <table id="dataTable" class="stripe hover" style="width:100%">
                    <thead>
                    <tr>
                        <th style="text-align: left">No</th>
                        <th style="text-align: left">Name</th>
                        <th style="text-align: left">Role</th>
                        <th style="text-align: left">Action</th>
                        <!-- Add more columns as needed -->
                    </tr>
                    </thead>
                    <tbody>
                       @foreach($user as $item)
                           <tr>
                               <td style="text-align: left">1</td>
                               <td style="text-align: left">{{$item->name}}</td>
                               <td style="text-align: left">{{$item->role}}</td>
                               <td style="text-align: left">{{$item->role}}</td>
                           </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@include(".Includes/footer")
