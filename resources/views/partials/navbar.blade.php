<nav class="bg-white w-full h-max px-6 py-2 flex flex-row justify-between">
    <div class="flex flex-row text-2xl font-mono font-bold">
        <h5>Scholar</h5>
        <h5 class="text-green-500">Shop</h5>
    </div>
    @if(auth()->user())
    <div>
        <button onclick="dropDown()" class="text-2xl"><i class="fa-solid fa-bars"></i></button>
    </div>
    @else
    <div>
        <a href="/signin">Sign In</a>
    </div>
    @endif
</nav>

<div id="nav-drop" class="hidden flex-col bg-white w-max h-max shadow-sm border rounded-lg fixed right-6">
    <div class="flex flex-col w-full">
        <span class="bg-green-50 font-bold px-4 py-2">General</span>
        <ul class="flex flex-col gap-1 py-1 pl-4 pr-20">
            <li><a href="/profile"></a>Profile</li>
            <li><a href="/account"></a>Account</li>
            <li><a href="/shop">Shop</a></li>
        </ul>
        <span class="bg-green-50 font-bold px-4 py-2">Warning</span>
        <ul class="flex flex-col gap-1 py-1 pl-4 pr-20">
            <li><a href="/signout" class="text-red-500 hover:text-red-400 hover:duration-150"><i class="fa-solid fa-right-from-bracket"></i> Sign Out</a></li>
        </ul>
    </div>
</div>