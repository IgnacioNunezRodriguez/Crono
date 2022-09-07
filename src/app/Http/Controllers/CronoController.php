<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Crono;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCronoRequest;
use Illuminate\Support\Facades\Redirect;

class CronoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     /*   'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
       */ return Inertia::render("Index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render("Crono/Create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCronoRequest $request)
    {
        Crono::create($request->validated());
        return Redirect::route("crono.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\crono  $crono
     * @return \Illuminate\Http\Response
     */
    public function show(crono $crono)
    {
        return Inertia::render("Crono/Show",["crono"=>$crono]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\crono  $crono
     * @return \Illuminate\Http\Response
     */
    public function edit(crono $crono)
    {
        return Inertia::render(
            "Crono/Edit",
            [
                "crono"=>$crono
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\crono  $crono
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, crono $crono)
    {
        $crono->update($request->validated());

        return Redirect::route('crono.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\crono  $crono
     * @return \Illuminate\Http\Response
     */
    public function destroy(crono $crono)
    {
        $crono->delete();

        return Redirect::route('crono.index');
    }
}
