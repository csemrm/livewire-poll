<div>

    <form wire:submit.prevent= "createPoll">
        <label>Poll Title</label>
        <input type="text" id="title" wire:model.live="title">
        @error('title')
            <div class="text-red-500"> {{ $message }}</div>
        @enderror

        <div class="mb-4">
            @foreach ($options as $index => $option)
                <div class="mb-4">
                    <label> Option {{ $index + 1 }} - {{ $option }}</label>

                    <div class="flex gap-2">
                        <input type="text" wire:model="options.{{ $index }}" />

                        <button class="btn" wire:click.prevent="removeOption({{ $index }})">Remove</button>

                    </div>
                    @error("options.{$index}")
                            <div class="text-red-500"> {{ $message }}</div>
                        @enderror
                </div>
                <hr/>
            @endforeach
        </div>
        <div class="mb-4 flex gap-5">
            <button class="btn" wire:click.prevent= "addOption"> Add More Option</button>
            <button type="submit" class="btn">Create Poll</button>
        </div>


    </form>
</div>
