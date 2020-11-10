<div class="flex flex-col items-center w-full justify-center">
    <h1 class="text-3xl text-gray-800">{{ __('Booking indstillinger') }}</h1>
    <div class="form-wrapper md:max-w-full">
        <h2 class="form-header">{{ __('Bookinger') }}</h2>
        <div class="form-group">
            <div class="form-label-wrapper">
                <label for="" class="font-semibold">{{ __('Varighed') }}:</label>
            </div>
            <div class="form-input-wrapper">
                <select wire:model="booking.duration" class="form-select w-auto focus:outline-none min-w-36">
                    <option value="15">{{ __('15 Minuter') }}</option>
                    <option value="30">{{ __('30 Minuter') }}</option>
                    <option value="45">{{ __('45 Minuter') }}</option>
                    <option value="60">{{ __('1 time') }}</option>
                    <option value="90">{{ __('1½ time') }}</option>
                    <option value="120">{{ __('2 timer') }}</option>
                    <option value="150">{{ __('2½ time') }}</option>
                    <option value="180">{{ __('3 timer') }}</option>
                    <option value="210">{{ __('3½ time') }}</option>
                    <option value="240">{{ __('4 timer') }}</option>
                    <option value="270">{{ __('4½ time') }}</option>
                    <option value="300">{{ __('5 timer') }}</option>
                    <option value="360">{{ __('6 timer') }}</option>
                    <option value="360">{{ __('6 timer') }}</option>
                    <option value="420">{{ __('7 timer') }}</option>
                    <option value="480">{{ __('8 timer') }}</option>
                    <option value="540">{{ __('9 timer') }}</option>
                    <option value="600">{{ __('10 timer') }}</option>
                    <option value="720">{{ __('12 timer') }}</option>
                    <option value="840">{{ __('14 timer') }}</option>
                    <option value="960">{{ __('16 timer') }}</option>
                </select>
                <x-inc.questionmark  />
            </div>
        </div>
        <div class="form-group">
            <div class="form-label-wrapper">
                <label for="booking.empty_seats" class="font-semibold">{{ __('Tomme pladser') }}:</label>
            </div>
            <div class="form-input-wrapper">
                <input type="number" wire:model="booking.empty_seats" wire:change="$emit('showalert')" min="0" max="20" class="form-input focus:outline-none pl-2 min-w-36"/>
                <x-inc.questionmark msg="Gnu" />
            </div>

        </div>
        <div class="form-group">
            <div class="form-label-wrapper">
                <label for="" class="font-semibold">{{ __('Turnaround') }}:</label>
            </div>
            <div class="form-input-wrapper">
                <select wire:model="booking.turnaround_time" class="form-select w-auto focus:outline-none min-w-36">
                    <option value="0">{{ __('0 Minuter') }}</option>
                    <option value="5">{{ __('5 Minuter') }}</option>
                    <option value="10">{{ __('10 Minuter') }}</option>
                    <option value="15">{{ __('15 Minuter') }}</option>
                    <option value="20">{{ __('20 Minuter') }}</option>
                    <option value="25">{{ __('25 Minuter') }}</option>
                    <option value="30">{{ __('30 Minuter') }}</option>
                </select>
                <x-inc.questionmark msg="test" />
            </div>

        </div>
        <div class="form-group">
            <div class="form-label-wrapper">
                <label for="" class="font-semibold">{{ __('Kontakt via') }}:</label>
            </div>
            <div class="form-input-wrapper">
                <input type="checkbox" wire:model="booking.contact_via_phone" class="form-checkbox h-5 w-5 text-blue-600" />
                <label class="font-semibold ml-2"> {{ ' ' .  __('Telefon') }}</label>
                <input type="checkbox" wire:model="booking.contact_via_email" class="ml-4 form-checkbox h-5 w-5 text-blue-600" />
                <label class="font-semibold ml-2"> {{ ' ' .  __('Email') }}</label>
            </div>
            <x-inc.questionmark msg="{{ __('Hvordan foretrækker du kunden kontakter dig?') }}" />
        </div>
        <div class="form-group">
            <div class="form-label-wrapper">
                <label class="font-semibold">{{ __('Email bekræftelse') }}:</label>
            </div>
            <div class="form-input-wrapper">
                <input type="checkbox" wire:model="booking.email_confirmation" class="form-checkbox h-5 w-5 text-blue-600" />
                <x-inc.questionmark msg="{{ __('Skal der sendes en email bekræftelse?') }}" />
            </div>
        </div>
        <div class="form-group">
            <div class="form-label-wrapper">
                <label class="font-semibold">{{ __('Tilfredshedsundersøgelse') }}:</label>
            </div>
            <div class="form-input-wrapper">
                <input type="checkbox" wire:model="booking.survey" class="form-checkbox h-5 w-5 text-blue-600" />
                <x-inc.questionmark msg="{{ __('Send tilfredshedsundersøgelser til gæsterne på email efter hvert besøg?') }}" />
            </div>
        </div>
        <div class="form-group">
            <div class="form-label-wrapper">
                <label for="" class="font-semibold">{{ __('Tripadvisor review URL') }}:</label>
            </div>
            <div class="form-input-wrapper">
                <input type="text" wire:model="booking.tripadvisor_url" class="form-input focus:outline-none pl-2 min-w-72"/>
                <x-inc.questionmark msg="{{ __('Bed gæster om at lave en tripadvisor anmeldelse efter de har udfyldt tilfredshedsundersøgelsen (hvis tilfredsheden er 4+).') }}" />
            </div>
        </div>
        <div class="form-group">
            <div class="form-label-wrapper">
                <label class="font-semibold">{{ __('Oplys sluttidspunkt') }}:</label>
            </div>
            <div class="form-input-wrapper">
                <input type="checkbox" wire:model="booking.end_time" class="form-checkbox h-5 w-5 text-blue-600" />
                <x-inc.questionmark msg="{{ __('Oplys sluttidspunkt for reservationer.') }}" />
            </div>
        </div>
        <div class="form-group">
            <div class="form-label-wrapper">
                <label class="font-semibold">{{ __('Tillad afbestilling') }}:</label>
            </div>
            <div class="form-input-wrapper">
                <input type="checkbox" wire:model="booking.allow_cancel" class="form-checkbox h-5 w-5 text-blue-600" />
                <x-inc.questionmark msg="{{ __('Giv gæsterne mulighed for at afbestille via hjemmesiden.') }}" />
            </div>
        </div>
        <div class="form-group">
            <div class="form-label-wrapper">
                <label class="font-semibold">{{ __('GDPR Slettetid') }}:</label>
            </div>
            <div class="form-input-wrapper">
                <select wire:model="booking.gdpr_time" class="form-select w-auto focus:outline-none min-w-36">
                    <option value="1">{{ __('1 Måned') }}</option>
                    <option value="6">{{ __('6 Måneder') }}</option>
                    <option value="12">{{ __('1 År') }}</option>
                    <option value="24">{{ __('2 År') }}</option>
                    <option value="0">{{ __('Ingen udløb') }}</option>
                </select>
                <x-inc.questionmark msg="{{ __('Hvor lang tid efter sidste booking skal systemet opbevare personlige oplysninger?') }}" />
            </div>
        </div>
    </div>
    <div class="form-wrapper md:max-w-full mt-8">
        <h2 class="form-header">{{ __('Online Booking (På Hjemmesiden)') }}</h2>
        <div class="form-group">
            <div class="form-label-wrapper">
                <label>{{ __('Antal Gæster:') }}</label>
            </div>
            <div class="form-input wrapper">
                <input type="number" wire:model="booking.online_min_pax" min="1" max="10" class="form-input focus:outline-none pl-2 min-w-36">
                {{ __(' til ') }}
                <input type="number" wire:model="booking.online_max_pax" :min="booking.online_min_pax" class="form-input focus:outline-none pl-2 min-w-36">
            </div>
        </div>
    </div>
</div>
