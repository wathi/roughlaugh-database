<x-layout title="Content">
    <h1 class="text-2xl font-bold mb-4 text-center mb-8">過去出演</h1>

    @if(!$posts)
        <p>No posts available.</p>
    @else    
        <x-pagination :current-page="$currentPage" :total-pages="$totalPages" class="mb-4"/>
        <div class="overflow-x-auto mb-4">
            <table class="table">
                <!-- head -->
                <thead>
                <tr>
                    <th>放送日</th>
                    <th></th>
                    <th>タイトル</th>
                    <th>メンバー</th>
                    <th>アーカイブ</th>
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
                    <a href="{{ route('content.show', ['id' => $post['id']]) }}" class="hover:underline">
                        <h2 class="lg:text-lg sm:text-md font-bold mb-2">{{ html_entity_decode($post['title']['rendered'], ENT_QUOTES | ENT_HTML5, 'UTF-8') }}</h2>
                    </a>    
                        <div class="badge badge-ghost badge-base"><a href="{{ $post['acf']['source_url'] }}" target="_blank" >{{$post['acf']['source'] }}</a></div>
                    </td>   
                    <td> 
                    <div class="w-64 flex flex-col gap-1">                
                        @if($post['acf']['member'])             
                            @foreach($post['acf']['member'] as $member)
                                <div class="badge badge-ghost badge-base">{{$member}}</div>
                            @endforeach
                        @endif
                    </div> 
                    </td>       
                    <td>
                        <iframe width="340" height="180" src="{{ $post['acf']['embed_url'] }}"></iframe>
                    </td>
                </tr>
            @endforeach
                </tbody>  
                <!-- foot -->
                <tfoot>
                </tfoot>
            </table>
        </div>
        <x-pagination :current-page="$currentPage" :total-pages="$totalPages" />
    @endif      
    </x-layout>