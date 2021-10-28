<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('edit') }}
        </h2>
    </x-slot>

    <div style="padding: 3%">
        <form
            action="{{ route('car.update', ['id'=> $post->id]) }}"
            method="post"
            enctype="multipart/form-data">
            @csrf @method('patch')

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">제조회사</label>
                <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    name="company"
                    value="{{ $post->company }}"
                    placeholder="제조회사">


                <label for="exampleFormControlInput1" class="form-label">자동차 명</label>
                <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    name="carName"
                    value="{{ $post->carName }}"
                    placeholder="자동차명">

                <label for="exampleFormControlInput1" class="form-label">제조년도</label>
                <input
                            type="text"
                            class="form-control"
                            id="exampleFormControlInput1"
                            name="year"
                            value="{{ $post->carName }}"
                            placeholder="제조년도">

                            <label for="exampleFormControlInput1" class="form-label">가격</label>
                            <input
                                type="text"
                                class="form-control"
                                id="exampleFormControlInput1"
                                name="price"
                                value="{{ $post->price }}"
                                placeholder="가격">

                                <label for="exampleFormControlInput1" class="form-label">차종</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="exampleFormControlInput1"
                                    name="carModel"
                                    value="{{ $post->carModel }}"
                                    placeholder="차종">

                                    <label for="exampleFormControlInput1" class="form-label">외형</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="exampleFormControlInput1"
                                        name="appearance"
                                        value="{{ $post->appearance }}"
                                        placeholder="외형">
                                    
                                  

                                    <!-- 파일 선택 -->
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">자동차 이미지</label>
                                        <input class="form-control" type="file" name="image" id="formFile"></div>
                                    </div>

                                    
                                    <div class="flex mb-3">
                                        @if($post->image)
                                        <img class="card-img-top" src="{{'/storage/image/'.$post->image }}" style="width: 300px;"></div>
                                        @else
                                        <span>
                                            <img style="width: 300px;" src="{{ '/storage/image/noImage.png' }}"></div>
                                        </span>
                                        @endif

                                        <div class="d-grid d-md-flex justify-content-md-end">
                                            <button class="btn btn-primary me-md-2 text-white" type="submit">저장하기</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>

                                </x-app-layout>