<h1>Even or Odd</h1>


<p>Num: {{ $x }}</p>

@if ($x % 2 == 0)
    <p>Even</p>
@else
    <p>Odd</p>
@endif
