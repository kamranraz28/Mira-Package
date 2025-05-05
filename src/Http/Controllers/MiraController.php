<?php
namespace Kamran\Mira\Http\Controllers;

use Illuminate\Routing\Controller;

class MiraController extends Controller
{
    public function index()
    {
        return view('mira::mira');
    }

    public function generate()
    {
        // Add your AI report generation logic here
        return response()->json(['message' => 'Report generated']);
    }
}
