<!DOCTYPE html>
<html lang="en">

<head>
   @include('normal_users.head')

   <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .center {
            
            margin: auto;
            width: 50%;
        }
        .table{
            margin-top: 100px;
        }
        .td_des {
            background-color: #e8eded;
        }
        .font-size {
            font-size: 22px;
            /* font-family: 'Poppins', sans-serif; */
        }
        .appointment_table{
            padding-top: 120px; 
            padding-bottom: 50px;
        }
    </style>
</head>

<body>
   
   <div class="header_section">
    <!-- header section start -->
      @include('normal_users.nav')
      <!-- header section end -->
    </div>  
   
      
   
   <div class="appointment_table">
    <div class="center mt-16 mb-44">
        <table class="table table-hover">
            <thead>
                <tr>

                    <th>Drug ID</th>
                    <th>Drug Name</th>
                    <th>Drug Price</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($drugs as $data)
                        <tr>
                          <td>{{$data->id}}</td>
                          <td>{{$data->name}}</td>
                          <td>Rs. {{$data->price}}</td>
                        </tr>
                @endforeach
            </tbody>
        </table>

    </div>
   </div>


   <!-- footer section start -->
        @include('normal_users.footer')
   <!-- footer section end -->

   <!-- copyright section start -->
        @include('normal_users.copyright')
   <!-- copyright section end -->
   
   <!-- Javascript files-->
        @include('normal_users.load_javascript')
</body>

</html>