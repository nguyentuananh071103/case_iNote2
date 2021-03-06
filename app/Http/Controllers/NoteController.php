<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNoteRequest;
use App\Models\Category;
use App\Repository\NoteRepository;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class NoteController extends Controller
{
    //
    public function __construct(NoteRepository $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }

    public function index()
    {
//                $userId = Auth::user()->id;
//        $categories = $this->categoryRepository->getByUserId($userId);
        $categories = Category::all();
        $notes = $this->noteRepository->getAll();
        return view("backend.note.list", compact("notes",'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view("backend.note.create",compact('categories'));
    }

    public function store(CreateNoteRequest $request)
    {
        $this->noteRepository->create($request);
        return redirect()->route('notes.list')->with('message','Thêm mới thành công');
    }

    public function show($id)
    {
        $note = $this->noteRepository->getById($id);
        return view("backend.note.detail", compact("note"));
    }

    public function edit($id)
    {
        $categories = Category::all();
        $note = $this->noteRepository->getById($id);
        return view("backend.note.update", compact("note",'categories'));
    }

    public function update(Request $request, $id)
    {
        $this->noteRepository->update($request, $id);
        return redirect()->route('notes.list')->with('message','Sửa note thành công');

    }

    public function destroy($id)
    {
        $this->noteRepository->delete($id);
        return redirect()->route('notes.list')->with('message','Xóa note thành công');
    }
}
