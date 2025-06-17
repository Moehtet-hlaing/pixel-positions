@props(['employer', 'width' => 90])

<img src="{{ asset('storage/' . $employer->logo) }}" alt="90x90" class="rounded-xl" width="{{ $width }}">
