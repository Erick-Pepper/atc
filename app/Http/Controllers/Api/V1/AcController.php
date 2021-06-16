<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Resources\V1\AcResource;
use App\Http\Controllers\Controller;
use App\Models\Ac;
use Illuminate\Http\Request;

class AcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AcResource::collection(Ac::latest()->paginate());  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ac  $ac
     * @return \Illuminate\Http\Response
     */
  public function show(Ac $ac)
        {
            return new AcResource($ac);  //En esta parte la api retorna los valores de las areonaves
        }
    
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ac  $ac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ac $ac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ac  $ac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ac $ac)
    {
        $ac->delete();
return response()->json(['message'=>'Eliminado correctamente'], 204);
    }
}
