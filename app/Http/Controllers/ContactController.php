<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return "List of contacts page";
    }

    public function show($id)
    {
        return "Details page of contact #{$id}";
    }

    public function showWithName($id, $name)
    {
        return "Details page of contact #{$id} named {$name}";
    }

    public function create()
    {
        return "Form to create a new contact";
    }

    public function store(Request $request)
    {
        return "Store a new contact";
    }

    public function edit($id)
    {
        return "Edit form of contact #{$id}";
    }

    public function update(Request $request, $id)
    {
        return "Update contact #{$id}";
    }

    public function destroy($id)
    {
        return "Delete contact #{$id}";
    }
}
