<?php

namespace App\Http\Controllers;

use App\Models\Display;
use Illuminate\Http\Request;
use App\Http\Helpers\HttpResponse;
use App\Http\Requests\DisplayRequest;

class DisplayController extends Controller
{

    public function index() {
        return Display::where('active', '!=', 2 )->get();
    }

    public function show($id){
        return Display::find($id);
    }

    public function store(DisplayRequest $request) {
        $display = Display::create($request->all());
        return response()->json($display, HttpResponse::HTTP_CREATED);
    }

    public function update(Request $request, Display $display) {
        $display->update($request->all());
        return response()->json($display, HttpResponse::HTTP_OK);
    }

    public function destroy(Display $display) {
        $display->update(['active' => 2]);
        return response()->json(null, HttpResponse::HTTP_NO_CONTENT);
    }
}
