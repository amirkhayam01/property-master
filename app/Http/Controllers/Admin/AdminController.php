<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function inquiries()
    {
        return view('admin.inquiries');
    }

    public function client_plot_reg()
    {
        return view('admin.client_plot_reg');
    }

    public function installments()
    {
        return view('admin.installments');
    }

    
}
