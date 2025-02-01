<!-- resources/views/components/step.blade.php -->
@props(['number', 'title', 'image', 'description'])

<!-- Step component container -->
<div id="step"
    class="flex flex-col items-center space-y-4 text-center shadow-lg border border-gray-300 rounded-2xl hover:border-cyan-500 p-5 transition-transform duration-300 hover:cursor-pointer min-h-[350px] hover:-translate-y-2">
    <!-- Step number -->
    <h1 class="text-lg text-cyan-500 font-semibold">Tahap {{ $number }}</h1>
    <!-- Step image -->
    {!! $image !!}
    <!-- Step title -->
    <h3 class="text-xl text-neutral-800 font-semibold">{{ $title }}</h3>
    <!-- Step description -->
    <p class="text-sm text-gray-700 leading-relaxed flex-grow">
        {{ $description }}
    </p>
</div>
