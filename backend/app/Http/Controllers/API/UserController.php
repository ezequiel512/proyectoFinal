<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $numElementos = $request->input('numElementos');
        $busquedaArray = [
            'name',
            'email',
        ];
        $busquedaFiltroQ = $request -> input('filter');

        $registroUsuario = User::query();

        if($busquedaFiltroQ && array_key_exists('q', $busquedaFiltroQ)){
            foreach ($busquedaArray as $fieldName){
                $registroUsuario = $registroUsuario
                ->orWhere($fieldName, 'like', '%' . $busquedaFiltroQ['q'] . '%');
                }
            }

        return UserResource::collection($registroUsuario->paginate($numElementos));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = json_decode($request->getContent(), true);

        $user = User::create($user['data']['attributes']);

        return new UserResource($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
