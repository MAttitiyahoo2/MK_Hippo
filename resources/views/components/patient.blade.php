<div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('status') }}
    </div>
    @elseif(session('failed'))
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('failed') }}
    </div>
    @endif
    <form method="POST" action="{{ route('new.patient') }}">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <div class="modal-body relative p-4">
            <x-label for="name" :value="__('Name')" />
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="'Fido'" required autofocus />
            <x-label for="species" :value="__('Species')" />
            <x-input id="species" class="block mt-1 w-full" type="text" name="species" :value="'Doggo'" required autofocus />
            <x-label for="color" :value="__('Color')" />
            <x-input id="color" class="block mt-1 w-full" type="color" name="color" :value="'#e66465'" required autofocus />
            <x-label for="dob" :value="__('Birth Date')" />
            <x-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="'01/01/1990'" required autofocus />
        </div>
    </form>
</div>