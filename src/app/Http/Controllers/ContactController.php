<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categories = category::all();

        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();
        // Categoriesテーブルをcontentで表示
        $category = Category::find($contact['category_id']);
        $contact['category_name'] = $category ? $category->content : '未選択';

        // 電話番号の加工
        $contact['tel'] = $request->input('tel1') . $request->input('tel2') . $request->input('tel3');

        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only([
            'first-name',
            'last-name',
            'gender',
            'email',
            'tel',
            'address',
            'building',
            'category_id',
            'detail'
        ]);
        dd($contact);

        Contact::create($contact);
        return redirect()->route('thanks'); 
    }

    public function thanks()
    {
        return view('thanks'); 
    }
}