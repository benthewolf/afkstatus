@extends('layouts.app')

@section('header')
@endsection

@section('content')
    <section class="max-h-[100svh] relative overflow-y-hidden">
        <div class="container max-w-[1200px] py-[100px] absolute left-1/2 -translate-x-1/2 h-full">
            <div class="flex w-full h-full items-center justify-center">
                <div class="flex flex-col gap-10 items-center justify-center">
                    <p class="text-5xl font-bold font-mono font-solah text-[#a27e8d] text-center">
                        {{ now()->format('l, F j, Y') }}
                    </p>

                    <h2 id="current-time" class="text-9xl font-bold font-mono font-solah text-[#a27e8d]"></h2>

                    <p class="text-5xl font-bold font-mono font-solah text-[#fe8251] text-center leading-[80px]">
                        BREAK
                    </p>
                </div>
            </div>
        </div>

        <video autoplay muted loop playsinline class="w-full object-cover">
            <source src="{{ $hero->video }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>
@endsection

@section('footer')
@endsection

@section('footer-scripts')
    <script>
        function updateTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString(); // includes seconds
            document.getElementById('current-time').textContent = timeString;
        }

        setInterval(updateTime, 1000);
        updateTime(); // call immediately to avoid delay
    </script>
@endsection
