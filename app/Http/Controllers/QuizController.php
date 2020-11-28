<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use App\Models\Series;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
   public function edit(Request $request){
    $tempid=$request->id;
    $nama=$request->judul;
    $temp=$request->temp;
     Quiz::where('id', '=', $tempid)
     ->update(
         [
             'nama'=>$nama
         ]  
     );
     $delete = Question::where('row_id_kuis', '=', $tempid)->delete();
    for ($i=1; $i <= $temp; $i++) { 
      $addsoal1 = new Question();
      $addsoal1->row_id_kuis=$tempid;
      $addsoal1->pertanyaan=$request->input("soal".$i);
      $addsoal1->pilihan_a=$request->input("pilihana".$i);
      $addsoal1->pilihan_b=$request->input("pilihanb".$i);
      $addsoal1->pilihan_c=$request->input("pilihanc".$i);
      $addsoal1->pilihan_d=$request->input("pilihand".$i);
      $addsoal1->kunci_jawaban=$request->input("jawaban".$i);
      $result1=$addsoal1->save();
    }
      $data =Quiz::orderBy('created_at', 'desc')->get();
      $url_path = "/admin/quiz";
      return redirect($url_path)
      ->with("success", "This Quis has been succesfully Edit");
        
   }
    public function add(Request $request){
        $attr = $request->all();
        $arrcart    = session()->get('cartsoal');
        echo count($arrcart); 
        $attr['nama']=request('judul');
        $attr['jumlah_pertanyaan']=count($arrcart) -1;
        $post=Quiz::create($attr);
        $baru= $post->id;
        $tempid= $request->series; 
        Series::where('id', '=', $tempid)
        ->update(
            [
                'row_id_kuis'=>$baru
            ]  
        );
        $soal=$request->nomersoal;
        for ($i=0; $i <count($arrcart)-1 ; $i++) { 
            $addsoal1 = new Question();
            $addsoal1->row_id_kuis=$baru;
            $addsoal1->pertanyaan=$arrcart[$i]['pertanyaan'];
            $addsoal1->pilihan_a=$arrcart[$i]['pilihan_a'];
            $addsoal1->pilihan_b=$arrcart[$i]['pilihan_b'];
            $addsoal1->pilihan_c=$arrcart[$i]['pilihan_c'];
            $addsoal1->pilihan_d=$arrcart[$i]['pilihan_d'];
            $addsoal1->kunci_jawaban=$arrcart[$i]['kunci_jawaban'];
            $result1=$addsoal1->save();
        }
        $url_path = "/admin/quiz/add";
        return redirect($url_path)
            ->with("success", "This Quis has been succesfully add");
    }
}
