<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADD CATEGORY</title>
</head>
<body>
    <form action="{{Route('updateparentcategory', array($category->slug))}}" >
       <p>Name</p>
       @csrf
       <input type="hidden" name=_method value="PUT">
        <input type="text" name="name" value="{{$category->name}}"><br>
        
       
        
        <input type="submit" name="Edit" value="Edit">
        
    </form>
    <form action="{{route('destroyparentcategory', array($category->slug))}}" >
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="delete">
</form>
    
    
    
    
</body>
</html>