<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBorrowOrderRequest;
use App\Http\Requests\UpdateBorrowOrderRequest;
use App\Models\BorrowOrder;

class BorrowOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
