<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Dataset;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
class DatasetController extends Controller
{
 
    public function index(){
        $datas=Dataset::paginate(6);
        return view('datasets.index',['datas'=>$datas]);

    
    }
  
    public function show( $id) {
      $data=Dataset::findOrFail($id);
    
        if (!$data) {
      
            return redirect('/datasets')->with('error', 'Dataset not found');
        }
    
        return view('datasets.show', ['data' => $data]);
    }
    
    
    public function edit($id){
        $data=Dataset::findOrFail($id);
      
        return view('/datasets/edit',['data'=>$data]);
     
    
    }
    public function create(){
      
        $tags=Tag::all();
        return view('datasets/create',['tags'=>$tags]);

    
    }
    public function destroy(Dataset $dataset){
        
     
      
         $dataset->delete();
    
         return redirect('datasets');
       
           }
           public function update( Dataset $dataset){
        
            $validate=request()->validate([
                'العنوان_بالعربية'=>['required','min:3'],
                'العنوان_بالأنجليزية'=>['required'],
                'الوصف_بالعربية'=>['required','min:3'],
                'التحديث_الدوري',
                'الحالة'=>['required','min:3'],
                'الفئات'=>['required'],
           
                ]);
           
          
            
         $dataset->update([
                'العنوان_بالعربية'=>request('العنوان_بالعربية'),
                'العنوان_بالأنجليزية'=>request('العنوان_بالأنجليزية'),
                'الوصف_بالعربية'=>request('الوصف_بالعربية'),
                'التحديث_الدوري'=>request('التحديث_الدوري'),
                'الحالة'=>request('الحالة'),
                'الفئات'=>request('الفئات'),
            
            ]);
    
            return redirect('/datasets'); 
             }
             public function store( ){
          
                $validate=request()->validate([
                    'العنوان_بالعربية'=>['required','min:3'],
                    'العنوان_بالأنجليزية'=>['required'],
                    'الوصف_بالعربية'=>['required','min:3'],
                    'التحديث_الدوري',
                    'الحالة'=>['required','min:3'],
                    'الفئات'=>['required'],
                    'tags' => ['required'], 
                    'tags.*' => ['exists:tags,id'],
            
                    ]);
               
    
                    $data=Dataset::create([
                    'العنوان_بالعربية'=>request('العنوان_بالعربية'),
                    'العنوان_بالأنجليزية'=>request('العنوان_بالأنجليزية'),
                    'الوصف_بالعربية'=>request('الوصف_بالعربية'),
                    'التحديث_الدوري'=>request('التحديث_الدوري'),
                    'الحالة'=>request('الحالة'),
                    'الفئات'=>request('الفئات'),
                    'user_id' => Auth()->id()
                ]);
                 
                $data->tags()->attach($validate['tags']);
                return redirect('datasets'); 
                 }
        
    
   
}
