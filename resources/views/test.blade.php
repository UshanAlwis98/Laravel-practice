This is test page
This is test page
<a href="/readit ">Navigate to Blog</a>
<a href="{{ route('students') }}">Navigate to Student page</a>

<br>

<?php
$age = 29;
if ($age >= 18) {
    echo 'You are an adult.';
} else {
    echo 'You are a minor.';
}

?>

<br>
@php
    $age = 14;
@endphp

@if ($age >= 18)
    {{ 'You can enter here.' }}
@else
    {{ 'You can not enter here.' }}
@endif

<br>
@php
    $age2 = 20;
@endphp

@switch($age2)
    @case(0)
        {{ 'You are a child.' }}
    @break;
    @case(20)
        {{ 'You are a teenager.' }}
    @break;

    @default
        {{ 'You are not born yet.' }}
    @break;
@endswitch
