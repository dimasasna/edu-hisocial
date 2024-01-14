<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // return $request->all();
        $portofolio = Portfolio::query();

        // filter by search
        $portofolio->when($request->search, function ($query, $search) use ($request) {
            return $query->where("name","like","%".$request->search."%");
        });

        // filter by category
        $portofolio->when($request->has('search_category'), function ($query) use ($request) {
            return $query->where('category_id', '=', (int)$request->input('search_category'));
        });


        return view("dashboard.portfolio.index",[
            "title" => "Dashboard | Portfolio",
            'logo' => '../assets/img/logo-hisocial.png',
            'portfolios' => $portofolio->latest()->paginate(5),
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'altimg' => 'required|min:3|max:255',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'image'
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('images');
        } else {
            $validatedData['image'] = null;
        }

        Portfolio::create($validatedData);

        return redirect('/dashboard/portfolio')->with('success', 'Success Add Portfolio');
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'altimg' => 'required|min:3|max:255',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'image'
        ]);

        $portfolio = Portfolio::where('id', $portfolio->id)->first();

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('images');
            if ($portfolio->image) {
                Storage::delete($portfolio->image);
            }
        } else {
            $validatedData['image'] = $portfolio->image;
        }

        if ($portfolio) {
            $portfolio->update($validatedData);
            return redirect('/dashboard/portfolio')->with('success', 'Success Update portfolio');
        } else {
            return redirect('/dashboard/portfolio')->with('success', 'Failed Update portfolio');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image) {
            Storage::delete($portfolio->image);
        }
        Portfolio::destroy($portfolio->id);
        return redirect('/dashboard/portfolio')->with('success', 'Success Delete Category');
    }
}
