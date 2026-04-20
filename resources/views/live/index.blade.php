<x-layout>
  <h1 class="text-2xl font-bold text-center mb-2">ライブ</h1>
  <h2 class="text-xl text-center mb-8">LIVE</h2>
  @if(!$posts)
  <p>No posts available.</p>
  @else
  <x-pagination :current-page="$currentPage" :total-pages="$totalPages" class="mb-4" />
  {{-- table --}}
  <div class="hidden lg:block overflow-x-auto mb-4">
    <table class="table">
      <!-- head -->
      <thead>
        <tr>
          <th>日付</th>
          <th></th>
          <th>タイトル</th>
          <th>セットリスト</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($posts as $post)
        <tr>
          <td class="w-32">{{ (new DateTime($post['date']))->format('Y-m-d')  }}</td>
          <td class="w-64">
            <figure>
              <img src="{{ $post['acf']['featured_img_url'] }}" alt="{{ $post['title']['rendered'] }}" />
            </figure>
          </td>
          <td>
            <a href="{{ route('live.show', ['id' => $post['id']]) }}" class="hover:underline">
              <h2 class="lg:text-lg sm:text-md font-bold mb-2">{{ html_entity_decode($post['title']['rendered'], ENT_QUOTES | ENT_HTML5, 'UTF-8') }}</h2>
            </a>
            <div class="badge badge-ghost badge-base"><a href="{{ $post['acf']['source_url'] }}" target="_blank">{{$post['acf']['source'] }}</a></div>
          </td>
          <td class="flex gap-4">
            <div class="w-64 flex flex-col gap-1">
               @if($post['acf']['set_list_01'])
                @foreach($post['acf']['set_list_01'] as $id)
                  <div class  ="badge">{{$song_list_map[$id] ?? ''}}</div>
                @endforeach
              @endif
            </div>
            <div class="w-64 flex flex-col gap-1">
               @if($post['acf']['set_list_02'])
                @foreach($post['acf']['set_list_02'] as $id)
                  <div class="badge">{{$song_list_map[$id] ?? ''}}</div>
                @endforeach
              @endif
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
      <!-- foot -->
      <tfoot>
      </tfoot>
    </table>
  </div>

  {{-- Mobile Card --}}
  <div class="flex flex-wrap gap-8 mb-4 justify-center">
    @foreach($posts as $post)
    <div class="block lg:hidden card bg-base-100 w-96 shadow-sm">
      <figure>
        <img src="{{ $post['acf']['featured_img_url'] }}" alt="{{ $post['title']['rendered'] }}" />
      </figure>
      <div class="card-body">
        <div>{{ (new DateTime($post['date']))->format('Y-m-d')  }}</div>
        <h2 class="card-title">
          <a href="{{ route('live.show', ['id' => $post['id']]) }}" class="hover:underline">
            {{ html_entity_decode($post['title']['rendered'], ENT_QUOTES | ENT_HTML5, 'UTF-8') }}
          </a>
        </h2>
        <div class="badge badge-secondary"><a href="{{ $post['acf']['source_url'] }}" target="_blank">{{$post['acf']['source'] }}</a></div>
      </div>
    </div>
    @endforeach
  </div>
  <x-pagination :current-page="$currentPage" :total-pages="$totalPages" />
  @endif
</x-layout>