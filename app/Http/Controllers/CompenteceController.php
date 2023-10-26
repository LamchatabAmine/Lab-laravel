<?php

namespace App\Http\Controllers;
use App\Repositories\CompetenceRepository;
use App\Models\Compentece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompenteceController extends Controller
{
    protected $CompetenceRepository;
    public function __construct(CompetenceRepository $CompetenceRepository){
        $this->CompetenceRepository = $CompetenceRepository;
    }
    public function index()
    {
        $data = $this->CompetenceRepository->getAll();
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('templates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate  data
        $validatedData = $request->validate([
            'References' => 'required',
            'Code' => 'nullable|string',
            'Nom' => 'required',
            'Description' => 'required',
        ]);

        // Create a new instance of the model
        $data = $request->all();
        // $data = $request->validated;
        $this->CompetenceRepository->create($data);

        // Redirect to the index page
        return redirect()->route('index')->with("message", "Competence added successfully");
    }


    /**
     * Display the specified resource.
     */
    public function show(Compentece $competence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $competence = compentece::findOrFail($compentece);
        $competence = $this->CompetenceRepository->find($id);
        // $competence = $id;
        return view('templates.edit', compact('competence'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate  data
        $validatedData = $request->validate([
            'References' => 'required',
            'Code' => 'nullable|string',
            'Nom' => 'required',
            'Description' => 'required',
        ]);
        // data have validated data
        // $data = $request->validated;
        $data = $request->all();
        // Find the Id of Competence
        $competence = $this->CompetenceRepository->find($id);
        // Check if the competence exists
        if (!$competence) {
            return redirect()->back()->with("error", "Competence not found");
        }
        $this->CompetenceRepository->update($id, $data);
       // Redirect to the index page
        return redirect()->route('index')->with("message", "Competence Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $competence = $this->CompetenceRepository->find($id);

        if (!$competence) {
            return redirect()->back()->with("error", "Competence not found");
        }

        $this->CompetenceRepository->delete($id);

        return redirect()->route('index')->with("message", "Competence Deleted successfully");
    }
}


