<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class blogController extends Controller
{
    function blog()
    {
        $blog = blog::all();
        return view('blog', compact('blog'));
    }
    
    function showBlog($id){
        $blog = blog::findOrFail($id);
        return view('showBlog', compact('blog'));
    }

    function adminBlog()
    {
        $user = Auth::user();
        $blog = blog::all();
        return view('admin.blogadmin', compact('user', 'blog'));
    }

    function addBlog()
    {
        $user = Auth::user();
        return view('admin.blog.addBlog', compact('user'));
    }

    function storeBlog(Request $req)
    {
        $user = Auth::user();
        // dd($req);

        if ($req->hasFile('imageBlog')) {
            $file = $req->file("imageBlog");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("imageBlog/"), $imageName);
            $blog = blog::create([
                'titleBlog' => $req->titleBlog,
                'descBlog' => $req->descBlog,
                'imageBlog' => $imageName,
            ]);

            $blog->save();
            return redirect()->route('adminBlog');
        }
    }

    function editBlog($id)
    {
        $user = Auth::user();
        $blog = blog::findOrFail($id);
        return view('admin.blog.editBlog', compact('blog', 'user'));
    }

    // public function updateBlog(Request $request, $id){
    //     $blog = blog::findOrFail($id);
    //     if ($request->hasFile("imageBlog")) {
    //         if (File::exists("imageBlog/" . $blog->imageBlog)) {
    //             File::delete("imageBlog/" . $blog->imageBlog);
    //         }  
    //         $file = $request->file("imageBlog");
    //         $blog->imageBlog = time() . "_" . $file->getClientOriginalName();
    //         $file->move(\public_path("/imageBlog"), $blog->imageBlog);
    //         $request['imageBlog'] = $blog->imageBlog;
    //     }
    //     $blog->update([
    //         'titleBlog' => $request->titleBlog,
    //         'descBlog' => $request->descBlog,
    //         'imageBlog' => $blog->imageBlog,
    //     ]);
    //     return redirect()->route('adminBlog');
    // }

    public function updateBlog(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        // Delete old image if a new image is being uploaded
        if ($request->hasFile("imageBlog")) {
            if (File::exists(public_path("imageBlog/" . $blog->imageBlog))) {
                File::delete(public_path("imageBlog/" . $blog->imageBlog));
            }

            $file = $request->file("imageBlog");
            $imageName = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("imageBlog"), $imageName);

            $blog->imageBlog = $imageName;
        }

        // Update other attributes
        $blog->titleBlog = $request->titleBlog;
        $blog->descBlog = $request->descBlog;
        $blog->save(); // Save the changes

        return redirect()->route('adminBlog');
    }


    function deleteBlog($id)
    {
        $user = Auth::user();
        $blog = blog::findOrFail($id);
        $blog->delete();
        return back();
    }
}
