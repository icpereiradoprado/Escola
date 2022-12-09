<?php
namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
session_start();
class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('aluno.alunos',['alunos'=>$alunos]);
        //return Response::view('aluno.alunos',['alunos'=>$alunos])->header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aluno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Response $response)
    {
        $request->header('Cache-Control', 'no-cache, must-revalidate');
        Aluno::create([
            'nome' => $request['nome'],
            'dtNascto' => $request['dtNascto'],
            'telefone' => $request['telefone'],
            'turma' => $request['turma'],
            'responsavel' => $request['responsavel'],
            'senha' => "1234"
        ]);
        return redirect()->route('aluno.alunos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = Aluno::find($id);
        return view('aluno.show',['aluno' => $aluno]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::find($id);
        return view('aluno.edit',['aluno' => $aluno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //atualiza os dados de uma linha no meu banco

        $aluno = Aluno::find($id);
        $aluno->fill($request->toArray());
        $aluno->save();

        return redirect()->route('aluno.alunos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Remove uma linha do banco de dados
        $aluno = Aluno::find($id);
        $aluno->delete();
        return redirect()->route('aluno.alunos');
    }

    public function login(Request $request){
        $hasRa = Aluno::find($request->login);
        $retorno = 0;
        if($hasRa){
            $senha = $hasRa->senha;

            if($request->senha == $senha){
               $retorno = 1;
               session(['logado'=>$retorno]);
               return redirect()->route('aluno.alunos');
            }
            else{
                $retorno = 0;
            }
        }
        else{
            $retorno = 2;
        }
        return redirect()->route('aluno.index', session(['logado'=>$retorno]));
    }
}
