<aside class="lg:px-8">
  <div>
    <!-- Desktop Menu -->
    <ul class="menu px-1 hidden lg:flex">
      <li>
        <a href="{{ route('info.roughlaugh') }}"> 
          <div class="text-base">ラフラフとは</div>
        </a>
      </li>
      <li>
        <a href="{{ route('info.content') }}">  
          <div class="text-base">ラフラフの見どころ</div>
        </a>
      </li>
      <li>
        <a href="{{ route('member.index') }}">  
          <div class="text-base">メンバー</div>
        </a>
      </li>
      <li>
        <a href="{{ route('member.saito-arisa') }}">  
          <div class="text-base">齋藤有紗</div>
          <div class="text-md">Saito Arisa</div>
        </a>
      </li>
      <li>
        <a href="{{ route('member.sasaki-funa') }}">  
          <div class="text-base">佐々木楓菜</div>
          <div class="text-md">Sasaki Funa</div>
        </a>
      </li>
      <li>
        <a href="{{ route('member.takanashi-yui') }}">  
          <div class="text-base">高梨結</div>
          <div class="text-md">Takanashi Yui</div>
        </a>
      </li>
      <li>
        <a href="{{ route('member.nagamatsu-haru') }}">  
          <div class="text-base">永松波留</div>
          <div class="text-md">Nagamatsu Haru</div>
        </a>
      </li>
      <li>
        <a href="{{ route('member.natsume-ryoka') }}">  
          <div class="text-base">夏目涼風</div>
          <div class="text-md">Natsume Ryoka</div>
        </a>
      </li>
      <li>
        <a href="{{ route('member.hibino-meina') }}">  
          <div class="text-base">日比野芽奈</div>
          <div class="text-md">Hibino Meina</div>

        </a>
      </li>
      <li>
        <a href="{{ route('member.fujisaki-miku') }}">  
          <div class="text-base">藤崎未来</div>
          <div class="text-md">Fujisaki Miku</div>
        </a>
      </li>
      <li>
        <a href="{{ route('member.yoshimura-monami') }}">  
          <div class="text-base">吉村萌南</div>
          <div class="text-md">Yoshimura Monami</div>
        </a>
      </li>
    </ul>
    <!-- Mobile Menu -->
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden flex flex-col">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-8 w-8 stroke-current"> 
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
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
        <li>
          <a href="{{ route('others.index') }}" class="{{ request()->routeIs('others.index') ? 'menu-active' : '' }} flex items-center">  
            <div class="text-sm">その他</div>
            <div class="text-xs text-gray-500">OTHERS</div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</aside>