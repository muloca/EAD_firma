<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::latest()->paginate();

        return view('admin.posts.index', compact('posts'));
    }


    public function create()
    {

        return view('admin.posts.create');
    }


    public function inicio()
    {

        $posts = Post::select('estado')->groupBy('estado')->orderBy('estado')->get();
        $ac = Post::where('estado', ['AC'])->orderBy('cidade')->get();
        $al = Post::where('estado', ['AL'])->orderBy('cidade')->get();
        $ap = Post::where('estado', ['AP'])->orderBy('cidade')->get();
        $am = Post::where('estado', ['AM'])->orderBy('cidade')->get();
        $ba = Post::where('estado', ['BA'])->orderBy('cidade')->get();
        $ce = Post::where('estado', ['CE'])->orderBy('cidade')->get();
        $es = Post::where('estado', ['ES'])->orderBy('cidade')->get();
        $go = Post::where('estado', ['GO'])->orderBy('cidade')->get();
        $ma = Post::where('estado', ['MA'])->orderBy('cidade')->get();
        $mt = Post::where('estado', ['MT'])->orderBy('cidade')->get();
        $ms = Post::where('estado', ['MS'])->orderBy('cidade')->get();
        $mg = Post::where('estado', ['MG'])->orderBy('cidade')->get();
        $pa = Post::where('estado', ['PA'])->orderBy('cidade')->get();
        $pb = Post::where('estado', ['PB'])->orderBy('cidade')->get();
        $pr = Post::where('estado', ['PR'])->orderBy('cidade')->get();
        $pe = Post::where('estado', ['PE'])->orderBy('cidade')->get();
        $pi = Post::where('estado', ['PI'])->orderBy('cidade')->get();
        $rj = Post::where('estado', ['RJ'])->orderBy('cidade')->get();
        $rn = Post::where('estado', ['RN'])->orderBy('cidade')->get();
        $rs = Post::where('estado', ['RS'])->orderBy('cidade')->get();
        $ro = Post::where('estado', ['RO'])->orderBy('cidade')->get();
        $rr = Post::where('estado', ['RR'])->orderBy('cidade')->get();
        $sc = Post::where('estado', ['SC'])->orderBy('cidade')->get();
        $sp = Post::where('estado', ['SP'])->orderBy('cidade')->get();
        $se = Post::where('estado', ['SE'])->orderBy('cidade')->get();
        $to = Post::where('estado', ['TO'])->orderBy('cidade')->get();
        $df = Post::where('estado', ['DF'])->orderBy('cidade')->get();
        //$fundamental1 = Post::select('classe')->whereIn('classe', ['1° Fundamental', '2° A Fundamental', '2° B Fundamental', '3° Fundamental', '4° Fundamental', '5° Fundamental'])->groupBy('classe')->get();
        //$fundamental2 = Post::select('classe')->whereIn('classe', ['6° Fundamental', '7° Fundamental', '8° Fundamental', '9° Fundamental'])->groupBy('classe')->get();
        //$medio = Post::select('classe')->whereIn('classe', ['1° Médio', '2° Médio', '3° Médio'])->groupBy('classe')->get();
        //$geral = Post::select('classe')->whereIn('classe', ['Direção', 'Coordenação', 'Secretaria'])->groupBy('classe')->get();
        //$integral = Post::select('classe')->whereIn('classe', ['Integral'])->groupBy('classe')->get();

        return view('admin.posts.categoria', compact('posts', 'ac', 'al', 'ap', 'am', 'ba', 'ce', 'es', 'go', 'ma', 'mt', 'ms', 'mg',
        'pa', 'pb', 'pr', 'pe', 'pi', 'rj', 'rn', 'rs', 'ro', 'rr', 'sc', 'sp', 'se', 'to', 'df'));
    }


    public function classe($classe)
    {

        $post = Post::where('classe', $classe)->orderBy('id', 'DESC')->get();
        $cabeca = Post::where('classe', $classe)->select('classe')->groupBy('classe')->get();

        return view('admin.posts.classe', compact('post', 'cabeca'));
    }

    public function store(StoreUpdatePost $request)
    {
        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        // $post = Post::where('id', $id)->First(); recupera pela coluna

        if (!$post = Post::find($id)) {
            return redirect()->route('posts.index');
        }

        return view('admin.posts.show', compact('post'));
    }

    public function destroy($id)
    {
        if (!$post = Post::find($id)) {
            return redirect()->route('posts.index');
        }

        $post->delete();

        return redirect()->route('posts.index')->with('message', 'Unidade deletada com sucesso');
    }

    public function edit($id)
    {
        // $post = Post::where('id', $id)->First(); recupera pela coluna do banco *SQL

        if (!$post = Post::find($id)) {
            return redirect()->back();
        }

        return view('admin.posts.edit', compact('post'));
    }


    public function update(StoreUpdatePost $request, $id)
    {

        if (!$post = Post::find($id)) {
            return redirect()->back();
        }

        $post->update($request->all());
        // dd($post);

        return redirect()->route('posts.index')->with('editado', 'Unidade Atualizada!');
    }

    public function search(Request $request)
    {

        $filters = $request->except('_token');

        $posts = Post::where('cidade', 'LIKE', "%{$request->search}%")
            ->orWhere('polo', 'LIKE', "%{$request->search}%")
            ->orWhere('estado', 'LIKE', "%{$request->search}%")
            ->paginate();

        return view('admin.posts.index', compact('posts', 'filters'));
    }
}
