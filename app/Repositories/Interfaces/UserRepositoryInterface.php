<?php

namespace App\Repositories\Interfaces;

use App\Models\User;
use Illuminate\Http\Request;

interface UserRepositoryInterface
{
    public function index();
    public function store($data);
    public function show($id);
    public function update($data, $id);
    public function destroy($id);
    public function getActiveTour($id);
    public function count();
}
