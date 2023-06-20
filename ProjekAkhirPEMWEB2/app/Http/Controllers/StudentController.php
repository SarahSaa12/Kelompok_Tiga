<?php
  
namespace App\Http\Controllers;
  
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use PDF;
  
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $students = Student::latest()->paginate(5);
        
        return view('index_siswa',compact('students'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create_siswa');
    }
  
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'NIS' => 'required',
            'jenis_kelamin' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);
        
        Student::create($request->all());
        
        return redirect()->route('students.index')
                        ->with('success','Data Siswa Berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student): View
    {
        return view('show_siswa',compact('student'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student): View
    {
        return view('edit_siswa',compact('student'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'NIS' => 'required',
            'jenis_kelamin' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);
        
        $student->update($request->all());
        
        return redirect()->route('students.index')
                        ->with('success','Data Siswa Berhasil diubah');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student): RedirectResponse
    {
        $student->delete();
         
        return redirect()->route('students.index')
                        ->with('success','Data Siswa Berhasil dihapus');
    }

    public function exportPDF(){
        $data = DB::table("students")->get();
        $pdf = PDF::loadView('export', compact('data'));
        return $pdf->download('data_siswa.pdf');
    }
}