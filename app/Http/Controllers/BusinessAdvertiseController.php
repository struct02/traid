<?php

namespace App\Http\Controllers;

use App\Models\businessAdvertise;
use Illuminate\Http\Request;

class BusinessAdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
          $query = $request->input('query'); // the search text

    $posts = businessAdvertise::when($query, function ($q) use ($query) {
        $q->where('busname', 'LIKE', "%{$query}%")
          ->orWhere('bustype', 'LIKE', "%{$query}%");
    })->get();

    return view('search', compact('posts', 'query'));

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
        $request->validate([
            'busname'   => 'required|string|max:255',
            'bustype'   => 'required|string|max:50',
            'shortdesc' => 'required|string|max:255',
            'longdesc' => 'string|nullable',
            'services' => 'required|string|max:255',
        ]);

        businessAdvertise::create($request->all());
        return redirect()->route('ad.create')->with('success', 'Post created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
public function show(BusinessAdvertise $businessAdvertise)
{
    $businessAdvertise = BusinessAdvertise::orderBy('id', 'desc')->get();
    return view('list-advertise', compact('businessAdvertise'));
    
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(businessAdvertise $businessAdvertise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, businessAdvertise $businessAdvertise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(businessAdvertise $businessAdvertise)
    {
        //
    }
}
