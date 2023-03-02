<!DOCTYPE html>
<html lang="en">

<head>
   @include('normal_users.head')

   <style>
      .btn_text{
         color: aliceblue;
      }
      .btn_text:hover{
         color: aliceblue;
      }
   </style>
   
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      @include('normal_users.nav')
      <!-- header section end -->

      
    </div>  
   
      
   <div class="news_section layout_padding doctors_section">
      <div class="container">
         <h1 class="health_taital">Your Doctors</h1>
         <p class="health_text">Make an Appoinment & meet your doctor!</p>
         <div class="news_section_2 layout_padding">
            <div class="row">

               
            @foreach ($my_doctor_list as $my_doc_list )
                <div class="col-lg-4 col-sm-6">
                  <div class="container mt-4 mb-4 p-3 d-flex justify-content-center"> 
                     <div class="card p-4"> 
                        <div class=" image d-flex flex-column justify-content-center align-items-center"> 
                           
                              <img style="border-radius: 65%;" src="profile_pic/{{ $my_doc_list->image }}" height="100" width="100" />
                           
                           <span class="name mt-3">{{ $my_doc_list->doc_name }}</span> 
                           <span class="idd">{{ $my_doc_list->specielization }}</span> 
                           <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
                              <span class="idd1">{{ $my_doc_list->description }}</span> 
                              
                           </div> 
                           <div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
                              
                           </div> 
                           

                           <div class=" d-flex mt-2"> 
                              <button type="button" class="btn1 btn-dark "><a href="{{url('book-appointment',$my_doc_list->doc_id )}} " class="btn_text">Book Appoinment</a></button>
                           </div>

                           <div class=" d-flex mt-2"> 
                              <button type="button" class="btn1 btn-dark "><a href="{{url('remove-from-list',$my_doc_list->id)}} " class="btn_text">Remove</a></button>
                           </div>
                           
                           
                        </div> 
                     </div>
                  </div>
               </div>
            @endforeach       
                
            </div> 
   
         </div>
         
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