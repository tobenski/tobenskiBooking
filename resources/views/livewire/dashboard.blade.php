<main class="flex w-full bg-gray-300 flex-col md:flex-row h-full pt-6">
    <div class="flex w-72 text-2xl pl-4 text-red-600 font-mono font-semibold border border-gray-700 m-3 h-72">
        TEST
    </div>
    <div class="flex flex-col w-full justify-start md:pl-6 pr-4 items-start">
        <div class="flex justify-between w-full items-center">
            <div class="text-lg font-semibold">Fredag den 6. November 2020</div>
            <div class="flex justify-between">
                <button class="px-3 py-1 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-800 mr-2">Ny Booking</button>
                <button class="px-3 py-1 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-800">Walk in</button>
            </div>
            <div>
                <input type="text" name="" id="" placeholder="Kundesøgning">
            </div>
        </div>
        <div>
            <select name="" id="">
                <Option selected>Liste</Option>
            </select>
        </div>
        <div class="flex w-full flex-col">
            @for($i = 0; $i < 5; $i++)
                    <div class="bg-white flex w-full items-center justify-between border-b border-gray-300">
                        <div>12.00</div>
                        <div>
                            <div>o Rita Bojesen</div>
                            <div><span class="px-1 text-xs bg-blue-600 text-white">Bord Reservation</span></div>
                        </div>
                        <div>4 pers.</div>
                        <div>3</div>
                        <div>Booket per tlf.</div>
                        <div>
                            <button class="px-6 py-2 bg-blue-600 text-white">Ankommet</button>
                            <button class="px-6 py-2 bg-blue-600 text-white">Afbestil</button>
                        </div>
                    </div>
            @endfor
        </div>
        <div>
            Sorter Efter:
            <select name="" id="">
                <option value="" selected>Ankomstid</option>
                <option value="" selected>Navn</option>
                <option value="" selected>Bordnavn</option>
                <option value="" selected>Oprettelsestid</option>
            </select>
        </div>
        <div>
            <a href="#">Special åbningstid & bemærkninger</a>
        </div>
    </div>
</main>
