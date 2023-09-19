<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->level == 1) {
            $posts = User::all();
        } else {
            $posts = User::where('id', Auth::id())->get();
        }

        return view('user.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = User::where('id', $id)->first();
        return view('user.create', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = User::findOrFail($id);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => 'unique:users,email,' . $post->id,
            'level' => ['required'],
            'password' =>
                $request->password != null ? 'sometimes|required|min:8' : '',
        ]);

        if ($request->password == '') {
            $post->update([
                'name' => $request->name,
                'email' => $request->email,
                'level' => $request->level,
            ]);
        } else {
            $post->update([
                'name' => $request->name,
                'email' => $request->email,
                'level' => $request->level,
                'password' => Hash::make($request->password),
            ]);
        }

        // event(new Registered($user));

        // Auth::login($user);

        return redirect()
            ->route('user.index')
            ->with('success', 'Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($masterawal->id);
        User::where('id', $id)->delete();

        return redirect()
            ->route('user.index')
            ->with('success', 'Data berhasil di hapus');
    }
}