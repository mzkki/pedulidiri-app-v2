<?php

namespace App\Http\Controllers;

use App\Models\History;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = History::where('user_id', auth()->user()->id);

        if (request('filter') == 'latest') {
            $history = $history->latest();
        } else if (request('filter') == 'oldest') {
            $history = $history->oldest();
        }

        return view('user.history', [
            'title' => 'Page History',
            'histories' => $history->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dt = Carbon::now()->timezone('Asia/Jakarta');
        return view('user.create', [
            'title' => 'Page Create History',
            'tanggal' => $dt->format('Y-m-d'),
            'waktu' => $dt->format('H:i:s')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'suhu' => 'required',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;

        History::Create($validatedData);

        return redirect()->to('/history')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show(History $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(History $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, History $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(History $history)
    {
        //
    }
}
