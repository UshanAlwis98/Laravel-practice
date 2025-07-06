This blog page.
<a href="/gohere ">Navigate to Test page</a>
<a href="{{ route('students') }} ">Navigate to Student page</a>


<?php
echo 'Hello, this is the blog page.';
// php syntax
?>

<br>
{{ 'Hello world' }}
{{-- Laravel blade comment --}}

<?php
$blogNo = 13;
echo $blogNo;
echo '<br>';
?>

@php
    $blogNo = 12;
@endphp

{{ $blogNo }}

<?php
//This is a comment
?>

{{-- This is a comment --}}

<br>
<?php

echo "<h1>This is HTML Heading</h1>";
?>

{!! "<h1>This is HTML Heading in blade template</h1>" !!}
