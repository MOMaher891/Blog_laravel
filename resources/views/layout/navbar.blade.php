<?php
use Illuminate\Support\Facades\Auth;
$text = '';
if (Auth::user()) {
    $text = 'Logout';
} else {
    $text = 'Login';
}
?>
<div class="header" id="header">
    <div class="container">
        <a href="{{ url('/') }}" class="logo">Blogs</a>
        <ul class="main-nav">
            <li><a href="{{ url('blog/index') }}">Blogs</a></li>
            <li><a href="{{ url('category/index') }}">Category</a></li>
            <li><a href="#">Users</a></li>
            <li style="color:red !important"><a href="{{ url('auth/logout') }}">{{ $text }}</a></li>
        </ul>
    </div>
</div>
