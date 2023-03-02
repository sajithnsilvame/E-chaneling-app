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

                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Date</th>
                    <th scope="col">Cancel</th>
                    <th scope="col">Download</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($appointment_data as $data)
                    <tr>
                    <td class="">{{$data->id}}</td>
                    <td class="">{{$data->name}}</td>
                    <td class="">{{$data->age}}</td>
                    <td class="">{{$data->contact}}</td>
                    <td class="">{{$data->date}}</td>
                    <td class="">
                        <a onclick="return confirm('Are you sure?')" href="{{url('delete-appointment', $data->id)}}" class="btn btn-danger">cancel</a>
                    </td>
                    <td>
                        <a href="{{url('download-precription', $data->id)}}" class="btn btn-primary">download</a>
                    </td>
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