<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    public function index() {
        $data = Member::all();

        return view('member.index', compact('data'));
        // return response()->json([
        //   'pesan' => 'berhasil',
        //   'member' => $data
        // ], 200);
    }

    public function create() {
        return view('member.create');
    }

    public function store(Request $request) {
        $request->validate([
            'id_member' => 'required',
            'nama'      => 'required|min:5|max:50',
            'nim'       => 'required|min:10',
            'email'     => 'required|email',
            'password'  => 'required' 
        ]);

        $member = new Member;
        $member->id_member = $request->id_member;
        $member->nama = $request->nama;
        $member->nim = $request->nim;
        $member->email = $request->email;
        $member->password = bcrypt($request->password);
        $member->save();

        return redirect()->route('member.index');
    }

    public function show($id) {
        $data = Member::where('id_member', '=', $id)->firstOrFail();
        return view('member.show', compact('data'));
    }

    public function edit($id) {
        $data = Member::where('id_member', '=', $id)->firstOrFail();
        return view('member.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = Member::where('id_member', '=', $id);
        
        $nama       = $request->nama;
        $nim        = $request->nim;
        $email      = $request->email;
        $password   = $request->password;

        if($nama && $nim && $email && $password) {
            $data->update([
                'nama'      =>  $request->nama,
                'nim'       =>  $request->nim,
                'email'     =>  $request->email,
                'password'  =>  bcrypt($request->password)
            ]);    
        }

        else if($nama && $nim && $email){
            $data->update([
                'nama'  =>  $request->nama,
                'nim'   =>  $request->nim,
                'email' =>  $request->email,
            ]);    
        }

        // $data->save();
        return redirect()->route('member.index');   
    }

    public function destroy($id) {
        $data = Member::where('id_member', '=', $id);
        $data->delete();
        return redirect()->back();
    }
}
