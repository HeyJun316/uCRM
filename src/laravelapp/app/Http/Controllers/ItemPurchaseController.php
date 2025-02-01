<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemPurchaseRequest;
use App\Http\Requests\UpdateItemPurchaseRequest;
use App\Models\ItemPurchase;

class ItemPurchaseController extends Controller
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
     * @param  \App\Http\Requests\StoreItemPurchaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemPurchaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemPurchase  $itemPurchase
     * @return \Illuminate\Http\Response
     */
    public function show(ItemPurchase $itemPurchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemPurchase  $itemPurchase
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemPurchase $itemPurchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemPurchaseRequest  $request
     * @param  \App\Models\ItemPurchase  $itemPurchase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemPurchaseRequest $request, ItemPurchase $itemPurchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemPurchase  $itemPurchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemPurchase $itemPurchase)
    {
        //
    }
}
