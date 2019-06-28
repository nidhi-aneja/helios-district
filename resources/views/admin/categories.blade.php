
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>categories</title>
</head>
<body>
   <h><a href="{{Route('admin')}}">Categories</a></h>
   <a href="{{Route('addcategory')}}">Add</a>
    <table  id="Categories">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Parent_Category</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        @foreach ($parentCat as $pc)
                           <tr>
                           <td>{{ $pc->name }}</td>
                           <td>-</td>
                           <td><a href="{{route('editparentcategory', $pc->slug)}}">Edit</a></td>
                           </tr>
                        @endforeach
                         @foreach ($subCat as $sc)
                         <tr>
                           <td>{{ $sc->name }}</td>
                        
                   <td>{{$sc->parentcategory->name}}</td>
                           
                           <td><a href="{{route('editsubcategory', $sc->slug)}}">Edit</a></td>
                           </tr>
                        @endforeach  
                            @foreach ($childCat as $cc)
                         <tr>
                           <td>{{ $cc->name }}</td>
                        
                   <td>{{$cc->subcategory->name}}</td>
                           
                           <td><a href="{{route('editchildcategory', $cc->slug)}}">Edit</a></td>
                           </tr>
                        @endforeach  
                             
                       </table>
                          
</body>
</html>
                     