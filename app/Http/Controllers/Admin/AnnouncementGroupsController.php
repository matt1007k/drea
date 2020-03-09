<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AnnouncementGroupCreatedRequest;
use App\Models\AnnouncementGroup;
use App\Services\UploadsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnnouncementGroupsController extends Controller
{
    public function index()
    {
        $search = request('search') ? request('search') : '';

        if ($search != '') {
            $announcement_groups = AnnouncementGroup::search($search)->latest()->get();
        } else {
            $announcement_groups = AnnouncementGroup::latest()->get();
        }

        return view(
            'admin.announcement_groups.index',
            compact(
                'announcement_groups',
                'search'
            )
        );
    }

    public function show(AnnouncementGroup $announcement_group)
    {
        return view('admin.announcement_groups.show', compact('announcement_group'));
    }

    public function create()
    {
        $announcement_group = new AnnouncementGroup();
        return view('admin.announcement_groups.create', compact('announcement_group'));
    }

    public function store(AnnouncementGroupCreatedRequest $request)
    {
        AnnouncementGroup::create([
            'nombre' => request('nombre'),
            'introduccion' => request('introduccion'),
            'anio' => request('anio'),
        ]);

        return redirect()->route('admin.announcement_groups.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function edit(AnnouncementGroup $announcement_group)
    {
        return view('admin.announcement_groups.edit', compact('announcement_group'));
    }

    public function update(AnnouncementGroupCreatedRequest $request, AnnouncementGroup $announcement_group)
    {
        $announcement_group->update([
            'nombre' => request('nombre'),
            'introduccion' => request('introduccion'),
            'anio' => request('anio'),
        ]);

        return redirect()->route('admin.announcement_groups.index')
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(AnnouncementGroup $announcement_group)
    {
        $announcement_group->delete();
        return redirect()->route('admin.announcement_groups.index')
            ->with('msg', 'El registro se eliminó correctamente');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $year = date('Y');
            $uploadService = new UploadsService('upload', $year, 'grupos');

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
