<?php

namespace App\Repositories;

use App\Models\Compentece;

class EloquentCompetenceRepository implements CompetenceRepository {
    public function getAll() {
        return Compentece::all();
    }

    public function find($id) {
        return Compentece::find($id);
    }

    public function create(array $data) {
        return Compentece::create($data);
    }

    public function update($id, array $data) {
        $Compentece = Compentece::find($id);
        if ($Compentece) {
            $Compentece->update($data);
        }
        return $Compentece;
    }

    public function delete($id) {
        return Compentece::destroy($id);
    }

    public function restore($id) {
        $competence = Compentece::withTrashed()->find($id);

        if ($competence && $competence->trashed()) {
            $competence->restore();
            return redirect()->route('index')->with("message", 'Competence Restored successfully.');
        }

    }


    // public function search($search) {
    //     $searchQuery = $search;

    //     $results = Compentece::where('Code', 'like', '%' . $searchQuery . '%')
    //         ->orWhere('Nom', 'like', '%' . $searchQuery . '%')
    //         ->paginate(2);

    //         return $results;
    // }

}
