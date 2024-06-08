<?php

namespace App\Http\Controllers\FormEditor;

use App\Http\Controllers\Controller;
use App\Models\FormEditor\FormModel;
use Illuminate\Http\Request;

class FormEditorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FormModel $form)
    {
        $regiterd_form = $form->get();
        return view('settings.form-editor',compact('regiterd_form'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
