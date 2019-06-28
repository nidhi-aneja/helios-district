<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADD CATEGORY</title>
</head>
<body>
    <form action="{{Route('storecategory')}}">
       <p>Name</p>
        <input type="text" name="name"><br>
        
       <label for="parent_category">Parent Categories :</label><br>
                      <select  name="parent_category">
                          <option value="">Please select category</option>
                          
                             @foreach ($parentCat as $pc)
                            <option value="{{ $pc->id }}">{{ $pc->name }}</option>
                             @endforeach                        
                                                    
                                                    
                                                </select><br/><br/>
        <label for="sub_category">sub Categories :</label><br>
                      <select class="form-control" name="sub_category">
                          <option value="">Please select category</option>
                              @foreach ($subCat as $sc)
                            <option value="{{ $sc->id }}">{{ $sc->name }}</option>
                             @endforeach                        
                                         
                                                </select><br/><br/>
        
        <input type="submit" name="submit">
        
    </form>
</body>
</html>