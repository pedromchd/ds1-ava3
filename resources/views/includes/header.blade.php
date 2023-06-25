<header class="pr-7 py-3 bg-orange-500 flex items-center justify-between">
  <div class="flex items-center">
    <img src="{{ asset('img/bah-logo.png') }}" alt="Bah!Bank Logo" class="h-20">
    <h1 class="-ml-5 text-white text-5xl font-bold drop-shadow-md"><span class="text-[#a84500]">ah!</span>Bank</h1>
  </div>
  @if (Auth::check())
    <form action="{{ route('logout') }}" method="post">
      @csrf
      <button type="submit" class="block w-32 h-12 bg-white text-orange-500 font-bold rounded-md shadow-md">Logout</button>
    </form>
  @endif
</header>