<x-header data="Name Header Component"/>

@include('inner')

{{-- Conditions
@if ($name=="Aeriech")
<h1>
    My Name Is Aeriech
</h1>
@elseif ($name=="Ace")
<h1>
    Hi Im {{ $name }}
</h1>
@else
<h1>
    Hello from {{ $name }}
</h1>
@endif --}}

{{-- foreach loop
@foreach ($names as $item)
    <h1>{{ $item }}</h1>
@endforeach

for loop
@for($i = 1; $i <= 5; $i++)
<h3>{{ $i }}</h3>
@endfor --}}

<a href="/about">About Page</a>