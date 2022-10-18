<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        //    dd($departments);
        return view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        // $params = $request->all();
        
        // $d = new Department();

        // solo se nel form ho usato gli stessi nomi
        // $d->fill($params);
        // $d->name = $params['name'];
        // $d->phone = $params['phone'];
        // $d->address = $params['address'];
        // $d->head_of_department = $params['head_of_department'];
        // $d->website = $params['website'];
        // $d->email = $params['email'];
        // $d->save();

        // crea istanza riempe le porpiretà e salva 
        //VALIDARE I DATI
        $params=$request->validate([
            'name'=>'required|max:255',
            'address'=>'required|max:255',
            'phone'=>'nullable|max:255',
            'email'=>'required|max:255|email',
            'website'=>'required|max:255|url',
            'head_of_department'=>'required|max:255',
        ]);

        $d=Department::create($params);
        return redirect()->route('departments.show',$d);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Department::findOrFail($id);
        //    dd($department);
        return view('departments.show', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::findOrFail($id);
        // dd($department);
        return view('departments.edit', compact('department'));
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
        $department=Department::findOrFail($id);
        $params=$request->validate([
            'name'=>'required|max:255',
            'address'=>'required|max:255',
            'phone'=>'nullable|max:255',
            'email'=>'required|max:255|email',
            'website'=>'required|max:255|url',
            'head_of_department'=>'required|max:255',
        ]);
        $department->update($params);
        return redirect()->route('departments.show',$department);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department=Department::findOrFail($id);
        $department->delete();
        return redirect()->route('departments.index');
    }
}
