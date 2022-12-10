<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\SchoolYear;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Html\Builder;

class SchoolYearController extends Controller
{
    public function index(Request $request, Builder $builder)
    {
        if ($request->ajax()) {
            return DataTables::eloquent(SchoolYear::withTrashed()->select('id', 'name', 'deleted_at')->orderBy('deleted_at'))
                ->addIndexColumn()
                ->addColumn('deleted_at', function (SchoolYear $data) {
                    return $data->deleted_at == null ? view('admin.school-year.status') : '';
                })
                ->addColumn('action', function (SchoolYear $data) {
                    return view('admin.school-year.action', compact('data'));
                })->make(true);
        }
        $dataTable = $builder
            ->addIndex(['class' => 'w-1 text-center', 'data' => 'DT_RowIndex', 'name' => 'DT_RowIndex', 'title' => 'NO', 'orderable' => false])
            ->addColumn(['class' => 'w-1 text-center', 'data' => 'deleted_at', 'name' => 'deleted_at', 'title' => 'STATUS', 'orderable' => false])
            ->addColumn(['data' => 'name', 'name' => 'name', 'title' => 'NAME'])
            ->addColumn(['class' => 'w-1 text-center', 'data' => 'action', 'name' => 'action', 'title' => 'ACTION', 'orderable' => false])
            ->parameters([
                'responsive' => true,
                'bAutoWidth' => false,
            ]);
        return view('admin.school-year.data', compact('dataTable'));
    }
    public function create()
    {
        return view('admin.school-year.form');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);
        SchoolYear::select('id')->delete();
        SchoolYear::create([
            'name' => $request->name,
        ]);
        return redirect()->route('school-year.index')->with(['success' => 'The data has been successfully saved.']);
    }
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = SchoolYear::select('id', 'name')->find(dekrip($id));
        return view('admin.school-year.form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
        ]);
        SchoolYear::select('id')->find(dekrip($id))->update([
            'name' => $request->name,
        ]);
        return redirect()->route('school-year.index')->with(['success' => 'The data was successfully changed.']);
    }
    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        if ($request->ajax()) {
            SchoolYear::select('id')->delete();
            if (SchoolYear::withTrashed()->select('id')->find(dekrip($request->id))->restore()) {
                return response()->json([
                    'status' => true,
                    'message' => 'Data successfully becomes active.',
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Data failed to activate.',
                ]);
            }
        }
    }
}
