<div class="pl-1 flex items-start text-sm text-blue-600 h-full">
    <i class="fas fa-question-circle tooltip">
        @if($msg)
            <div class="tooltip-text bg-gray-200 text-gray-800 border border-black rounded-xl shadow-xl max-w-xs">
                {{ $msg }}
            </div>
        @endif

    </i>

</div>
