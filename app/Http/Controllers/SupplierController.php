<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        //
        if($id == null) {
            return Supplier::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
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
        //
        $supplier = new Supplier;
        $supplier->supplierName = $request->input('supplierName');
        $supplier->supplierEmail = $request->input('supplierEmail');
        $supplier->supplierContact = $request->input('supplierContact');
        $supplier->supplierPosition = $request->input('supplierPosition');
        $supplier->save();
        return 'Supplier record successfully created with id'.$supplier->id;

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
        return Supplier::find($id);
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
        $supplier = Supplier::find($id);
        $supplier->supplierName = $request->input('supplierName');
        $supplier->supplierEmail = $request->input('supplierEmail');
        $supplier->supplierContact = $request->input('supplierContact');
        $supplier->supplierPosition = $request->input('supplierPosition');
        $supplier->save();
        return 'Supplier record successfully updated with id'.$supplier->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $supplier = Supplier::find($id)->delete();
        return 'Supplier recode successfully deleted';
    }
}
