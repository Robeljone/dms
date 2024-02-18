@include(".Includes/header")
@include(".Includes/sidebar")
<div class="p-4 sm:ml-64" style="margin-top: 20px;height: 100%">
    <div class="p-4 border-2 border-black-200 border-solid rounded-lg dark:border-gray-700 mt-14">
        <div class="container mx-auto">
            <div class="grid grid-cols-5 gap-4">
                @foreach($dire as $item)
                    <div class="flex flex-col items-center" id="rightClickDiv">
                        <svg class="w-20 h-20 text-amber-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#ffbf00" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M3 6c0-1.1.9-2 2-2h5.5a2 2 0 0 1 1.6.7L14 7H3V6Zm0 3v10c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V9H3Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="mt-2 text-sm"><a href="/sub_folder/{{$item->id}}">{{$item->name}}</a></span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@include(".Includes/footer")
