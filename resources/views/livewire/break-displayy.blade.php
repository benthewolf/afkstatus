@props([
    'dateColor' => null,
    'statusColor' => null,
    'btnColor' => null,
    'btnText' => null,
    'btntxtHover' => null,
    'btnHoverbg' => null,
])

<section class="max-h-[100svh] relative overflow-y-hidden relative">
    <div class="container max-w-[1200px] py-[100px] absolute left-1/2 -translate-x-1/2 h-full">
        <div class="flex w-full h-full items-center justify-center">
            <div class="flex flex-col gap-10 items-center justify-center">
                <p class="text-5xl font-bold font-mono font-solah {{ $dateColor }} text-center">
                    {{ now()->format('l, F j, Y') }}
                </p>

                <h2 id="current-time" class="text-9xl font-bold font-mono font-solah {{ $dateColor }}">
                    {{-- Optional JavaScript real-time clock could go here --}}
                </h2>

                <p class="text-5xl font-bold font-mono font-solah {{ $statusColor }} text-center leading-[80px]">
                    {{ $displayText }}
                </p>

                @if ($isInserting)
                    <div class="flex flex-col gap-4 items-center">
                        <input type="text" wire:model.defer="customText" class="border border-[#ccc] rounded px-4 py-2 font-solah text-lg" placeholder="Type your text here..." />
                        <button wire:click="saveCustomText" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                            Submit
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <video autoplay muted loop playsinline class="w-full object-cover">
        <source src="{{ $hero->video }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="absolute left-1/2 -translate-x-1/2 bottom-5 w-[1200px]">
        <div class="flex w-full justify-around">
            <button wire:click="setBreak"
                class="{{ $btnColor }} {{ $btnText }} flex items-center justify-center max-w-[150px] w-full font-solah rounded-[10px] py-[10px] {{ $btnHoverbg }} {{ $btntxtHover }} cursor-pointer">
                BREAK
            </button>
            <button wire:click="setLunch"
                class="{{ $btnColor }} {{ $btnText }} flex items-center justify-center max-w-[150px] w-full font-solah rounded-[10px] py-[10px] {{ $btnHoverbg }} {{ $btntxtHover }} cursor-pointer">
                LUNCH
            </button>
            <button wire:click="enableInsert"
                class="{{ $btnColor }} {{ $btnText }} flex items-center justify-center max-w-[150px] w-full font-solah rounded-[10px] py-[10px] {{ $btnHoverbg }} {{ $btntxtHover }} cursor-pointer">
                INSERT
            </button>
        </div>
    </div>
</section>
