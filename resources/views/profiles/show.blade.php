@extends('layouts.app')

@section('content')
<header class="mb-6 relative">
    <img src="/images/default-profile-banner.jpg" alt="" class="mb-2 rounded-lg">

    <div class="flex justify-between items-center mb-4">
        <div>
            <h2 class="font-bold text-2xl mb-0">
                {{ $user->name }}
            </h2>
            <p class="text-small">
                Joined {{ $user->created_at->diffForHumans() }}
            </p>
        </div>
        <div>
            <a href="" class="rounded-full border border-grey-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
            <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow Me</a>
        </div>
    </div>
    <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores et, accusantium, aut porro
        eligendi mollitia alias voluptatum animi magnam recusandae libero reiciendis illum ut sequi aperiam perferendis
        ea suscipit, nemo in exercitationem? Minus commodi delectus suscipit consectetur vel, iste, sed dolor maiores
        deserunt earum tempora, beatae sequi? Soluta, excepturi provident.</p>
    <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2 absolute top-0 w-150"
        style="width: 150px; left: calc(50% - 75px); top: 138px;">

</header>
@include('_timeline')
@endsection