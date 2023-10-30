<?php

namespace App\Repositories;

interface CompetenceRepository {
    public function getAll();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function restore($id);
}

