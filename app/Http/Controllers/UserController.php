<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUpdateUserFormRequest;
class UserController extends Controller
{

    protected $model;
    public function __construct (User $user)
    {
        $this->model = $user;
    }
    

    public function index(Request $request)
    {
        $users = $this->model
                            ->getUsers(
                                search: $request->search ?? ''
                            );

        // $users = User::get();
        return view('users.index', compact('users'));
    }


    public function show($id)
    {
        // $user = User::where('id', $id)->first();
        //find recupera o iten pelo id 
      if (!$user = User::find($id)) 
            return redirect()->route('users.index');
       return view('users.show', compact('user'));
    }


    public function create ()
    { //retorna a view so formulario 
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {//rota que cria o registro no banco 
        //dd ($request->only(['name','emai']))pega campo especifico
        $date = $request->all();
        $date['password'] =bcrypt($request->password);
        user::create($date);
        return redirect()->route('users.index');
    }

    public function edit ($id)
    {
        if (!$user = User::find($id))
            return redirect()->route('users.index');
        return view('users.edit', compact('user'));    
    }

    public function update (StoreUpdateUserFormRequest $request, $id)
    {
        if (!$user = User::find($id))
            return redirect()->route('users.index');
        $date = $request->only('name', 'email');
        if ($request->password)
            $data['password']= bcrypt($request->password);
        $user->update($date);
        
        return redirect()->route('users.index');
    }
}
