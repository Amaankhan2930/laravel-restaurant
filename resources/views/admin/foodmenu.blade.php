<x-app-layout>

</x-app-layout>

  <!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
    <style>
.container{
padding:50px;
    margin:auto;
    display: absolute;  
}
        input{
          margin:10px;
        } 
        </style>
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.navbar")
    <div class="container" >

    <form action="{{url('uploadfood')}}" method="post" enctype="multipart/form-data">
        @csrf


     <div>
        <label>Title</label>
        <input style="color:black;" type="text" name="title" placeholder="Write a title" required> 
     </div>   

     <div>
    <label>Price</label>
    <input style="color:black;" type="num" name="price" placeholder="Write a price" required> 
 </div>   

 <div>
   <label>Quantity</label>
   <input style="color:black;" type="num" name="quantity" placeholder="Write a quantity" required> 
</div>   
 <div>
    <label>Image</label>
    <input type="file" name="image" required> 
 </div>   
 <div>

    <label>Description</label>
    <input style="color:black;" type="text" name="description" placeholder="Write a description" required> 
 </div>   
 <div>
    
    <input type="submit" value="save"> 
 </div>   
    </form>
    
<div class="cont">

<table  bgcolor="black">
    <tr>
        <th style="padding:30px">Food name</th>
        <th style="padding:30px">Price</th>
        <th style="padding:30px">Quantity</th>
        <th style="padding:30px">Description</th>

        <th style="padding:30px">Image</th>
        <th style="padding:30px">Action</th>
        <th style="padding:30px">Action</th>
        
    </tr>
@foreach($data as $data)
    <tr align="center">
        <td>{{$data->title}}</td>
        <td>{{$data->price}}</td>
        <td>{{$data->quantity}}</td>
        <td>{{$data->description}}</td>
        <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
        <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
        <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
    </tr>
    @endforeach
</table>
    </div>

    </div>
</div>
  @include("admin.adminscript")
  </body>
</html>