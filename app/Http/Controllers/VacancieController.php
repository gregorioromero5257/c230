<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacancieController extends Controller
{
  public function vacancy()
  {
    $data = json_decode( file_get_contents('http://127.0.0.1:8002/r_vacancies'), true );
    return view('vacantes',compact('data'));
  }

  public function getvacancy($id)
  {
    $data = json_decode( file_get_contents('http://127.0.0.1:8002/r_vacancies/'.$id), true );
    return view('vacantesdetalles',compact('data'));
  }
}
