<nav class="navbar bg-base-100 shadow-sm flex justify-between lg:px-8">
  <div class="lg:navbar-start">
    <a class=" flex flex-col items-start" href="/">
      <div class="lg:text-xl text-lg">ラフｘラフデータベース</div>
      <div class="lg:text-base text-md text-gray-500">rough x laugh database -unoffical fans site- </div>
    </a>
  </div>
  <div class="lg:navbar-end">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path> </svg>      </div>
      <ul
        tabindex="-1"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-48 p-2 shadow right-0">
        <li>
          <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'menu-active' : '' }} flex items-center"> 
            <div class="text-sm">トップ</div>
            <div class="text-xs text-gray-500">TOP</div>      
          </a>
        </li>
        <li>
          <a href="{{ route('content.index') }}" class="{{ request()->routeIs('content.index') ? 'menu-active' : '' }} flex itenms-center">  
            <div class="text-sm">メディア</div>
            <div class="text-xs text-gray-500">MEDIA</div>
          </a>
        </li>
        <li>
          <a href="{{ route('live.index') }}" class="{{ request()->routeIs('live.index') ? 'menu-active' : '' }} flex itenms-center">  
            <div class="text-md">ライブ</div>
            <div class="text-xs text-gray-500">LIVE</div>
          </a>
        </li>   
        <li>
          <a href="{{ route('article.index') }}" class="{{ request()->routeIs('article.index') ? 'menu-active' : '' }} flex itenms-center">  
            <div class="text-md">記事</div>
            <div class="text-xs text-gray-500">ARTICLE</div>
          </a>
        </li>      
      <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </div>
    <ul class="menu menu-horizontal px-1 hidden lg:flex">
      <li>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'menu-active' : '' }} flex flex-col items-center"> 
          <div class="text-md">トップ</div>
          <div class="text-sm text-gray-500">TOP</div>      
        </a>
      </li>
      <li>
        <a href="{{ route('content.index') }}" class="{{ request()->routeIs('content.index') ? 'menu-active' : '' }} flex flex-col itenms-center">  
          <div class="text-md">メディア</div>
          <div class="text-xs text-gray-500">MEDIA</div>
        </a>
      </li>
      <li>
        <a href="{{ route('live.index') }}" class="{{ request()->routeIs('live.index') ? 'menu-active' : '' }} flex flex-col itenms-center">  
          <div class="text-md">ライブ</div>
          <div class="text-xs text-gray-500">LIVE</div>
        </a>
      </li>
      <li>
        <a href="{{ route('article.index') }}" class="{{ request()->routeIs('article.index') ? 'menu-active' : '' }} flex flex-col itenms-center">  
          <div class="text-md">記事</div>
          <div class="text-xs text-gray-500">ARTICLE</div>
        </a>
      </li>      
      <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
  </div>
</nav>