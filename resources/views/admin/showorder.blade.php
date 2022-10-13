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
        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center">

                <table>

                    <tr style="background-color: gray;">

                        <td style="padding:20px; color:white;">Customer name</td>
                        <td style="padding:20px; color:white;">Phone</td>
                        <td style="padding:20px; color:white;">Address</td>
                        <td style="padding:20px; color:white;">Product title</td>
                        <td style="padding:20px; color:white;">Price</td>
                        <td style="padding:20px; color:white;">Quantity</td>
                        <td style="padding:20px; color:white;">Status</td>
                        <td style="padding:20px; color:white;">Action</td>

                    </tr>

                    @foreach($order as $orders)

                    <tr align="center" style="background-color:black;">


                        <td style="padding:20px;">{{ $orders->name }}</td>
                        <td style="padding:20px;">{{ $orders->phone }}</td>
                        <td style="padding:20px;">{{ $orders->address }}</td>
                        <td style="padding:20px;">{{ $orders->product_name }}</td>
                        <td style="padding:20px;">{{ $orders->price }}</td>
                        <td style="padding:20px;">{{ $orders->quantity }}</td>
                        <td style="padding:20px;">{{ $orders->status }}</td>
                        <td style="padding:20px;">
                            <a class="btn btn-success" href="{{ URL::to('updatestatus',$orders->id) }}">Deliver

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
