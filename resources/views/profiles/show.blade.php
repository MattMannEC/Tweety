<x-app>
    <header class="mb-6">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg" alt="" class="mb-2 rounded-lg">
            <img src="{{ $user->avatar }}" alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="width: 150px; left:50%;">
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0">
                    {{ $user->name }}
                </h2>
                <p class="text-small">
                    Joined {{ $user->created_at->diffForHumans() }}
                </p>
            </div>
            <div class="flex">
                @if (currentUser()->is($user))
                <a href="" class="rounded-full border border-grey-300 py-2 px-4 text-black text-xs mr-2">Edit
                    Profile</a>
                @endif

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores et, accusantium, aut porro
            eligendi mollitia alias voluptatum animi magnam recusandae libero reiciendis illum ut sequi aperiam
            perferendis
            ea suscipit, nemo in exercitationem? Minus commodi delectus suscipit consectetur vel, iste, sed dolor
            maiores
            deserunt earum tempora, beatae sequi? Soluta, excepturi provident.</p>
    </header>
    @include('_timeline')
</x-app>