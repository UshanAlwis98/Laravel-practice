This is mydata view file.
<a href="/readit">Navigate to blogs page</a>
<br />
<?php

for ($i = 5; $i < 10; $i++) {
    echo $i;
}

?>
<br />
@for ($i = 6; $i < 10; $i++)
    {{ $i }}
@endfor
<br />

<?php
$name = ['John', 'Jane', 'Doe'];
foreach ($name as $n) {
    echo $n . ' ';
}
?>

<br />
@php
$name2 = ['Ushan', 'Loshitha', 'Alwis'];
@endphp
@foreach ($name2 as $n2)
    {{ $n2 }}
@endforeach
<br />

@php
    $mynumber = 1;
@endphp

@while ($mynumber <= 5)
    {{ $mynumber }}
    @php
        $mynumber++;
    @endphp

@endwhile
