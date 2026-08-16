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
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-56 p-2 shadow right-0">
        <li>
          <a href="{{ route('info.roughlaugh') }}"> 
            <div class="text-sm ">ラフラフとは</div>
          </a>
        </li>
        <li>
          <a href="{{ route('info.content') }}">  
            <div class="text-sm">ラフラフの見どころ</div>
          </a>
        </li>
        <li>
          <a href="{{ route('member.index') }}">  
            <div class="text-sm">メンバー</div>
          </a>
        </li>
        <li>
          <a href="{{ route('member.saito-arisa') }}">  
            <div class="text-sm">齋藤有紗</div>
            <div class="text-xs">Saito Arisa</div>
          </a>
        </li>
        <li>
          <a href="{{ route('member.sasaki-funa') }}">  
            <div class="text-sm">佐々木楓菜</div>
            <div class="text-xs">Sasaki Funa</div>
          </a>
        </li>
        <li>
          <a href="{{ route('member.takanashi-yui') }}">  
            <div class="text-sm">高梨結</div>
            <div class="text-xs">Takanashi Yui</div>
          </a>
        </li>
        <li>
          <a href="{{ route('member.nagamatsu-haru') }}">  
            <div class="text-sm">永松波留</div>
            <div class="text-xs">Nagamatsu Haru</div>
          </a>
        </li>
        <li>
          <a href="{{ route('member.natsume-ryoka') }}">  
            <div class="text-sm">夏目涼風</div>
            <div class="text-xs">Natsume Ryoka</div>
          </a>
        </li>
        <li>
          <a href="{{ route('member.hibino-meina') }}">  
            <div class="text-sm">日比野芽奈</div>
            <div class="text-xs">Hibino Meina</div>

          </a>
        </li>
        <li>
          <a href="{{ route('member.fujisaki-miku') }}">  
            <div class="text-sm">藤崎未来</div>
            <div class="text-xs">Fujisaki Miku</div>
          </a>
        </li>
        <li>
          <a href="{{ route('member.yoshimura-monami') }}">  
            <div class="text-sm">吉村萌南</div>
            <div class="text-xs">Yoshimura Monami</div>
          </a>
        </li> 
      </ul>
    </div>
  </div>
</aside>