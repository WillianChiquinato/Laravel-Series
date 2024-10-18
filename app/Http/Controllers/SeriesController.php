<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Node\Block\Document;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        //Exibindo todas as suas series registradas no banco de dados Sqlite
        $series = Series::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    //Metodo para criar uma series no series.create la na tela
    public function create()
    {
        return view('series.create');
    }

    //Metodo responsavel pelo redirecionamento das informações da criação da serie, colocando no banco
    public function store(SeriesFormRequest $request)
    {
        $serie = Series::create($request->all());
        $seasons = [];
        for ($i = 1; $i <= $request->seasonsQty; $i++) {
            $seasons[] = [
                'series_id' => $serie->id,
                'number' => $i,
            ];
        }
        Season::insert($seasons);

        $episodes = [];
        foreach ($serie->seasons as $season) {
            for ($j = 1; $j <= $request->episodesPerSeason; $j++) {
                $episodes[] = [
                    'season_id' => $season->id,
                    'number' => $j
                ];
            }
        }
        Episode::insert($episodes);

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$serie->nome}' adicionada com sucesso");
    }

    //Metodo para deletar uma serie
    public function destroy(Series $series)
    {
        $series->delete();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso");
    }

    //Metodo para ir na tela de EDIT
    public function edit(Series $series)
    {
        return view('series.edit')->with('serie', $series);
    }

    //Metodo para editar uma serie (edit)
    public function update(Series $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com sucesso");
    }

    // Metodo de pesquisa, usando uma route parcial vamos dizer assim para exibir a pesquisa
    public function search(Series $series, Request $request)
    {
        $query = $request->input('query');

        $results = $series->where('nome', 'like', '%' . $query . '%')->get();

        return view('series.partials.series-list', [
            'series' => $results,
            'query' => $query,
        ]);
    }
}
