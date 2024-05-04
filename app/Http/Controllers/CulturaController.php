<?php

namespace App\Http\Controllers;
use App\Models\Cultura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
class CulturaController extends Controller
{
    public function culturas(){
        return view('site.culturas');
    }
    public function home(){
        return view('site.index');
    }

   public function suporte(){
    return view ("site.suporte");
   }

public function search(Request $request):View{

    $termoPesquisa = $request->input('search');
    $culturas = Cultura::where('cultureTittle', 'LIKE', '%' . $termoPesquisa . '%')->get();

    return view('site.view-cultura', ['culturas' => $culturas,'termoPesquisa'=>$termoPesquisa ]);


}


public function Cultura_index(Cultura $diario){
       
        
    $diario = Cultura::orderBy('created_at', 'desc')->get();
    if ($diario->isEmpty()) {
        return view('site.diario', ['mensagem' => 'Diário vazio.']);
    }
    return view('site.diario',compact('diario'));
    }

        public function Cultura_store() {

            return view('site.new-diario');
        }

        public function Cultura_create(Request $request){
            
            $request->validate([ 'title'=>'required',
                 'text'=>'required']);
                 $userId = Auth::id();
    Cultura::create([
    'title'=> $request->title,
    'text'=> $request->text,
    'it_id_user' => $userId

    ]);
    return redirect()->route('diario_index')->with('success', 'Registro criado com sucesso!');
        }


        public function Cultura_show( $id){
            $diarios = Cultura::find($id);
        
        return view('site.diario-show', ['diarios' => $diarios]);
        }

        public function Cultura_update(Request $request, $id){
            
            $request->validate([
                'title'=>'required',
                'text'=>'required'
            ]);
           
            $diario=Cultura::find($id);
            $diario->update([
                'title'=>$request->title,
                'text'=>$request->text
            ]);
            return redirect()->route('diario_index')->with('success', 'Registro atualizado com sucesso!');

        }

        public function delete($id){
            $diario = Cultura::find($id);              
            $diario->delete();
            return redirect()->route('diario_index')->with('success', 'Registro excluído com sucesso!');
        }

       
}
