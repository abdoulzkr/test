<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $links = Link::orderBy('created_at', 'desc')->paginate(9);
        return view('pages.link.index')->with('links', $links);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('pages.link.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required|min:8',
            'description' => 'required|min:8',
        ],
        [
            'link.min' => 'Entrer un lien valide d\'au moins 8 caractères',
            'description.min' => 'Entrer une description valide d\'au moins 8 caractères',
        ]
        );

        if(!filter_var($request->input('link'),FILTER_VALIDATE_URL)){
            return redirect()->back()->with('error', 'invalid link!');
        }

        Link::create($request->all());

        return redirect()->back()->with('success', 'Saved Successfully !');

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     */
    public function show(Link $link)
    {
        return view('pages.link.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Link $link)
    {
        $link->delete();
        return redirect()->back()->with('success', 'Delete Successfully !');
    }
}
