<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OauthClients;

class OauthClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = OauthClients::all();
        // Thẻ meta
        $meta['title'] ='OAuth Clients';
        // Return View 
        return view('oauth.clients.index', compact('meta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Thẻ meta
        $meta['title'] ='Create OAuth Clients';
        // Return View 
        return view('oauth.clients.create', compact('meta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:oauth_clients',
            'redirect' => 'required',
        ],
        [
            'name.required' => 'Tên Client không được để trống',
            'name.unique' => 'Tên Client này đã tồn tại',
            'name.required' => 'Redirect URL không được để trống',
        ]);

        $client = new OauthClients();
        $client->name = $request->name;
        $client->redirect = $request->redirect;
        $client->redirect = $request->confidential;
        // $client->save();
        return redirect()->route('admin.posts.index')->with('msg','Thêm bài viết thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Thẻ meta
        $meta['title'] ='Edit OAuth Clients';
        // Return View 
        return view('oauth.clients.edit', compact('meta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OauthClients $client)
    {
        OauthClients::destroy($client->id);
        return redirect()->route('oauth.clients.index')->with('msg','Xoá OAuth Clients thành công');
    }
}
