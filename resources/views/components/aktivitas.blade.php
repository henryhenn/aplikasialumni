<div class="py-3 bg-indigo-700 text-white px-2 sm:px-4 dark:bg-gray-800">
    <div class="container flex flex-row mx-auto">
        <div class="basis-1/4">
            <span class="font-bold">Aktivitas</span>
        </div>
        <div class="basis-1/2">
            <marquee direction="left" class="text-white font-bold overflow-hidden px-5 mx-auto col-span-4">
                <span>
                    @forelse ($aktivitas as $data)
                        {{ $data->aktivitas }} &nbsp; | &nbsp;
                    @empty
                        Tidak ada aktivitas terbaru
                    @endforelse
                </span>
            </marquee>
        </div>
        <div class="basis-1/4">
            <div class="float-right space-x-2">
                <a href="">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>
</div>
