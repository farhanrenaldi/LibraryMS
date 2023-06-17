<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Requests\StoreBorrowOrderRequest;
use App\Http\Requests\UpdateBorrowOrderRequest;
use App\Models\BorrowOrder;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\BorrowOrderCollection;
use App\Http\Resources\v1\BorrowOrderResource;

class BorrowOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new BorrowOrderCollection(BorrowOrder::paginate());
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
    public function store(StoreBorrowOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BorrowOrder $borrowOrder)
    {
        return new BorrowOrderResource($borrowOrder->loadMissing(['member','book']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BorrowOrder $borrowOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBorrowOrderRequest $request, BorrowOrder $borrowOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BorrowOrder $borrowOrder)
    {
        //
    }
}
