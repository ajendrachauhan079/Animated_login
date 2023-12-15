<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revision; // Assuming Revision is your model

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch the revisions data from your database or any other source
        $revisions = Revision::latest()->paginate(5);

        // Pass the revisions data to the view
        return view('revision_index', ['revisions' => $revisions]);
    }
}
