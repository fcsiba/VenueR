<?php

namespace App\Http\Controllers;

use App\SubType;
use App\Venue;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function meeting_search(Request $request){
       
        $price=$request->input('price');
        $size=$request->input('capacity');
        $type=$request->input('types');
        if($price==2 && $size==1 && $type!=-1)
        $venue=Venue::where('type','1')->where('sub_type',$request->input('types'))->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type!=-1)
        $venue=Venue::where('type','1')->where('sub_type',$request->input('types'))->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type!=-1)
        $venue=Venue::where('type','1')->where('sub_type',$request->input('types'))->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type!=-1)
        $venue=Venue::where('type','1')->where('sub_type',$request->input('types'))->where('price','>',20000)->paginate(6);
        else if($price==2 && $size==1 && $type==-1)
        $venue=Venue::where('type','1')->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type==-1)
        $venue=Venue::where('type','1')->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type==-1)
        $venue=Venue::where('type','1')->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type==-1)
        $venue=Venue::where('type','1')->where('price','>',20000)->paginate(6);
        else if($price==1 && $size==2 && $type!=-1)
        $venue=Venue::where('type','1')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type!=-1)
        $venue=Venue::where('type','1')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type!=-1)
        $venue=Venue::where('type','1')->where('sub_type',$request->input('types'))->where('accomodation','>',500)->paginate(6);
        else if($price==1 && $size==2 && $type==-1)
        $venue=Venue::where('type','1')->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type==-1)
        $venue=Venue::where('type','1')->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type==-1)
        $venue=Venue::where('type','1')->where('accomodation','>',500)->paginate(6);
        else
        $venue=Venue::where('type','1')->paginate(6);
        $subtype=SubType::where('type_id','1')->get();
        return view('meeting',compact('venue','subtype'));
    }

    public function halls_search(Request $request){
       
        $price=$request->input('price');
        $size=$request->input('capacity');
        $type=$request->input('types');
        if($price==2 && $size==1 && $type!=-1)
        $venue=Venue::where('type','2')->where('sub_type',$request->input('types'))->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type!=-1)
        $venue=Venue::where('type','2')->where('sub_type',$request->input('types'))->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type!=-1)
        $venue=Venue::where('type','2')->where('sub_type',$request->input('types'))->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type!=-1)
        $venue=Venue::where('type','2')->where('sub_type',$request->input('types'))->where('price','>',20000)->paginate(6);
        else if($price==2 && $size==1 && $type==-1)
        $venue=Venue::where('type','2')->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type==-1)
        $venue=Venue::where('type','2')->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type==-1)
        $venue=Venue::where('type','2')->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type==-1)
        $venue=Venue::where('type','2')->where('price','>',20000)->paginate(6);
        else if($price==1 && $size==2 && $type!=-1)
        $venue=Venue::where('type','2')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type!=-1)
        $venue=Venue::where('type','2')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type!=-1)
        $venue=Venue::where('type','2')->where('sub_type',$request->input('types'))->where('accomodation','>',500)->paginate(6);
        else if($price==1 && $size==2 && $type==-1)
        $venue=Venue::where('type','2')->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type==-1)
        $venue=Venue::where('type','2')->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type==-1)
        $venue=Venue::where('type','2')->where('accomodation','>',500)->paginate(6);
        else
        $venue=Venue::where('type','2')->paginate(6);
        $subtype=SubType::where('type_id','2')->get();
        return view('halls',compact('venue','subtype'));
    }

    public function parties_search(Request $request){
       
        $price=$request->input('price');
        $size=$request->input('capacity');
        $type=$request->input('types');
        if($price==2 && $size==1 && $type!=-1)
        $venue=Venue::where('type','3')->where('sub_type',$request->input('types'))->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type!=-1)
        $venue=Venue::where('type','3')->where('sub_type',$request->input('types'))->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type!=-1)
        $venue=Venue::where('type','3')->where('sub_type',$request->input('types'))->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type!=-1)
        $venue=Venue::where('type','3')->where('sub_type',$request->input('types'))->where('price','>',20000)->paginate(6);
        else if($price==2 && $size==1 && $type==-1)
        $venue=Venue::where('type','3')->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type==-1)
        $venue=Venue::where('type','3')->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type==-1)
        $venue=Venue::where('type','3')->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type==-1)
        $venue=Venue::where('type','3')->where('price','>',20000)->paginate(6);
        else if($price==1 && $size==2 && $type!=-1)
        $venue=Venue::where('type','3')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type!=-1)
        $venue=Venue::where('type','3')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type!=-1)
        $venue=Venue::where('type','3')->where('sub_type',$request->input('types'))->where('accomodation','>',500)->paginate(6);
        else if($price==1 && $size==2 && $type==-1)
        $venue=Venue::where('type','3')->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type==-1)
        $venue=Venue::where('type','3')->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type==-1)
        $venue=Venue::where('type','3')->where('accomodation','>',500)->paginate(6);
        else
        $venue=Venue::where('type','3')->paginate(6);
        $subtype=SubType::where('type_id','3')->get();
        return view('parties',compact('venue','subtype'));
    }

    public function playground_search(Request $request){
       
        $price=$request->input('price');
        $size=$request->input('capacity');
        $type=$request->input('types');
        if($price==2 && $size==1 && $type!=-1)
        $venue=Venue::where('type','4')->where('sub_type',$request->input('types'))->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type!=-1)
        $venue=Venue::where('type','4')->where('sub_type',$request->input('types'))->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type!=-1)
        $venue=Venue::where('type','4')->where('sub_type',$request->input('types'))->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type!=-1)
        $venue=Venue::where('type','4')->where('sub_type',$request->input('types'))->where('price','>',20000)->paginate(6);
        else if($price==2 && $size==1 && $type==-1)
        $venue=Venue::where('type','4')->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type==-1)
        $venue=Venue::where('type','4')->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type==-1)
        $venue=Venue::where('type','4')->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type==-1)
        $venue=Venue::where('type','4')->where('price','>',20000)->paginate(6);
        else if($price==1 && $size==2 && $type!=-1)
        $venue=Venue::where('type','4')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type!=-1)
        $venue=Venue::where('type','4')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type!=-1)
        $venue=Venue::where('type','4')->where('sub_type',$request->input('types'))->where('accomodation','>',500)->paginate(6);
        else if($price==1 && $size==2 && $type==-1)
        $venue=Venue::where('type','4')->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type==-1)
        $venue=Venue::where('type','4')->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type==-1)
        $venue=Venue::where('type','4')->where('accomodation','>',500)->paginate(6);
        else
        $venue=Venue::where('type','4')->paginate(6);
        $subtype=SubType::where('type_id','4')->get();
        return view('playground',compact('venue','subtype'));
    }

    public function training_search(Request $request){
       
        $price=$request->input('price');
        $size=$request->input('capacity');
        $type=$request->input('types');
        if($price==2 && $size==1 && $type!=-1)
        $venue=Venue::where('type','5')->where('sub_type',$request->input('types'))->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type!=-1)
        $venue=Venue::where('type','5')->where('sub_type',$request->input('types'))->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type!=-1)
        $venue=Venue::where('type','5')->where('sub_type',$request->input('types'))->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type!=-1)
        $venue=Venue::where('type','5')->where('sub_type',$request->input('types'))->where('price','>',20000)->paginate(6);
        else if($price==2 && $size==1 && $type==-1)
        $venue=Venue::where('type','5')->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type==-1)
        $venue=Venue::where('type','5')->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type==-1)
        $venue=Venue::where('type','5')->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type==-1)
        $venue=Venue::where('type','5')->where('price','>',20000)->paginate(6);
        else if($price==1 && $size==2 && $type!=-1)
        $venue=Venue::where('type','5')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type!=-1)
        $venue=Venue::where('type','5')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type!=-1)
        $venue=Venue::where('type','5')->where('sub_type',$request->input('types'))->where('accomodation','>',500)->paginate(6);
        else if($price==1 && $size==2 && $type==-1)
        $venue=Venue::where('type','5')->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type==-1)
        $venue=Venue::where('type','5')->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type==-1)
        $venue=Venue::where('type','5')->where('accomodation','>',500)->paginate(6);
        else
        $venue=Venue::where('type','5')->paginate(6);
        $subtype=SubType::where('type_id','5')->get();
        return view('training',compact('venue','subtype'));
    }

    public function professional_search(Request $request){
       
        $price=$request->input('price');
        $size=$request->input('capacity');
        $type=$request->input('types');
        if($price==2 && $size==1 && $type!=-1)
        $venue=Venue::where('type','6')->where('sub_type',$request->input('types'))->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type!=-1)
        $venue=Venue::where('type','6')->where('sub_type',$request->input('types'))->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type!=-1)
        $venue=Venue::where('type','6')->where('sub_type',$request->input('types'))->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type!=-1)
        $venue=Venue::where('type','6')->where('sub_type',$request->input('types'))->where('price','>',20000)->paginate(6);
        else if($price==2 && $size==1 && $type==-1)
        $venue=Venue::where('type','6')->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type==-1)
        $venue=Venue::where('type','6')->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type==-1)
        $venue=Venue::where('type','6')->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type==-1)
        $venue=Venue::where('type','6')->where('price','>',20000)->paginate(6);
        else if($price==1 && $size==2 && $type!=-1)
        $venue=Venue::where('type','6')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type!=-1)
        $venue=Venue::where('type','6')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type!=-1)
        $venue=Venue::where('type','6')->where('sub_type',$request->input('types'))->where('accomodation','>',500)->paginate(6);
        else if($price==1 && $size==2 && $type==-1)
        $venue=Venue::where('type','6')->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type==-1)
        $venue=Venue::where('type','6')->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type==-1)
        $venue=Venue::where('type','6')->where('accomodation','>',500)->paginate(6);
        else
        $venue=Venue::where('type','6')->paginate(6);
        $subtype=SubType::where('type_id','6')->get();
        return view('professional',compact('venue','subtype'));
    }

    public function wedding_search(Request $request){
       
        $price=$request->input('price');
        $size=$request->input('capacity');
        $type=$request->input('types');
        if($price==2 && $size==1 && $type!=-1)
        $venue=Venue::where('type','7')->where('sub_type',$request->input('types'))->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type!=-1)
        $venue=Venue::where('type','7')->where('sub_type',$request->input('types'))->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type!=-1)
        $venue=Venue::where('type','7')->where('sub_type',$request->input('types'))->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type!=-1)
        $venue=Venue::where('type','7')->where('sub_type',$request->input('types'))->where('price','>',20000)->paginate(6);
        else if($price==2 && $size==1 && $type==-1)
        $venue=Venue::where('type','7')->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type==-1)
        $venue=Venue::where('type','7')->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type==-1)
        $venue=Venue::where('type','7')->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type==-1)
        $venue=Venue::where('type','7')->where('price','>',20000)->paginate(6);
        else if($price==1 && $size==2 && $type!=-1)
        $venue=Venue::where('type','7')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type!=-1)
        $venue=Venue::where('type','7')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type!=-1)
        $venue=Venue::where('type','7')->where('sub_type',$request->input('types'))->where('accomodation','>',500)->paginate(6);
        else if($price==1 && $size==2 && $type==-1)
        $venue=Venue::where('type','7')->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type==-1)
        $venue=Venue::where('type','7')->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type==-1)
        $venue=Venue::where('type','7')->where('accomodation','>',500)->paginate(6);
        else
        $venue=Venue::where('type','7')->paginate(6);
        $subtype=SubType::where('type_id','7')->get();
        return view('weddings',compact('venue','subtype'));
    }

    public function offsite_search(Request $request){
       
        $price=$request->input('price');
        $size=$request->input('capacity');
        $type=$request->input('types');
        if($price==2 && $size==1 && $type!=-1)
        $venue=Venue::where('type','8')->where('sub_type',$request->input('types'))->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type!=-1)
        $venue=Venue::where('type','8')->where('sub_type',$request->input('types'))->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type!=-1)
        $venue=Venue::where('type','8')->where('sub_type',$request->input('types'))->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type!=-1)
        $venue=Venue::where('type','8')->where('sub_type',$request->input('types'))->where('price','>',20000)->paginate(6);
        else if($price==2 && $size==1 && $type==-1)
        $venue=Venue::where('type','8')->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type==-1)
        $venue=Venue::where('type','8')->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type==-1)
        $venue=Venue::where('type','8')->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type==-1)
        $venue=Venue::where('type','8')->where('price','>',20000)->paginate(6);
        else if($price==1 && $size==2 && $type!=-1)
        $venue=Venue::where('type','8')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type!=-1)
        $venue=Venue::where('type','8')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type!=-1)
        $venue=Venue::where('type','8')->where('sub_type',$request->input('types'))->where('accomodation','>',500)->paginate(6);
        else if($price==1 && $size==2 && $type==-1)
        $venue=Venue::where('type','8')->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type==-1)
        $venue=Venue::where('type','8')->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type==-1)
        $venue=Venue::where('type','8')->where('accomodation','>',500)->paginate(6);
        else
        $venue=Venue::where('type','8')->paginate(6);
        $subtype=SubType::where('type_id','8')->get();
        return view('offsite',compact('venue','subtype'));
    }

    public function unusual_search(Request $request){
       
        $price=$request->input('price');
        $size=$request->input('capacity');
        $type=$request->input('types');
        if($price==2 && $size==1 && $type!=-1)
        $venue=Venue::where('type','9')->where('sub_type',$request->input('types'))->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type!=-1)
        $venue=Venue::where('type','9')->where('sub_type',$request->input('types'))->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type!=-1)
        $venue=Venue::where('type','9')->where('sub_type',$request->input('types'))->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type!=-1)
        $venue=Venue::where('type','9')->where('sub_type',$request->input('types'))->where('price','>',20000)->paginate(6);
        else if($price==2 && $size==1 && $type==-1)
        $venue=Venue::where('type','9')->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1 && $type==-1)
        $venue=Venue::where('type','9')->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1 && $type==-1)
        $venue=Venue::where('type','9')->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1 && $type==-1)
        $venue=Venue::where('type','9')->where('price','>',20000)->paginate(6);
        else if($price==1 && $size==2 && $type!=-1)
        $venue=Venue::where('type','9')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type!=-1)
        $venue=Venue::where('type','9')->where('sub_type',$request->input('types'))->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type!=-1)
        $venue=Venue::where('type','9')->where('sub_type',$request->input('types'))->where('accomodation','>',500)->paginate(6);
        else if($price==1 && $size==2 && $type==-1)
        $venue=Venue::where('type','9')->whereBetween('accomodation',[0,300])->paginate(6);
        else if($price==1 && $size==3 && $type==-1)
        $venue=Venue::where('type','9')->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==4 && $type==-1)
        $venue=Venue::where('type','9')->where('accomodation','>',500)->paginate(6);
        else
        $venue=Venue::where('type','9')->paginate(6);
        $subtype=SubType::where('type_id','9')->get();
        return view('unusual',compact('venue','subtype'));
    }

    public function search_space(Request $request){
       
        $price=$request->input('price');
        $size=$request->input('capacity');
        $type=$request->input('mtype');
        $venue="";
        if($price==2 && $size==2 )
        $venue=Venue::where('type',$type)->whereBetween('accomodation',[0,300])->whereBetween('price',[0,5000])->paginate(6);
        else if($price==2 && $size==1 )
        $venue=Venue::where('type',$type)->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==1)
        $venue=Venue::where('type',$type)->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==3 && $size==2)
        $venue=Venue::where('type',$type)->whereBetween('accomodation',[0,300])->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==1)
        $venue=Venue::where('type',$type)->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==4 && $size==2)
        $venue=Venue::where('type',$type)->whereBetween('accomodation',[0,300])->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==1)
        $venue=Venue::where('type',$type)->where('price','>',20000)->paginate(6);
        else if($price==5 && $size==2)
        $venue=Venue::where('type',$type)->whereBetween('accomodation',[0,300])->where('price','>',20000)->paginate(6);
        else if($price==2 && $size==3 )
        $venue=Venue::where('type',$type)->whereBetween('accomodation',[300,500])->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==3)
        $venue=Venue::where('type',$type)->whereBetween('accomodation',[300,500])->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==3)
        $venue=Venue::where('type',$type)->whereBetween('accomodation',[300,500])->whereBetween('price',[10000,20000])->paginate(6);
        else if($price==5 && $size==3)
        $venue=Venue::where('type',$type)->whereBetween('accomodation',[300,500])->where('price','>',20000)->paginate(6);
        else if($price==2 && $size==4)
        $venue=Venue::where('type',$type)->where('accomodation','>',500)->whereBetween('price',[0,5000])->paginate(6);
        else if($price==3 && $size==4)
        $venue=Venue::where('type',$type)->where('accomodation','>',500)->whereBetween('price',[5000,10000])->paginate(6);
        else if($price==4 && $size==4)
        $venue=Venue::where('type',$type)->where('accomodation','>',500)->where('price','>',20000)->paginate(6);
        else if($price==1 && $size==4)
        $venue=Venue::where('type',$type)->where('accomodation','>',500)->paginate(6);
        else if($price==1 && $size==3)
        $venue=Venue::where('type',$type)->whereBetween('accomodation',[300,500])->paginate(6);
        else if($price==1 && $size==2)
        $venue=Venue::where('type',$type)->whereBetween('accomodation',[0,300])->paginate(6);
        else
        $venue=Venue::where('type',$type)->paginate(6);
        $subtype=SubType::where('type_id',$type)->get();
        if($type==1)
        {
            return view('meeting',compact('venue','subtype'));
        }
        if($type==2)
        {
            return view('halls',compact('venue','subtype'));
        }
        if($type==3)
        {
            return view('parties',compact('venue','subtype'));
        }
        if($type==4)
        {
            return view('playground',compact('venue','subtype'));
        }
        if($type==5)
        {
            return view('training',compact('venue','subtype'));
        }
        if($type==6)
        {
            return view('professional',compact('venue','subtype'));
        }
        if($type==7)
        {
            return view('weddings',compact('venue','subtype'));
        }
        if($type==8)
        {
            return view('offsite',compact('venue','subtype'));
        }
        if($type==9)
        {
            return view('unusual',compact('venue','subtype'));
        }
        
    }
}
