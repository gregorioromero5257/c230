<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

  public function getProjects()
  {
    $data = json_decode( file_get_contents('http://127.0.0.1:8002/get_projects'), true );
    // $data = json_decode( file_get_contents('https://pgc.c-230.com/get_projects'), true );

    // return $data;
    return view('projectos',compact('data'));
  }

  public function getProject($id)
  {
    // code...
    $data_p = [];
    $data = json_decode( file_get_contents('http://127.0.0.1:8002/get_projects/'.$id), true );
    // $data = json_decode( file_get_contents('https://pgc.c-230.com/get_projects/'.$id), true );

    if (count($data) > 0) {
      // code...
      // $data_p = json_decode( file_get_contents('https://pgc.c-230.com/get_projects-diferent/'.$id), true );
      $data_p = json_decode( file_get_contents('http://127.0.0.1:8002/get_projects-diferent/'.$id), true );

    }

    // return $data;
    return view('project-detail',compact('data','data_p'));
  }

  public function getProjectPrincipal()
  {
    // code...
    // $data = json_decode( file_get_contents('https://pgc.c-230.com/get_projects_principal'), true );
    $data = json_decode( file_get_contents('http://127.0.0.1:8002/get_projects_principal'), true );

    // return $data;
    return view('welcome',compact('data'));
  }


}
