<x-app-layout>

</x-app-layout>

  <!DOCTYPE html>
<html lang="en">
  <head>
  <style>
.container{

    margin:auto;
    display: flex; 
    justify-content:center;
    align-items:center;
 
}
        input{
         
         margin:40px;
        } 
        </style>
    <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller ">
  @include("admin.navbar")
    
  <div class="container">
   <form action="{{url('update',$data->id)}}" method="post" enctype="multipart/form-data">
       @csrf
    <div>
       <label>Title</label>
       <input style="color:black;" type="text" name="title" value="{{$data->title}}" required> 
    </div>   
    <div>
   <label>Price</label>
   <input style="color:black;" type="num" name="price" value="{{$data->price}}" required> 
</div>   

<div>
   <label>quantity</label>
   <input style="color:black;" type="num" name="quantity" value="{{$data->quantity}}" required> 
</div>   
<div>
   <label>Description</label>
   <input style="color:black;" type="text" name="description" value="{{$data->description}}" required> 
</div>   
<div>
   <label>Old Image</label>
   <img height="200" src="/foodimage/{{$data->image}}">
</div>   
<div>
   <label>New Image</label>
   <input type="file" name="image" required>
</div>   
<div>
   
   <input type="submit" value="save"> 
</div>   
   </form>
   
    </div>
</div>
  @include("admin.adminscript")
  </body>
</html>