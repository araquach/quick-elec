<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
	{
		return view('page.home');
	}
	
	public function about()
	{
		return view('page.about');
	}
	
	public function details()
	{
		return view('page.details');
	}
	
	public function testimonials()
	{
		return view('page.testimonials');
	}
	
	public function create()
	{
		return view('page.contact');
	}
	
	public function sendEmail(ContactFormRequest $request)
	{
		$input = $request->all();
		
		Mail::send('emails.contact', $input, function($message)
   		{
       		$message->from('info@quick-elec.co.uk', 'Quick-Elec');
			$message->subject('RE: enquiry');
       		$message->to('george@quick-elec.co.uk');
   		});
		
		return Redirect()->back()->with('message', 'Thanks for contacting us!'); 
     
	}
}
