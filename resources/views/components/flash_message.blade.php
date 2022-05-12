@if (session()->has('success'))
    <div class="py-3 px-4 bg-teal-400 rounded-md mt-6 ease-in-out duration-400 mb-10">
        <span class="font-bold text-white ">{{ session('success') }}</span>
        <span class="float-right text-xl cursor-pointer text-white leading-[1]"
            onclick="this.parentElement.style.display='none'">&times;</span>
    </div>
@elseif(session()->has('failed'))
    <div class="py-3 px-4 bg-red-500 rounded-md mt-6 ease-in-out duration-400 mb-10">
        <span class="font-bold text-white ">{{ session('failed') }}</span>
        <span class="float-right text-xl cursor-pointer text-white leading-[1]"
            onclick="this.parentElement.style.display='none'">&times;</span>
    </div>
@endif
