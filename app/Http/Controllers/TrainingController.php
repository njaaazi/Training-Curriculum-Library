<?php

namespace Training_Management_System\Http\Controllers;

use Illuminate\Http\Request;
use Training_Management_System\Training;

class TrainingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $trajnimet = Training::latest()->get();

        return view('home', compact('trajnimet'));
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
        $trajnim = Training::create([
            'titulli' => request('titulli'),
            'pershkrimi' => request('pershkrimi'),
            'akredituar' => request('akredituar') == 'true' ? 1 : 0

        ]);

		$trajnim->save();
        return redirect('/home');

        // dd($trajnim->akredituar);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trajnimi = Training::find($id);
        $trajnimi->get();

        return view('/show', compact('trajnimi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $trajnimi = Training::find($id);
        return view('edit', compact('trajnimi'));


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
        $trajnimi = Training::find($id);
        $trajnimi->titulli = $request->get('titulli');
        $trajnimi->pershkrimi = $request->get('pershkrimi');
        $trajnimi->akredituar = $request->get('akredituar') == 'true' ? 1 : 0;
        $trajnimi->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trajnimi = Training::find($id);
        $trajnimi->delete();
        return back();
    }
}
