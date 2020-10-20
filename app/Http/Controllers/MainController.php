<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    public function home(){
        $berita_terkini = DB::table("news")->orderBy('id', 'DESC')->first();

        $berita_terkini->created_at = date('d M Y', strtotime($berita_terkini->created_at));

        $berita_terkini2 = DB::table("news")
            ->whereNotIn('id', [$berita_terkini->id])
            ->orderBy('id', 'DESC')
            ->get();

        $event = DB::table('events')->first();
        $event2 = DB::table('events')
            ->whereNotIn('id', [$event->id])
            ->get();

        $info = DB::table('informations')
            ->orderBy('id', 'DESC')
            ->limit(4)
            ->get();

        foreach($info as $i){
            $i->created_at = date('d F Y', strtotime($i->created_at));
        }

        $agenda = DB::table('agenda')->get();
        
        foreach($agenda as $a){
            $a->date = date('d', strtotime($a->date_agenda));
            $a->month = date('m', strtotime($a->date_agenda));
            $a->year = date('Y', strtotime($a->date_agenda));
        }

        return view('welcome', compact('berita_terkini', 'berita_terkini2', 'event', 'event2', 'info', 'agenda'));
    }

    public function berita(){
        $berita = DB::table('news')
            ->paginate(4);

        foreach($berita as $b){
            $b->created_at = date('d M Y', strtotime($b->created_at));
        }

        $berita2 = DB::table('news')
            ->orderBy('id', 'DESC')
            ->limit(2)
            ->get();

        foreach($berita2 as $b2){
            $b2->created_at = date('d M Y', strtotime($b2->created_at));
        }

        return view('berita', compact('berita', 'berita2'));
    }

    public function beritaLengkap(Request $request){
        $berita = DB::table('news')
            ->where('id', $request->id)
            ->first();

        $berita->created_at = date('l, d M Y H:i', strtotime($berita->created_at));

        $berita2 = DB::table('news')
            ->whereNotIn('id', [$berita->id])
            ->orderBy('id', 'DESC')
            ->limit(2)
            ->get();

        foreach($berita2 as $b2){
            $b2->created_at = date('d M Y', strtotime($b2->created_at));
        }

        $berita3 = DB::table('news')
            ->whereNotIn('id', [$berita->id])
            ->limit(2)
            ->get();

        foreach($berita3 as $b3){
            $b3->created_at = date('d F Y H:i', strtotime($b3->created_at));
        }

        $link = config('app.url').'/berita-lengkap/'.$request->id;

        return view('beritaLengkap', compact('berita', 'berita2', 'berita3', 'link'));
    }   

    public function agenda(){
        $agenda = DB::table('agenda')->get();

        foreach($agenda as $a){
            $a->date_agenda = date('d M Y', strtotime($a->date_agenda));
            $a->date_agenda_until = date('d M Y', strtotime($a->date_agenda_until));
        }

        $berita = DB::table('news')
            ->orderBy('id', 'DESC')
            ->limit(2)
            ->get();

        foreach($berita as $b){
            $b->created_at = date('d F Y', strtotime($b->created_at));
        }

        return view('agenda', compact('agenda', 'berita'));
    }

    public function sdgFakultas(){
        $sdg = DB::table('sdg')->paginate(4);

        foreach($sdg as $s){
            $s->created_at = date('M Y', strtotime($s->created_at));
        }

        return view('sdgFakultas', compact('sdg'));
    }

    public function sdgFakultasLengkap(Request $request){
        $sdg = DB::table('sdg')
            ->where('id', $request->id)
            ->first();

        $sdg->created_at = date('M Y', strtotime($sdg->created_at));

        $sdg2 = DB::table('sdg')
            ->whereNotIn('id', [$sdg->id])
            ->limit(2)
            ->get();

        foreach($sdg2 as $s){
            $s->created_at = date('d F Y H:i', strtotime($s->created_at));
        }

        $link = config('app.url').'/sdg14-lengkap/'.$request->id;

        return view('sdgFakultasLengkap', compact('sdg', 'sdg2', 'link'));
    }

    public function agrianita(){
        $agrianita = DB::table('agrianita')
            ->paginate(4);

        foreach($agrianita as $a){
            $a->created_at = date('d M Y', strtotime($a->created_at));
        }

        $agrianita2 = DB::table('agrianita')
            ->orderBy('id', 'DESC')
            ->limit(2)
            ->get();

        foreach($agrianita2 as $a2){
            $a2->created_at = date('d M Y', strtotime($a2->created_at));
        }

        return view('agrianita', compact('agrianita', 'agrianita2'));
    }

    public function agrianitaLengkap(Request $request){
        $agrianita = DB::table('agrianita')
            ->where('id', $request->id)
            ->first();

        $agrianita->created_at = date('l, d M Y H:i', strtotime($agrianita->created_at));

        $agrianita2 = DB::table('agrianita')
            ->whereNotIn('id', [$agrianita->id])
            ->limit(2)
            ->get();

        foreach($agrianita2 as $a2){
            $a2->created_at = date('d M Y', strtotime($a2->created_at));
        }

        $link = config('app.url').'/agrianita-lengkap/'.$request->id;

        // $agrianita3 = DB::table('agrianita')
        //     ->whereNotIn('id', [$agrianita->id])
        //     ->limit(2)
        //     ->get();

        // foreach($agrianita as $a3){
        //     $a3->created_at = date('d F Y H:i', strtotime($a3->created_at));
        // }

        return view('agrianitaLengkap', compact('agrianita', 'agrianita2', 'link'));
    }
    
    public function achievement() {

        $prestasi = DB::table("achievements")->get();

        return view('prestasiMahasiswa', compact('prestasi'));
    }

    public function pkm() {

        $pkm = DB::table("pkm")->get();

        return view('pkm', compact('pkm'));
    }
}
