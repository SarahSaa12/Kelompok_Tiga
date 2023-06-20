<?php
  
namespace App\Http\Controllers;
  
use DB;
use App\Models\Result;
use Barryvdh\DomPDF\PDF;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
  
class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $results = Result::latest()->paginate(5);
        
        return view('index_nilai',compact('results'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create_nilai');
    }
  
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'nilai' => 'required',
        ]);
        
        Result::create($request->all());
        
        return redirect()->route('results.index')
                        ->with('success','Data Nilai Berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Result $result): View
    {
        return view('show_nilai',compact('result'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Result $result): View
    {
        return view('edit_nilai',compact('result'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Result $result): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'nilai' => 'required',
        ]);
        
        $result->update($request->all());
        
        return redirect()->route('results.index')
                        ->with('success','Data Nilai Berhasil diubah');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result): RedirectResponse
    {
        $result->delete();
         
        return redirect()->route('results.index')
                        ->with('success','Data Nilai Berhasil dihapus');
    }

    public function exportPDF(){
        $data = DB::table("results")->get();
        $pdf = PDF::loadView('export', compact('data'));
        return $pdf->download('data_nilai.pdf');
    }
}