<?php

namespace App\Http\Controllers;
use App\Parentcategory;
use App\Subcategory;
use App\Childcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Categories extends Controller
{
    public function categoryTable()
    {
     $parentCat=Parentcategory::level1();
     $subCat=Subcategory::level2();
     $childCat=Childcategory::level3();
        
    return view('admin/categories',compact('parentCat','subCat','childCat'));
    }
    
    public function addCategory()  
    { $parentCat=Parentcategory::level1();
     $subCat=Subcategory::level2();
     
        
        return view('admin/addcategory',compact('parentCat','subCat'));
    }
    public function storeCategory(Request $request) 
    {
        $parent_category=$request->filled('parent_category');
        $sub_category=$request->filled('sub_category');
      
if($parent_category==null &&  $sub_category==null){
    $name=$request->name;
$slug = Str::slug($name, '_');
   
       Parentcategory::create(['name'=>$name, 'slug'=>$slug]);
    
}
if($parent_category!=null &&  $sub_category==null){

 $name=$request->name;
    $parent_id=$request->parent_category;
    $slug = Str::slug($name, '_');
       Subcategory::create(['name'=>$name, 'parent_id'=>$parent_id, 'slug'=>$slug]);
    
}
if($parent_category!=null &&  $sub_category!=null){

  
      $name=$request->name;
    $parent_id=$request->parent_category;
    $sub_id=$request->sub_category;
     $slug = Str::slug($name, '_');
       Childcategory::create(['name'=>$name, 'parent_id'=>$parent_id, 'sub_id'=>$sub_id,'slug'=>$slug]);
    
    
}
        
        return redirect('/admin/categories');
        
    }
    
    public function editParentCategory($slug){
        $category=Parentcategory::where('slug',$slug)->first();
          return view('admin/editparentcategory',compact('category'));
    
}
    public function editSubCategory($slug){
        $category=Subcategory::where('slug',$slug)->first();
          return view('admin/editsubcategory',compact('category'));
     
}
    public function editChildCategory($slug){
        $category=Childcategory::where('slug',$slug)->first();
          return view('admin/editchildcategory',compact('category'));
     
}
    
        public function updateParentCategory(Request $request, $slug)
    {
        $category= Parentcategory::where('slug',$slug);
           $name= $request->name;
            $slug = Str::slug($name, '_');
        $category->update(['name'=>$name,'slug'=>$slug]);
        return redirect('/admin/categories');
    }
    public function updateSubCategory(Request $request, $slug)
    {
        $category= Subcategory::where('slug',$slug);
           $name= $request->name;
            $slug = Str::slug($name, '_');
        $category->update(['name'=>$name,'slug'=>$slug]);
        return redirect('/admin/categories');
    }
    public function updateChildCategory(Request $request, $slug)
    {
         $category= Childcategory::where('slug',$slug);
           $name= $request->name;
            $slug = Str::slug($name, '_');
        $category->update(['name'=>$name,'slug'=>$slug]);
        return redirect('/admin/categories');
    }
    public function destroyParentCategory($slug)
    {
        $category=Parentcategory::where('slug', $slug)->delete();
        
          return redirect('/admin/categories');
    }
     public function destroySubCategory($slug)
    {
        $category=Subcategory::where('slug', $slug)->delete();
        
          return redirect('/admin/categories');
    }
    public function destroyChildCategory($slug)
    {
        $category=Childcategory::where('slug', $slug)->delete();
        
          return redirect('/admin/categories');
    }
}
