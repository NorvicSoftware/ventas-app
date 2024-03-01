<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $group = new Group();
        $group->type = $request->type;
        $group->save();
        return redirect()->action([GroupController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $group = Group::find($id);
        return view('groups.view', ['group' => $group]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $group = Group::find($id);
        return view('groups.edit', ['group' => $group]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $group = Group::find($id);
        $group->type = $request->type;
        $group->save();
        return redirect()->action([GroupController::class, 'index']);
    }

    /**
     * Elimina un grupo de la tabla grupos de la base de datos
     * @return retonar una redireccion a la vista index de grupo.
     */
    public function destroy(string $id)
    {
        $group = Group::find($id);
        $group->delete();
        return redirect()->action([GroupController::class, 'index']);
    }
}
