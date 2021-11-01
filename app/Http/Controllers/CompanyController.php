<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Helpers\HttpResponse;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{

    public function index() {
        return Company::where('active', '!=', 2 )->get();
    }

    public function show($id){
        return Company::find($id);
    }

    public function store(CompanyRequest $request) {
        $company = Company::create($request->all());
        return response()->json($company, HttpResponse::HTTP_CREATED);
    }

    public function update(Request $request, Company $company) {
        $company->update($request->all());
        return response()->json($company, HttpResponse::HTTP_OK);
    }

    public function destroy(Company $company) {
        $company->update(['active' => 2]);
        return response()->json(null, HttpResponse::HTTP_NO_CONTENT);
    }
}
