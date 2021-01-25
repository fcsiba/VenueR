<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Contactvenue;
use App\SubType;
use App\Type;
use App\Venue;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $type=Type::all();
        return view('index',compact('type'));
    }
    public function about()
    {
        $type=Type::all();
        return view('about',compact('type'));
    }
    public function contactus()
    {
        $type=Type::all();
        return view('contact',compact('type'));
    }
   public function meeting()
   {
       $venue=Venue::where('type','1')->paginate(6);
       $subtype=SubType::where('type_id','1')->get();
       return view('meeting',compact('venue','subtype'));
   }
   public function halls()
   {
       $venue=Venue::where('type','2')->paginate(6);
       $subtype=SubType::where('type_id','2')->get();
       return view('halls',compact('venue','subtype'));
   }
   public function parties()
   {
       $venue=Venue::where('type','3')->paginate(6);
       $subtype=SubType::where('type_id','3')->get();
       return view('parties',compact('venue','subtype'));
   }
   public function playground()
   {
       $venue=Venue::where('type','4')->paginate(6);
       $subtype=SubType::where('type_id','4')->get();
       return view('playground',compact('venue','subtype'));
   }
   public function training()
   {
    $venue=Venue::where('type','5')->paginate(6);
    $subtype=SubType::where('type_id','5')->get();
       return view('training',compact('venue','subtype'));
   }
   public function professional()
   {
    $venue=Venue::where('type','6')->paginate(6);
    $subtype=SubType::where('type_id','6')->get();
       return view('professional',compact('venue','subtype'));
   }
   public function wedding()
   {
    $venue=Venue::where('type','7')->paginate(6);
    $subtype=SubType::where('type_id','7')->get();
       return view('weddings',compact('venue','subtype'));
   }
   public function offsite()
   {
    $venue=Venue::where('type','8')->paginate(6);
    $subtype=SubType::where('type_id','8')->get();
       return view('offsite',compact('venue','subtype'));
   }
   public function unusual()
   {
    $venue=Venue::where('type','9')->paginate(6);
    $subtype=SubType::where('type_id','9')->get();
       return view('unusual',compact('venue','subtype'));
   }

   //details

   public function meeting_detail($id)
   {
       $venue=Venue::where('id',$id)->first();
       return view('detail-meeting',compact('venue'));
   }
   public function halls_detail($id)
   {
    $venue=Venue::where('id',$id)->first();
       return view('detail-halls',compact('venue'));
   }
   public function parties_detail($id)
   {
    $venue=Venue::where('id',$id)->first();
       return view('detail-parties',compact('venue'));
   }
   public function playground_detail($id)
   {
    $venue=Venue::where('id',$id)->first();
       return view('detail-playground',compact('venue'));
   }
   public function training_detail($id)
   {
    $venue=Venue::where('id',$id)->first();
       return view('detail-training',compact('venue'));
   }
   public function professional_detail($id)
   {
    $venue=Venue::where('id',$id)->first();
       return view('detail-professional',compact('venue'));
   }
   public function wedding_detail($id)
   {
    $venue=Venue::where('id',$id)->first();
       return view('detail-wedding',compact('venue'));
   }
   public function offsite_detail($id)
   {
    $venue=Venue::where('id',$id)->first();
       return view('detail-offsite',compact('venue'));
   }
   public function unusual_detail($id)
   {
    $venue=Venue::where('id',$id)->first();
       return view('detail-unusual',compact('venue'));
   }


   public function venueContact(Request $request)
   {
    $message = new Contactvenue();
    $message->category = $request->input('type');
    $message->venue_name = $request->input('vname');
    $message->name = $request->input('name');
    $message->email = $request->input('email');
    $message->phone = $request->input('phone');
    $message->admin_id = $request->input('admin_id');
    
    $message->save();
   }

   public function contact(Request $request)
   {
    $message = new Contact();

    $message->name = $request->input('name');
    $message->email = $request->input('email');
    $message->subject = $request->input('subject');
    $message->message = $request->input('message');
    $message->save();
   }

   public function space()
   {
       $type=Type::all();
       return view('space',compact('type'));
   }

   
}
