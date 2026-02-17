<div class="relative w-[95%] bg-white h-auto rounded-lg shadow-lg p-5 gap-y-2 flex flex-col border-2 border-lightAccent mx-auto">

    <div class="size-fit absolute right-1 top-1 cursor-pointer z-2 flex" type="button">
        <x-uiw-setting class="w-4 h-4 z-1 text-black" />
        <div class="overlay open-control-menu w-4 h-4 z-2 rounded-full absolute"></div>
    </div>

    <div class="control-menu grow-shrink-anim absolute w-[30%] h-30 bg-lightPrimary top-2 right-2 rounded-full rounded-tr-none flex flex-col justify-center items-center gap-x-2">

        <div class="size-fit top-1 right-1 absolute cursor-pointer z-2 flex" type="button">
            <x-uiw-circle-close class="w-6 h-6 z-1 text-black" />
            <div class="overlay close-control-menu w-6 h-6 z-2 rounded-full absolute"></div>
        </div>

        <div class="w-full flex flex-row justify-center items-center gap-x-2">
            <a href="{{ route('dashboard.form_edit-study-list', $studyDayId) }}">
                <x-heroicon-s-pencil-square class="w-8 h-8 bg-white rounded-full p-1 cursor-pointer text-black" /> 
            </a>

            <button type="submit" form="delete-tasks-form-{{ $studyDayId }}">
                <x-heroicon-s-trash class="w-8 h-8 text-red-500 bg-white rounded-full p-1 cursor-pointer" />
            </button>
        </div>

        <div class="w-full flex flex-row justify-center items-center gap-x-2">
            <input type="checkbox" class="checkbox checkbox-neutral" />
        </div>

    </div>

    <div class="w-full h-auto flex flex-col justify-center items-center p-4 rounded-lg border-2 border-lightAccent bg-white">
        <h2 class="text-lightTextSecondary w-full text-2xl font-medium">{{ $title }}</h2>
        <p class="text-xl w-full text-lightTextSecondary">{{ $time1 }} - {{ $time2 }}</p>
        <p class="text-md w-full text-lightTextSecondary">{{ $description }}</p>
    </div>

</div>

<form id="delete-tasks-form-{{ $studyDayId }}" action="{{ route('dashboard.delete-study-list', $studyDayId) }}" method="post">
    @csrf
    @method('DELETE')
    
</form>