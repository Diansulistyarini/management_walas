<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dataadm;

class AdmController extends Controller
{
    public function index()
    {
        $adm = Dataadm::all();
        return view('adm.admwalas', ['adm_walass' => $adm]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'materiPokok' => 'required',
            'target' => 'required',
        ]);

        Dataadm::create([
            'materiPokok' => $request->materiPokok,
            'targetPengerjaan' => $request->target,
            'kode' => $request->kode
        ]);

        return redirect('/adm');
    }

    public function edit($id)
    {
        $adm_walass = Dataadm::find($id);
        return view('walas.adm.edit_adm', ['adm_walass' => $adm_walass]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'materiPokok' => 'required',
            'target' => 'required'
        ]);

        $adm_walass = Dataadm::find($id);
        $adm_walass->materiPokok = $request->materiPokok;
        $adm_walass->targetPengerjaan = $request->target;
        $adm_walass->save();
        return redirect('/adm');
    }

    public function hapus($id)
    {
        $adm = Dataadm::find($id);
        $adm->delete();
        return redirect('/adm');
    }
}
