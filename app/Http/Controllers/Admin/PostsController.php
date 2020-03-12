<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostCreatedRequest;
use App\Models\Post;
use App\Services\UploadsService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:avisos.lista')->only(['index']);
        $this->middleware('can:avisos.ver')->only(['show']);
        $this->middleware('can:avisos.registrar')->only(['create', 'store']);
        $this->middleware('can:avisos.editar')->only(['edit', 'update']);
        $this->middleware('can:avisos.eliminar')->only(['destroy']);
    }

    public function index()
    {
        $search = request('search') ? request('search') : '';

        if ($search != '') {
            $posts = Post::search($search)->orderBy('fecha', 'DESC')->get();
        } else {
            $posts = Post::orderBy('fecha', 'DESC')->get();
        }

        return view(
            'admin.posts.index',
            compact(
                'posts',
                'search'
            )
        );
    }

    public function create()
    {
        $post = new Post([
            'fecha' => Carbon::now(),
        ]);
        return view('admin.posts.create', compact('post'));
    }

    public function store(PostCreatedRequest $request)
    {
        Post::create([
            'titulo' => request('titulo'),
            'contenido' => request('contenido'),
            'fecha' => Carbon::parse(request('fecha')),
            'publicado' => request('publicado') ? true : false,
        ]);
        return redirect()->route('admin.posts.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function show(Post $post)
    {
        $aviso = $post;
        return view('admin.posts.show', compact('aviso'));
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(PostCreatedRequest $request, Post $post)
    {
        $post->update([
            'titulo' => request('titulo'),
            'contenido' => request('contenido'),
            'fecha' => Carbon::parse((string) request('fecha')),
            'publicado' => request('publicado') ? true : false,
        ]);
        return redirect()->route('admin.posts.index')
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')
            ->with('msg', 'El registro se eliminó correctamente');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $year = date('Y');
            $uploadService = new UploadsService('upload', $year, 'avisos');

            //get filename with extension
            // $filenamewithextension = $request->file('upload')->getClientOriginalName();

            // //get filename without extension
            // $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            // //get file extension
            // $extension = $request->file('upload')->getClientOriginalExtension();

            // //filename to store
            // $filenametostore = $filename . '_' . time() . '.' . $extension;

            // //Upload File
            // $request->file('upload')->storeAs('public/uploads', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = Storage::url($uploadService->getFileCreated());
            $msg = 'El archivo se subió correctamente';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, \"$url\", '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
