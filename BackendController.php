<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackEndController extends Controller
{
   
    public function dashboard(){
         
        return view('BackEnd.dashboard');

    }

    public function posts(){
         
        return view('BackEnd.dashboardposts');

    }
      
   
        public function map(){
             
            return view('BackEnd.map');
    
        }
        public function notifications(){
         
            return view('BackEnd.notifications');
    
        }
    
        
            public function tables(){
                 
                return view('BackEnd.tables');
        
            }public function typography(){
         
                return view('BackEnd.typography');
        
            }
        
            
                public function user(){
                     
                    return view('BackEnd.user');
            
                }
                
                public function upgrade(){
         
                    return view('BackEnd.upgrade');
            
                }
               
    
}