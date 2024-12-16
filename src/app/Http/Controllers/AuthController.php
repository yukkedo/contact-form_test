<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AuthController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function list(Request $request)
    {
    // $contacts = Contact::with('category')->paginate(7);
    // return view('admin', compact('contacts'));

        $query = Contact::query();  

        if ($request->has('search') && $request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->has('gender') && $request->gender && $request->gender != '全て') {
            $query->where('gender', $request->gender);
        }

        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }

        if ($request->has('date') && $request->date) {
            $query->whereDate('created_at', $request->date);
        }

        // 検索結果を取得（ページネーション）
        $contacts = $query->paginate(7);

        return view('admin', compact('contacts'));
    }
}
