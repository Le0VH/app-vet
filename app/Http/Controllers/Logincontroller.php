<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Logincontroller extends Controller
{
    //
    public function register(Request $request){

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('actualizarperfil'));
        
    }

    public function login(Request $request){

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials,$remember)){

            $request->session()->regenerate();

            return redirect()->intended(route('actualizarperfil'));

        }else{
            return redirect('Iniciar_Sesion');
        }

    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('Home'));


    }

    public function edit(User $User)
    {
        return view('actualizarperfil');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    public function changePassword(Request $request){    
        
        $user           = Auth::user();
        $userid         = $user->id;
        $username       = $user->name;
        $userEmail      = $user->email;
        $userPassword   = $user->password;
        $userlastnames  = $user->lastnames;
        $userphone      = $user->phone;
        $userrut        = $user->rut;
        $useradress     = $user->adress;
        $userrol        = $user->rol;

        if($request->password !=""){
            $NewPass    = $request->newpassword;
            $confirPass = $request->confnewpassword;
            $name       = $request->name;
            $lastnames  = $request->lastnames;
            $email      = $request->email;
            $phone      = $request->phone;
            $rut        = $request->rut;
            $adress     = $request->adress;
            $rol        = $request->rol;

                //Verifico si la clave actual es igual a la clave del usuario en session
                if (Hash::check($request->password, $userPassword)) {

                    //Valido que tanto la 1 como 2 clave sean iguales
                    if($NewPass == $confirPass){
                        //Valido que la clave no sea Menor a 6 digitos
                        if(strlen($NewPass) >= 6){
                            $user->newpassword = Hash::make($request->newpassword);
                            $sqlBD = DB::table('users')
                                  ->where('ID', $user->id)
                                  ->update(['password' => $user->newpassword, 'name' => $name, 'lastnames' => $lastnames, 'email' => $email, 'phone' => $phone, 'rut' => $rut, 'adress' => $adress, 'rol' => $rol]);
                    
                            return redirect()->back()->with('updateClave','La clave fue cambiada correctamente.');
                        }else{
                            return redirect()->back()->with('clavemenor','Recuerde la clave debe ser mayor a 6 digitos.');
                        }
        
                }else{
                    return redirect()->back()->with('claveIncorrecta','las contraseñas nuevas no coinciden.');
                }
           
            }else{
                return redirect()->back()->with('claveerror','La contraseña es incorrecta');
            }


        }else{
            $name       = $request->name;
            $lastnames  = $request->lastnames;
            $email      = $request->email;
            $phone      = $request->phone;
            $rut        = $request->rut;
            $adress     = $request->adress;
            $rol        = $request->rol;
            $sqlBDUpdateName = DB::table('users')
                            ->where('ID', $user->id)
                            ->update(['name' => $name, 'lastnames' => $lastnames, 'email' => $email, 'phone' => $phone, 'rut' => $rut, 'adress' => $adress, 'rol' => $rol]);
            return redirect()->back()->with('name','Datos actualizados correctamente.');;

        }

        

}

}