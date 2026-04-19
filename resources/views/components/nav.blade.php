<nav class="navbar bg-base-100 shadow-sm flex justify-between lg:px-8">
  <div class="lg:navbar-start">
    <a class=" flex flex-col items-start" href="{{ route('home') }}">
      <div class="lg:text-xl text-lg">ラフｘラフデータベース</div>
      <div class="lg:text-base text-md text-gray-500">Rough x Laugh Database -unofficial fans site- </div>
    </a>
  </div>
  <div class="lg:navbar-end">

    <!-- Desktop Menu -->
    <ul class="menu menu-horizontal px-1 hidden lg:flex">
      <li>
        <a href="{{ route('home') }}" class="flex flex-col items-center"> 
          <div class="text-base">トップ</div>
          <div class="text-sm text-gray-500">TOP</div>      
        </a>
      </li>
      <li>
        <a href="{{ route('content.index') }}" class="{{ request()->routeIs('content.index') ? 'menu-active' : '' }} flex flex-col items-center">  
          <div class="text-base">メディア</div>
          <div class="text-sm text-gray-500">MEDIA</div>
        </a>
      </li>
      <li>
        <a href="{{ route('live.index') }}" class="{{ request()->routeIs('live.index') ? 'menu-active' : '' }} flex flex-col items-center">  
          <div class="text-base">ライブ</div>
          <div class="text-sm text-gray-500">LIVE</div>
        </a>
      </li>
      <li>
        <a href="{{ route('article.index') }}" class="{{ request()->routeIs('article.index') ? 'menu-active' : '' }} flex flex-col items-center">  
          <div class="text-base">記事</div>
          <div class="text-sm text-gray-500">ARTICLE</div>
        </a>
      </li>      
      <li>
        <a href="{{ route('publication.index') }}" class="{{ request()->routeIs('publication.index') ? 'menu-active' : '' }} flex flex-col items-center">  
          <div class="text-base">書籍・雑誌</div>
          <div class="text-sm text-gray-500">PUBLICATION</div>
        </a>
      </li>
    </ul>
        <!-- Mobile Menu -->
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden flex flex-col">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-8 w-8 stroke-current"> 
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        {{-- <div class="text-xs">Menu</div> --}}
      </div>
      <ul
        tabindex="-1"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-48 p-2 shadow right-0">
        <li>
          <a href="{{ route('home') }}" class="flex items-center"> 
            <div class="text-sm">トップ</div>
            <div class="text-xs text-gray-500">TOP</div>      
          </a>
        </li>
        <li>
          <a href="{{ route('content.index') }}" class="{{ request()->routeIs('content.index') ? 'menu-active' : '' }} flex items-center">  
            <div class="text-sm">メディア</div>
            <div class="text-xs text-gray-500">MEDIA</div>
          </a>
        </li>
        <li>
          <a href="{{ route('live.index') }}" class="{{ request()->routeIs('live.index') ? 'menu-active' : '' }} flex items-center">  
            <div class="text-sm">ライブ</div>
            <div class="text-xs text-gray-500">LIVE</div>
          </a>
        </li>   
        <li>
          <a href="{{ route('article.index') }}" class="{{ request()->routeIs('article.index') ? 'menu-active' : '' }} flex items-center">  
            <div class="text-sm">記事</div>
            <div class="text-xs text-gray-500">ARTICLE</div>
          </a>
        </li>      
        <li>
          <a href="{{ route('publication.index') }}" class="{{ request()->routeIs('publication.index') ? 'menu-active' : '' }} flex items-center">  
            <div class="text-sm">書籍・雑誌</div>
            <div class="text-xs text-gray-500">PUBLICATION</div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>