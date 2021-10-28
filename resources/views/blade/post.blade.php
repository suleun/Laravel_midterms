<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('car') }}
        </h2>
    </x-slot>

    <div style="padding: 3%">
        <form
            action="{{ route('car.store') }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">제조회사</label>
                <input
                    type="text"
                    class="form-control mb-3"
                    id="exampleFormControlInput1"
                    name="company"
                    placeholder="제조회사">


                    <label for="exampleFormControlInput1" class="form-label">자동차 명</label>
                <input
                    type="text"
                    class="form-control mb-3"
                    id="exampleFormControlInput1"
                    name="carName"
                    placeholder="자동차명">



                    <label for="exampleFormControlInput1" class="form-label">제조년도</label>
                <input
                    type="text"
                    class="form-control mb-3"
                    id="exampleFormControlInput1"
                    name="year"
                    placeholder="제조년도">


                    <label for="exampleFormControlInput1" class="form-label">가격</label>
                <input
                    type="text"
                    class="form-control mb-3"
                    id="exampleFormControlInput1"
                    name="price"
                    placeholder="가격">


                    
                    <label for="exampleFormControlInput1" class="form-label">차종</label>
                <input
                    type="text"
                    class="form-control mb-3"
                    id="exampleFormControlInput1"
                    name="carModel"
                    placeholder="차종">


                    
                    <label for="exampleFormControlInput1" class="form-label">외형</label>
                <input
                    type="text"
                    class="form-control mb-3"
                    id="exampleFormControlInput1"
                    name="appearance"
                    placeholder="외형">

            </div>
              
                <!-- 파일 선택 -->
                <div class="mb-3">
                    <label for="formFile" class="form-label">자동차 이미지</label>
                    <input class="form-control" type="file" name="image" id="formFile"></div>
                </div>

                <div class="d-grid d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2 text-white" type="submit">등록하기</button>

                </div>
        </form>
    </div>

    </x-app-layout>