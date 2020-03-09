<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PageCreatedRequest;
use App\Models\Menu;
use App\Models\Page;
use App\Services\UploadsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuPagesController extends Controller
{
    public function create(Menu $menu)
    {
        $page = new Page();
        return view('admin.pages.create', compact('page', 'menu'));
    }

    public function store(Menu $menu, PageCreatedRequest $request)
    {
        $menu->createPage();

        return redirect()->route('admin.menus.show', $menu)
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function edit(Menu $menu, Page $page)
    {
        return view('admin.pages.edit', compact('page', 'menu'));
    }

    public function update(PageCreatedRequest $request, Menu $menu, Page $page)
    {
        $menu->updatePage();
        return redirect()->route('admin.menus.show', $menu)
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(Menu $menu, Page $page)
    {
        $page->delete();
        return redirect()->route('admin.menus.show', $menu)
            ->with('msg', 'El registro se eliminó correctamente');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $year = date('Y');
            $uploadService = new UploadsService('upload', $year, 'paginas');

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
