<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.testimonial.index", [
            "title" => "Dashboard | Testimonial",
            'logo' => '../assets/img/logo-hisocial.png',
            'testimonials' => Testimonial::orderBy('name','DESC')->filter(request(['search']))->paginate(5)
        ]);
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
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'comment' => 'required',
            'image_testi' => 'image'
        ]);

        $validatedData['image_testi'] = $request->file('image_testi')->store('images_testi');

        Testimonial::create($validatedData);

        return redirect('/dashboard/testimonial')->with('success', 'Success Add Testimonial ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {

        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'comment' => 'required',
            'image_testi' => 'image'
        ]);

        $testimonial = Testimonial::where('id', $testimonial->id)->first();

        if ($request->hasFile('image_testi')) {
            $validatedData['image_testi'] = $request->file('image_testi')->store('images_testi');
            if ($testimonial->image_testi) {
                Storage::delete($testimonial->image_testi);
            }
        } else {
            $validatedData['image_testi'] = $testimonial->image_testi;
        }

        if ($testimonial) {
            $testimonial->update($validatedData);
            return redirect('/dashboard/testimonial')->with('success', 'Success Update Testimonial');
        } else {
            return redirect('/dashboard/testimonial')->with('success', 'Failed Update Testimonial');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image_testi) {
            Storage::delete($testimonial->image_testi);
        }
        Testimonial::destroy($testimonial->id);
        return redirect('/dashboard/testimonial')->with('success', 'Success Delete Testimonial');
    }
}
