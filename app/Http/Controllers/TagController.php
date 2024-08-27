<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Tag;
class TagController extends Controller
{
    public function index(){
        $tags=Tag::paginate(6);
        return view('tags/index',['tags'=>$tags]);

    
    }
    public function destroy(Tag $tag){
      
    
        $tag->delete();
   
        return redirect('/tags');
      
          }
          public function update( Tag $tag){
          
            request()->validate([
                'الاسم_بالعربية'=>['required','min:3'],
                'الاسم_بالأنجليزية'=>['required'],
              
                ]);
           
        
            $tag->update([
                'الاسم_بالعربية'=>request('الاسم_بالعربية'),
                'الاسم_بالأنجليزية'=>request('الاسم_بالأنجليزية'),
              
            ]);
           
            return redirect('/tags'); 
             }
             public function edit(Tag $tag){

      
            
                return view('/tags/edit',['tag'=>$tag]);
             
            
            }
            public function create(){

                return view('tags/create');
        
            
            }
            public function store() {
                
                
                request()->validate([
                    'الاسم_بالعربية' => ['required', 'min:3'],
                    'الاسم_بالأنجليزية' => ['required']
                ]);
            
                Tag::create([
                    'الاسم_بالعربية' => request('الاسم_بالعربية'),
                    'الاسم_بالأنجليزية' => request('الاسم_بالأنجليزية'),
                ]);
            
                return redirect('/tags');
            }
            
}
