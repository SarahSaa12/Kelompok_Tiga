<?php
  
namespace App\Http\Controllers;
  
use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $teachers = Teacher::latest()->paginate(5);
        
        return view('index_guru',compact('teachers'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create_guru');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'NIP' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);
        
        Teacher::create($request->all());
         
        return redirect()->route('teachers.index')
                        ->with('success','Data guru Berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher): View
    {
        return view('show_guru',compact('teacher'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher): View
    {
        return view('edit_guru',compact('teacher'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'NIP' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);
        
        $teacher->update($request->all());
        
        return redirect()->route('teachers.index')
                        ->with('success','Data guru Berhasil diubah');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher): RedirectResponse
    {
        $teacher->delete();
         
        return redirect()->route('teachers.index')
                        ->with('success','Data guru Berhasil dihapus');
    }
}
