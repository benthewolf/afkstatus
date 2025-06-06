@extends('layouts.app')

@section('header')
@endsection

@section('content')
    @livewire('break-displayy', [
        'hero' => $hero,
    ])
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
