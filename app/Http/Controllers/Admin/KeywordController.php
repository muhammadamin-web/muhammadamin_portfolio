<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\KeywordRepositoryInterface;
use Illuminate\Support\Facades\Request;

class KeywordController extends Controller
{

    private $keyword;

    public function __construct(KeywordRepositoryInterface $keywordRepository)
    {
        $this->keyword = $keywordRepository;
    }

    public function create(Request $request)    
    {
        return response()->json(
            $this->keyword->create($request->all()), 
            200
        );
    }
}
                                