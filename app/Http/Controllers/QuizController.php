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
     Quiz::where('id', '=', $tempid)
     ->update(
         [
             'nama'=>$nama
         ]  
     );
     $delete = Question::where('row_id_kuis', '=', $tempid)->delete();
      //////soalnomor 1
      $addsoal1 = new Question();
      $addsoal1->row_id_kuis=$tempid;
      $addsoal1->pertanyaan=$request->soal1;
      $addsoal1->pilihan_a=$request->pilihan1a;
      $addsoal1->pilihan_b=$request->pilihan1b;
      $addsoal1->pilihan_c=$request->pilihan1c;
      $addsoal1->pilihan_d=$request->pilihan1d;
      $addsoal1->kunci_jawaban=$request->jawaban1;
      $result1=$addsoal1->save();
      //////soalnomor2
      $addsoal2 = new Question();
      $addsoal2->row_id_kuis=$tempid;
      $addsoal2->pertanyaan=$request->soal2;
      $addsoal2->pilihan_a=$request->pilihan2a;
      $addsoal2->pilihan_b=$request->pilihan2b;
      $addsoal2->pilihan_c=$request->pilihan2c;
      $addsoal2->pilihan_d=$request->pilihan2d;
      $addsoal2->kunci_jawaban=$request->jawaban2;
      $result2=$addsoal2->save();
      //////SoalNomor3
      $addsoal3 = new Question();
      $addsoal3->row_id_kuis=$tempid;
      $addsoal3->pertanyaan=$request->soal3;
      $addsoal3->pilihan_a=$request->pilihan3a;
      $addsoal3->pilihan_b=$request->pilihan3b;
      $addsoal3->pilihan_c=$request->pilihan3c;
      $addsoal3->pilihan_d=$request->pilihan3d;
      $addsoal3->kunci_jawaban=$request->jawaban3;
      $result3=$addsoal3->save();
      $data =Quiz::orderBy('created_at', 'desc')->get();
      return view('admin.quiz.list',['data'=>$data]);
        
   }
    public function add(Request $request){
        $attr = $request->all();
        $attr['nama']=request('judul');
        $attr['jumlah_pertanyaan']=3;
        $post=Quiz::create($attr);
        $baru= $post->id;
        $tempid= $request->series; 
        Series::where('id', '=', $tempid)
        ->update(
            [
                'row_id_kuis'=>$baru
            ]  
        );
        //////soalnomor 1
        $addsoal1 = new Question();
        $addsoal1->row_id_kuis=$baru;
        $addsoal1->pertanyaan=$request->soal1;
        $addsoal1->pilihan_a=$request->pilihan1a;
        $addsoal1->pilihan_b=$request->pilihan1b;
        $addsoal1->pilihan_c=$request->pilihan1c;
        $addsoal1->pilihan_d=$request->pilihan1d;
        $addsoal1->kunci_jawaban=$request->jawaban1;
        $result1=$addsoal1->save();
        //////soalnomor2
        $addsoal2 = new Question();
        $addsoal2->row_id_kuis=$baru;
        $addsoal2->pertanyaan=$request->soal2;
        $addsoal2->pilihan_a=$request->pilihan2a;
        $addsoal2->pilihan_b=$request->pilihan2b;
        $addsoal2->pilihan_c=$request->pilihan2c;
        $addsoal2->pilihan_d=$request->pilihan2d;
        $addsoal2->kunci_jawaban=$request->jawaban2;
        $result2=$addsoal2->save();
        //////SoalNomor3
        $addsoal3 = new Question();
        $addsoal3->row_id_kuis=$baru;
        $addsoal3->pertanyaan=$request->soal3;
        $addsoal3->pilihan_a=$request->pilihan3a;
        $addsoal3->pilihan_b=$request->pilihan3b;
        $addsoal3->pilihan_c=$request->pilihan3c;
        $addsoal3->pilihan_d=$request->pilihan3d;
        $addsoal3->kunci_jawaban=$request->jawaban3;
        $result3=$addsoal3->save();
        /////
        $data =Series::where('status_complete', '=', 1)->whereNull('row_id_kuis')->get();
        return view('admin.quiz.add', [
            "data"          => $data
        ]);
    }
}
