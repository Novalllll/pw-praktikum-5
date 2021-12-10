<?php

namespace App\Controllers;

use App\Models\DeviceModel;

class Device extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Device'
        ];

        $deviceModel = new DeviceModel();
        $deviceModel = $deviceModel->findAll();
        dd($device);

        return view('device/index', $data);
    }
}