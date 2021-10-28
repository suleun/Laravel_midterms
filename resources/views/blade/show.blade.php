<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('show') }}
        </h2>
    </x-slot>

    <div style="padding: 3%">

        <div class="float-right">
            <button
            class="btn btn-warning"
            type="button"
            onclick="location.href='{{ route('car.index') }}'">
            
            목록가기
        
        </button>
        </div>
       

        <div method='post' style="padding-top: 3%">

            @csrf @method('delete')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" >자동차 이름 :
                    {{ $post->carName }}</label>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">제조 회사 :
                    {{ $post->company }}</label>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">제조년도 :
                    {{ $post->year }}</label>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">가격:
                    {{ $post->price }}</label>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">차종 :
                    {{ $post->carModel }}</label>
            </div>


            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">외형 :
                    {{ $post->appearance }}</label>
            </div>


            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"> 글 작성 날짜 :
                    {{ $post->created_at }}</label>
            </div>

            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"> 글 수정 날짜 :
                    {{ $post->updated_at }}</label>
            </div>




            <!-- 파일이 있을경우 보여주기 -->

            @if ($post->image)
            <div class="mb-3">
                <label for="formFile" class="form-label">자동차 이미지</label>
                <img src="{{ '/storage/image/'.$post->image }}" name="image"></div>
            </div>
            @else
            <div class="mb-3">
                <label for="formFile" class="form-label">자동차 이미지</label>
                <img style="width: 300px;" src="{{ '/storage/image/noImage.png'}}"></div>
            </div>
            @endif

            <div class="form-row float-right">
                
                <form action="{{ route('car.destroy' , ['id'=>$post->id]) }}" method="post">
                    @csrf @method('delete')
                    <button class="btn btn-danger me-md-2" type="submit">삭제하기</button>
                </form>

                <button
                    class="btn btn-primary"
                    type="button"
                    onclick="location.href='{{ route('car.edit',['id' => $post->id]) }}'">수정하기</button>

            </div>

        </div>
    </div>

</x-app-layout>