<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use App\Http\Resources\StockResource;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks=Stock::paginate(10);
       return StockResource::collection($stocks);
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
        $stock=new Stock();
        $stock->product_id=$request->product_id;
        $stock->vlera_e_stokut=$request->vlera_e_stokut;
        if($stock->save())
        {
            return new StockResource($stock);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stock=Stock::findOrFail($id);
        $stock->product_id=$request->product_id;
        $stock->vlera_e_stokut=$request->vlera_e_stokut;
        if($stock->save()){
            return new StockResource($stock);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock=Stock::findOrFail($id);
        if($stock->delete()){
            return new StockResource($stock);
        }
    }
}
