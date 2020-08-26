@extends('layouts.app')

@section('content')
<div class="lg:flex">
    <div class="lg:w-1/6">
        @include('_sidebar-links')
    </div>
    <div class="lg:flex-1 lg:mx-10">
        <div class="border border-blue-400 rounded-lg p-8">
            <form action="">
                <textarea name="body" id="" class="w-full" placeholder="Say Something">
                </textarea>
                <hr>
                <button type="submit">Tweet</button>
            </form>

        </div>
        <div>

        </div>
    </div>
    <div class="lg:w-1/6">
        @include('_friends-links')
    </div>
</div>
@endsection