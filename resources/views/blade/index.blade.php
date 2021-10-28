<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('index') }}
        </h2>
    </x-slot>

    <div style="padding: 3%">

        <div>
            <div class="">
                <button
                    class="btn btn-warning"
                    type="button"
                    onclick="location.href='{{ route('car.create') }}'">
    
                    차량 등록하기
    
                </button>
            </div>
    
        </div>
        
        <div class="card-header">
            글 목록 보기
        </div>

        @foreach ($posts as $post)
        <div class="card">
            <div class="card-body">
                <a href="{{ route('car.show', ['id' => $post->id]) }}">< {{ $post->company }}, {{ $post->carName }}, {{ $post->year }} > </a>

                <div class="form-row float-right">
                    {{ $post->created_at }}
                </div>
            </div>
        </div>
        @endforeach

    </div>

    {{ $posts->links() }}

</x-app-layout>