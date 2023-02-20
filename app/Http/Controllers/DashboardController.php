<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Tugas;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class DashboardController extends Controller
{

    public function index(){
        $kelas=Kelas::all();
        return view('layout.dashboard', compact('kelas'));
    }

    public function store(Request $request){
        $validate = $request->validate([
            'nama_kelas'=>'required'
        ]);
        $characters = '0123456789abcdefghijklmnopqrs092u3tuvwxyzaskdhfhf9882323ABCDEFGHIJKLMNksadf9044OPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 7; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
        $validate['code_kelas']=$randomString;
        $validate['user_id']=auth()->user()->id;
        $number = rand(1,5);

        if($number == 1){
            $validate['foto_kelas']="https://media.istockphoto.com/id/907864634/vector/school-classroom-interior.jpg?s=612x612&w=0&k=20&c=58DszHBLZU64pm1L9p6YpoupXGXbtWTDCzRG8PMIpWQ=";
        }

        if($number == 2){
            $validate['foto_kelas']="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnccvrFjbHC_uqddR72ZOu2iUO1mUBi1GoAsxYBFRdWNgEsx50zu16JeIjMvxt861_F88&usqp=CAU";
        }

        if($number == 3){
            $validate['foto_kelas']="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhJTl9C4fQuSvOKQc6Kj2gUugcvPaZCUGOIqcqBP9XXdCCfR9vbKLy_R14BQBWB--9S9g&usqp=CAU";
        }	

        if($number == 4){
            $validate['foto_kelas']="https://png.pngtree.com/element_our/20200610/ourlarge/pngtree-library-reading-student-image_2250158.jpg";
        }

        if($number == 5){
            $validate['foto_kelas']="https://t4.ftcdn.net/jpg/02/78/37/47/360_F_278374738_ypRn0utOVnebuhmpSrDiwkzFsdqEm0aa.jpg";
        }
        Kelas::create($validate);
        return back();
    }

    public function delete($id){
        Kelas::destroy($id);
        return back();
    }

    public function editprofil(Request $request, $id){
        // dd($request);
        $cari=User::find($id);
        $validate=$request->validate([
            'name'=>'required',
            'user_profile'=>'image|file:jpg,jpeg,png'
            

        ]);
        if($request->hasFile('user_profile')){
            Storage::disk('public')->delete($cari->user_profile);
            $img= Image::make($request->file('user_profile'));
            $filename = time().'.'.$request->file('user_profile')->getClientOriginalExtension();
            $img_path = 'user_profiles/'.$filename;
            Storage::put($img_path, $img->encode());
            $validate['user_profile'] = $img_path;
        }

        $cari->update($validate);
        return back();
    }

    public function ChangePass(Request $request)
    {
        $request->validate([
            "old_pass" => "required|min:4",
            "password" => "required|min:4"
        ]);

        if(Hash::check($request->old_pass , auth()->user()->password)){
            User::find(auth()->user()->id)->update(["password" => bcrypt($request->password)]);
            return back()->with(['success' => 'Password Has Been Changed']);
        }

        throw ValidationException::withMessages([
            "old_pass" => "Password lama tidak cocok"
        ]);
    }

    public function show($id) {
        return view('layout.mapel', [
            'kelas' => Kelas::find($id)
        ]);
    }
}
