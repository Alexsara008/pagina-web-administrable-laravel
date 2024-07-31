<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('auth');
     }


    public function index(Request $request): View
    {
        $sliders = Slider::paginate();

        return view('slider.index', compact('sliders'))
            ->with('i', ($request->input('page', 1) - 1) * $sliders->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $slider = new Slider();

        return view('slider.create', compact('slider'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request): RedirectResponse
    {
        Slider::create($request->validated());

        return Redirect::route('sliders.index')
            ->with('success', 'Slider created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $slider = Slider::find($id);

        return view('slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $slider = Slider::find($id);

        return view('slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SliderRequest $request, Slider $slider): RedirectResponse
    {
        $slider->update($request->validated());

        return Redirect::route('sliders.index')
            ->with('success', 'Slider updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Slider::find($id)->delete();

        return Redirect::route('sliders.index')
            ->with('success', 'Slider deleted successfully');
    }
}
