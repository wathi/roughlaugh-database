<x-layout>
  <div class="max-w-6xl mx-auto">
    <div>
      <a href="{{ url()->previous() }}"class="btn btn-soft mb-4">
      ← Back
      </a>
    </div>
    <div class="wp-content mx-auto max-w-4xl">
      <h1 class="md:text-2xl text-base font-bold mb-4">{{ html_entity_decode($post['title']['rendered'], ENT_QUOTES | ENT_HTML5, 'UTF-8') }}</h1>
      <div class="flex gap-4 mb-4 text-sm text-gray-600">        
        <div>{{ (new DateTime($post['date']))->format('Y-m-d') }}</div>
        <div> | </div>
        <div>{{ $post['acf']['source'] }}</div>
      </div>
      <div>{!! $post['content']['rendered'] !!}</div>
    </div>
  </div>
</x-layout>
