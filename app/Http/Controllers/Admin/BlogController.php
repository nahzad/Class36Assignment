<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blogsData'] = Blog::get();
        return view('admin.blogs.listData', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required',
            'description' => 'required',

        ]);

        if ($validator->passes()) {
            Blog::create([
                'title'       => $request->title,
                'sub_title'   => $request->sub_title,
                'description' => $request->description,
                //'thumbnail'   => $request->thumbnail,
                'status'      => $request->status
            ]);
            Toastr::success('Blogs Created successfully', 'Success', ['positionClass' => 'toast-top-center']);
        } else {
            $errorMsg = $validator->messages();
            foreach ($errorMsg->all() as $msg) {
                Toastr::error($msg, 'Required');
            }
        }
        return redirect(route('blogs.create'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['blogsInfo'] = Blog::find($id);
        return view('admin.blogs.update', $data);
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
        $validator = Validator::make($request->all(), [
            'title'       => 'required',
            'description' => 'required'
        ]);

        if ($validator->passes()) {
            Blog::find($id)->update([
                'title'       => $request->title,
                'sub_title'   => $request->sub_title,
                'description' => $request->description,
                'status'      => $request->status
            ]);
            Toastr::success('Blogs Updated successfully', 'Success', ['positionClass' => 'toast-top-center']);
        } else {
            $errorMsg = $validator->messages();
            foreach ($errorMsg->all() as $msg) {
                Toastr::error($msg, 'Required');
            }
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::find($id)->delete();
        return redirect(route('blogs.index'));
    }
}