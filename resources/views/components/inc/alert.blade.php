<div id="alert"
     x-data="{ show: false }">
    <div class="alert alert-success"
            x-show="show"
            x-init="setTimeout(() => { show = false; }, 3000)"
            x-transition:enter="transition ease-out duration-1000"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-1000"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90"
            @prop-updated.window="() => {
                show = true;
                setTimeout(() => { show = false; },3000);
                }"
            >

        <span class="alert-{{ session('alert-type') }}-pill">New</span>
        <span class="font-semibold mr-2 text-left flex-auto">
        </span>
        <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
</div>
