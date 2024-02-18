@include(".Includes/header")
@include(".Includes/sidebar")
<div class="p-4 sm:ml-64 flex-auto" style="margin-top: 20px; margin-bottom: 20px">
    <div class="p-4 border-2  rounded-lg mt-10">
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
                       @foreach($files as $item)
                           <tr>
                               <td style="text-align: left">1</td>
                               <td style="text-align: left">{{$item->name}}</td>
                               <td style="text-align: left">{{$item->name}}</td>
                               <td style="text-align: left">{{$item->name}}</td>
                           </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@include("Includes/footer")
