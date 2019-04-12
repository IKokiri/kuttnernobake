<?php

namespace App\Http\Controllers;
use App\CompanyLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CompanyLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $local = $request->file('file')->store('public/logos');
        $local = str_replace("public","storage",$local);

        $companyLogo = new CompanyLogo();
        $companyLogo->path = $local;
        $companyLogo->company_id = $request->input('company_id');
        $companyLogo->save();

        return $companyLogo;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $companyLogo = CompanyLogo::find($id);
       $companyLogo->delete();
       $fullPath = str_replace("storage","/public",$companyLogo->path);
       Storage::delete($fullPath);
       return $companyLogo;
    }

    public function updatePadrao(Request $request, $id){

        CompanyLogo::where('company_id',$request->input('company_id'))->update(['default'=>false]);
        $companyLogo = CompanyLogo::find($id);
        $companyLogo->default = true;
        $companyLogo->save();

        return $companyLogo;
    }

    public function buscarLogos($id){
        
        $company = Company::find($id);
        return $company->companyLogo;
        
    }
    
}
