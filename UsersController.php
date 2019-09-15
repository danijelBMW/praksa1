<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
class UsersController extends Controller
{
   public function index () {
       return view("users", ["users" => User::all()]);
   }
   public function edit($id) {
       $user = User::where('id', $id)->first();
       return view('edit', compact('user'));
   }
   public function update($id, Request $request) {
       $saveData = $request->only(["ime","prezime","email","pass"]);
       $user = User::where('id', $id)->first();
       $user->ime = $saveData['ime'];
       $user->prezime = $saveData['prezime'];
       $user->email = $saveData['email'];
       
       $user->save();
     return redirect('/users');
   }


   public function destroy($id, Request $reuest)
    {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect('/users');
                        
    }
}
    
    
    


