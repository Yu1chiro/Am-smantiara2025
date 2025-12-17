<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Member;
use App\Models\Cerpen; // Jangan lupa use model Cerpen
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        // UBAH DISINI: Gunakan 'tanggal' sebagai acuan urutan
        // latest('tanggal') = Terbaru ke Terlama (31 Des -> 1 Jan)
        // oldest('tanggal') = Terlama ke Terbaru (1 Jan -> 31 Des)
        
        $articles = Article::latest('tanggal')->take(6)->get();
        
       $members = Member::oldest()->take(5)->get();
        $cerpens = Cerpen::latest()->take(6)->get();

        return view('welcome', compact('articles', 'members', 'cerpens'));
    }

    public function showCerpen($id)
    {
        $cerpen = Cerpen::findOrFail($id);
        return view('detail-cerpen', compact('cerpen'));
    }

    public function showArticle($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('article-read', compact('article'));
    }

    // --- API JSON UNTUK LOAD MORE ---

    public function loadMoreArticles(Request $request)
    {
        $skip = $request->input('skip', 6);
        
        // UBAH DISINI JUGA: Agar konsisten saat tombol 'Load More' diklik
        $articles = Article::latest('tanggal') // Mengurutkan berdasarkan input tanggal manual
                        ->skip($skip)
                        ->take(6)
                        ->get();
                        
        return response()->json($articles);
    }

  public function loadMoreMembers(Request $request)
    {
        // Pastikan default skip sesuai dengan jumlah data awal (5)
    $skip = $request->input('skip', 5);
    
    // PENTING: Gunakan oldest() juga disini
    $members = Member::oldest()
                    ->skip($skip)
                    ->take(5) 
                    ->get();
    
    return response()->json($members);
    }

    public function loadMoreCerpens(Request $request)
    {
        $skip = $request->input('skip', 6);
        $cerpens = Cerpen::latest()->skip($skip)->take(6)->get();
        return response()->json($cerpens);
    }
}