<nav class="bg-base-100 shadow-sm p-2 lg:p-0 lg:flex lg:items-center lg:justify-between lg:px-8">
  <div>
    <a class=" flex flex-col items-start" href="{{ route('home') }}">
      <div class="lg:text-xl text-lg">ラフｘラフデータベース</div>
      <div class="lg:text-base text-md text-gray-500">rough x laugh database -unofficial fans site- </div>
    </a>
  </div>
  <div>
    <!-- Desktop Menu -->
    <ul class="menu menu-horizontal px-1 hidden lg:flex">
      <li>
        <a href="{{ route('home') }}" class="flex flex-col items-center"> 
          <div class="text-base">トップ</div>
          <div class="text-sm text-gray-500">TOP</div>      
        </a>
      </li>
      <li>
        <a href="{{ route('info.roughlaugh') }}" class="{{ request()->routeIs('info.*') ? 'menu-active' : '' }} flex flex-col items-center">  
          <div class="text-base">ラフラフ情報</div>
          <div class="text-sm text-gray-500">INFO</div>
        </a>
      </li>
      <li>
        <a href="{{ route('member.index') }}" class="{{ request()->routeIs('member.*') ? 'menu-active' : '' }} flex flex-col items-center">  
          <div class="text-base">メンバー</div>
          <div class="text-sm text-gray-500">MEMBER</div>
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
      <li>
        <a href="{{ route('others.index') }}" class="{{ request()->routeIs('others.index') ? 'menu-active' : '' }} flex flex-col items-center">  
          <div class="text-base">その他</div>
          <div class="text-sm text-gray-500">OTHERS</div>
        </a>
      </li>
    </ul>
    <!-- Mobile Menu -->
    <div class="flex justify-between items-center lg:hidden mt-2 border-t border-gray-300 pt-2">
      <div>
        <ui class="list-none flex flex-row gap-4">
          <li>
            <a href="{{ route('info.roughlaugh') }}" class="flex flex-col items-center">  
              <div class="text-sm">ラフラフ情報</div>
              <div class="text-xs text-gray-500">INFO</div>
            </a>
          </li>
          <li>
            <a href="{{ route('member.index') }}" class="flex flex-col items-center">  
              <div class="text-sm">メンバー</div>
              <div class="text-xs text-gray-500">MEMBER</div>
            </a>
          </li>
          <li>
            <a href="{{ route('content.index') }}" class="flex flex-col items-center">  
              <div class="text-sm">過去出演</div>
              <div class="text-xs text-gray-500">MEDIA</div>
            </a>
          </li>
          <li>
            <a href="{{ route('live.index') }}" class="flex flex-col items-center">  
              <div class="text-sm">ライブ</div>
              <div class="text-xs text-gray-500">LIVE</div>
            </a>
          </li>  
        </ui>
      </div>
      {{-- Mobile Menu INFO --}}
      <div class="dropdown {{ request()->routeIs('info.*') ? 'block' : 'hidden' }} ">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden flex flex-col">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-8 w-8 stroke-current"> 
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </div>
        <ul
          tabindex="-1"
          class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-48 p-2 shadow right-0">
          <li>
            <a href="{{ route('info.roughlaugh') }}" class="flex items-center">  
              <div class="text-sm">ラフラフとは</div>
            </a>
          </li>      
          <li>
            <a href="{{ route('info.content') }}" class="flex items-center">  
              <div class="text-sm">おすすめコンテンツ</div>
            </a>
          </li>
        </ul>
      </div>
      {{-- Mobile Menu MEMBER --}}
      <div class="dropdown {{ request()->routeIs('member.*') ? 'block' : 'hidden' }} ">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden flex flex-col">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-8 w-8 stroke-current"> 
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </div>
        <ul
          tabindex="-1"
          class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-48 p-2 shadow right-0">
          <li>
            <a href="{{ route('member.index') }}" class="flex items-center">  
              <div class="text-sm">メンバー</div>
            </a>
          </li>      
          <li>
            <a href="{{ route('member.saito-arisa') }}" class="flex items-center">  
              <div class="text-sm">齋藤有紗</div>
            </a>
          </li>
          <li>
            <a href="{{ route('member.sasaki-funa') }}" class="flex items-center">  
              <div class="text-sm">佐々木楓菜</div>
            </a>
          </li>
          <li>
            <a href="{{ route('member.takanashi-yui') }}" class="flex items-center">  
              <div class="text-sm">高梨結</div>
            </a>
          </li>
          <li>
            <a href="{{ route('member.nagamatsu-haru') }}" class="flex items-center">  
              <div class="text-sm">永松波留</div>
            </a>
          </li>
          <li>
            <a href="{{ route('member.natsume-ryoka') }}" class="flex items-center">  
              <div class="text-sm">夏目涼風</div>
            </a>
          </li>
          <li>
            <a href="{{ route('member.hibino-meina') }}" class="flex items-center">  
              <div class="text-sm">日比野芽奈</div>
            </a>
          </li>
          <li>
            <a href="{{ route('member.fujisaki-miku') }}" class="flex items-center">  
              <div class="text-sm">藤崎未来</div>
            </a>
          </li>
          <li>
            <a href="{{ route('member.yoshimura-monami') }}" class="flex items-center">  
              <div class="text-sm">吉村萌南</div>
            </a>
          </li>
        </ul>
      </div>
      {{-- Mobile Menu CONTENT --}}
      <div class="dropdown {{ request()->routeIs(['content.*', 'article.*','publication.*','others.*']) ? 'block' : 'hidden' }} ">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden flex flex-col">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-8 w-8 stroke-current"> 
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </div>
        <ul
          tabindex="-1"
          class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-48 p-2 shadow right-0">
          <li>
            <a href="{{ route('content.index') }}" class="flex items-center">  
              <div class="text-sm">メディア</div>
            </a>
          </li>      
          <li>
            <a href="{{ route('article.index') }}" class="flex items-center">  
              <div class="text-sm">記事</div>
            </a>
          </li>
          <li>
            <a href="{{ route('publication.index') }}" class="flex items-center">  
              <div class="text-sm">書籍・雑誌</div>
            </a>
          </li>
          <li>
            <a href="{{ route('others.index') }}" class="flex items-center">  
              <div class="text-sm">その他</div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>