<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Cars::latest()->paginate(10);

        return view('blade.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blade.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { $fileName = NULL;

        if($request->hasFile('image')) {
            // dd($request->file('image'));
            $fileName = time().'_'.
                $request->file('image')->getClientOriginalName();
            $path = $request->file('image')
                ->storeAs('/public/image', $fileName);
        }


        Cars::create([
            'company'=>$request->company,
            'carName'=>$request->carName,
            'year'=>$request->year,
            'price'=>$request->price,
            'carModel'=>$request->carModel,
            'appearance'=>$request->appearance,
            'user_id'=>auth()->user()->id,
            'image'=>$fileName,
        ]);

        return redirect()->route('car.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Cars::find($id);

        return view('blade.show', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Cars::find($id);

        return view('blade.edit', ['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Cars::find($id);
    
        if($request->hasFile('image')){

            if($post->image){
                Storage::delete("/public/image".$post->image);
            }

            $fileName = time().'_'.
                $request->file('image')->getClientOriginalName();
            $path = $request->file('image')
                ->storeAs('/public/image', $fileName);

            $post->image = $fileName;


        }

        $post->company = $request->company;
        $post->carName = $request->carName;        
        $post->year = $request->year;    
        $post->price = $request->price;    
        $post->carModel = $request->carModel;    
        $post->appearance = $request->appearance;    

        $post->save();



       return redirect()->route('car.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Cars::find($id);
        
        // 게시글에 딸린 이미지가 있으면 파일시스템에서도 삭제해줘야 한다.
   if($post->image) {
       Storage::delete('public/image/'.$post->image);
   }

       $post->delete();

       return redirect()->route('car.index');
    }
}
