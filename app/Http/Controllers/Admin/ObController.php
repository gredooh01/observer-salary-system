<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ob;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ObController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ob_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ob.index');
    }

    public function create()
    {
        abort_if(Gate::denies('ob_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ob.create');
    }

    public function edit(Ob $ob)
    {
        abort_if(Gate::denies('ob_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ob.edit', compact('ob'));
    }

    public function show(Ob $ob)
    {
        abort_if(Gate::denies('ob_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ob.show', compact('ob'));
    }
}
