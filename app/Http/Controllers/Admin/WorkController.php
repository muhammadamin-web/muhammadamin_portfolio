<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;
use App\Interfaces\KeywordRepositoryInterface;

class WorkController extends Controller
{
    private $keyword;

    public function __construct(KeywordRepositoryInterface $keywordRepository) 
    {
        $this->keyword = $keywordRepository;
    }

    public function index()
    {
        $works = Work::all();
        return view('admin.works.index', compact('works'));
    }

    public function create()
    {
        return view('admin.works.create_edit');
    }
    public function edit(Work $work)
    {
        return view('admin.works.create_edit', compact('work'));
    }
    public function store(Request $request)
    {
        // $user = Auth::user();
        $request->validate([
            'title' => 'required|string|max:255|min:10',
            'link' => 'required',
            'keywords' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|file'
        ]); 
        $image = $request->file('image')->store('works', 'public');
        $data = collect($request->all())->except(['_token'])->merge([ 
            'user_id' => 1, 
            'image' => $image,
        ])->toArray();

        Work::create($data); 

        return redirect()->route('admin.works.index');

    }

    
}
