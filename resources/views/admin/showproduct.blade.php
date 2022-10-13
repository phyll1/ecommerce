<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')


  </head>
  <body>

       @include('admin.sidebar')



      <!-- partial -->

          @include('admin.navbar')

        <!-- partial -->



        <div style="padding-bottom:30px"; class="container-fluid page-body-wrapper">

            <div class="container" align="center">

                @if(session()->has('message'))

                <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert">x</button>

                {{ session()->get('message') }}

                </div>

                @endif



                <table>

                 <tr style="background-color:grey;">

                   <td style="padding:20px">Title</td>
                   <td style="padding:20px">Description</td>
                   <td style="padding:20px">Quantity</td>
                   <td style="padding:20px">Price</td>
                   <td style="padding:20px">Name extension</td>
                   <td style="padding:20px">Image</td>
                   <td style="padding:20px">Update</td>
                   <td style="padding:20px">Delete</td>



                 </tr>



                 @foreach($data as $product)

                 <tr style="background-color:black; align-items:center; align:inline-block">

                    <td style="padding:15px">{{ $product->title }}</td>
                    <td style="padding:15px">{{ $product->description }}</td>
                    <td style="padding:15px">{{ $product->quantity}}</td>
                    <td style="padding:15px">{{ $product->price }}</td>
                    <td style="padding:15px">{{ $product->image }}</td>
                    <td>

                        <img height="300" width="300" src="/productimage/{{ $product->image}}">
                    </td>

                    <td>
                        <a class="btn btn-primary" href="{{ URL::to('updateview',$product->id) }}">
                            {!! method_field('UPDATE') !!}
                          <input type="hidden" name="_method" value="UPDATE"> Update</a>
                    </td>
                    <td>


                        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')"
                        href="{{ URL::to('deleteproduct',$product->id) }}"
                          {!! method_field('DELETE') !!}
                          <input type="hidden" name="_method" value="DELETE">
                        Delete</a>
                    </td>

                  </tr>

                  @endforeach


                </table>



            </div>

        </div>


          <!-- partial -->


            @include('admin.script')
  </body>
</html>
