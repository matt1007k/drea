<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AnnouncementGroupCreatedRequest;
use App\Models\AnnouncementGroup;
use App\Services\UploadsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnnouncementGroupsController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:grupos.lista')->only(['index']);
        $this->middleware('can:grupos.ver')->only(['show']);
        $this->middleware('can:grupos.registrar')->only(['create', 'store']);
        $this->middleware('can:grupos.editar')->only(['edit', 'update']);
        $this->middleware('can:grupos.eliminar')->only(['destroy']);
    }

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
