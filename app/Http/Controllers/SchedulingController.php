<?php

namespace App\Http\Controllers;

use App\Models\Scheduling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SchedulingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $schedulings = Scheduling::where('schedulings.id_user', $this->setidUser($request))->join('users','schedulings.id_user','=','users.id')->select('schedulings.*', 'users.name as nome_de_usuario')->get();
        
        return view('meusAgendamentos', ['schedulings' => $schedulings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $idUser = $this->setidUser($request);

        $scheduling = new Scheduling();
        $scheduling->date = $request->date;
        $scheduling->time = $request->time;
        $scheduling->status = 1;
        $scheduling->id_user = $idUser;
        $scheduling->barber = $request->barber;
        
        if($this->existSche($request)){
            $scheduling->save();
            return redirect()->route('ag')->with('mensagem', 'Agendamento criado com sucesso.');
        }else{
            return redirect()->route('ag')->with('mensagem', 'Não foi possível realizar o agendamento, horário indisponível.');
        }
        
        
    }

    private function setidUser(Request $request)
    {
        if (Auth::check()) {
            return Auth::id(); 
        }

        $request->validate([
            'usuario' => 'required',
        ]);

        $usuario = json_decode($request->input('user'), true);
        return $usuario['id'];
    }
    private function existSche(Request $request)
    {
        if (Scheduling::where('date', $request->input('date'))
            ->where('time', $request->input('time'))
            ->where('barber', $request->input('barber'))
            ->exists()) {
            return false; // Já existe um agendamento com a mesma data, horário e barbeiro
        } else {
            return true; // Não existe agendamento com a mesma data, horário e barbeiro
        }
            }


    
    public function show(Scheduling $scheduling)
    {
        //
    }

    
    public function edit(Scheduling $scheduling)
    {
        //
    }

    
    public function update(Request $request, Scheduling $scheduling)
    {
        //
    }

    
    public function destroy(Scheduling $scheduling, $id)
    {
        Scheduling::findOrfail($id)->delete();
        return redirect()->route('myAg')->with('mensagem','Agendamento excluído.');
    }

    
}
