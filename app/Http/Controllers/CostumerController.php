<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Costumer;
class CostumerController extends Controller
{
    public function index(){
        $data = Costumer::all();
        return $data;
    }

    public function show($id)
    {
        $data = Costumer::find($id);
        return $data;
    }

    public function store($cc,$nm,$em,$ct,$cy,$add,$cn)
    {
        $data = new Costumer;
        $data->code_costumer = $cc;
        $data->name = $nm;
        $data->email = $em;
        $data->country = $ct;
        $data->city = $cy;
        $data->address = $add;
        $data->contact_number = $cn;
        $data->save();
        return $data;
    }

    public function edit($id,$cc,$nm,$em,$ct,$cy,$add,$cn)
    {
        $data = Costumer::find($id);
        $data->code_costumer = $cc;
        $data->name = $nm;
        $data->email = $em;
        $data->country = $ct;
        $data->city = $cy;
        $data->address = $add;
        $data->contact_number = $cn;
        $data->save();
        return $data;
    }

    public function delete($id)
    {
        $data = Costumer::find($id);
            $data->delete();
    }

}
