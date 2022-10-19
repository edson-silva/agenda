<?php

namespace App\Http\Controllers\Auth;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    
    //Abre a página do formulário de criação de nova tarefa
    public function create()
    {
        return view('auth.agenda.create');
    }

    
    //Armazena  nova tarefa no banco de dados
    public function store(Request $request)
    {        
        $store = Agenda::create([
            'title'=>$request->title,
            'status'=>$request->status,
            'start'=>$request->start,
            'end'=>$request->end            
        ]);
        return redirect('/dashboard');
    }


    //Retorna todos os eventos cadastrados
    public function getEvents()
    {
        $eventos = Agenda::orderBy('start','desc')->get();        
        $i=0;
        $arr=[];
        foreach($eventos as $evento){
            $startDate = explode(' ',$evento->start); $startDate = $startDate[0].'T'.$startDate[1];
            $endDate = explode(' ',$evento->end); $endDate = $endDate[0].'T'.$endDate[1];    
            $dotColor = ($evento->status == 'Finalizado')?'green':'blue';                
            $arr[$i]=[
                'id'=>$evento->id,
                'title'=>$evento->title,
                'start'=>$startDate,
                'end'=>$endDate,
                'borderColor'=>$dotColor,
                'extendedProps'=>[
                    'status'=>$evento->status
                ]
            ];                    
            $i++;
        }     
        echo json_encode($arr);           
    }



    #Página de confirmação de deletar evento
    public function deletar(Request $request)
    {
        $id = $request->id;
        return view('auth.agenda.deletar',compact('id'));
    }


    #Deleta o evento
    public function destroy(Request $request)
    {
        $id = $request->id;
        Agenda::where('id','=',$id)->delete();
        return redirect('/dashboard');
    }


    #Exibe a página de histórico de tarefas
    public function historico(Request $request)
    {
        $eventos = Agenda::orderBy('start','desc')->get();
        return view('auth.agenda.historico',compact('eventos'));
    }
}
