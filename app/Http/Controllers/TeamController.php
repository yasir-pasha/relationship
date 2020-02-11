<?php
  
  namespace App\Http\Controllers;
  
  use App\Team;
  
  class TeamController extends Controller
  {
    public function show(Team $team)
    {
      $data =  $team->goals()->get();
      return  'sdf';
    }
  }
