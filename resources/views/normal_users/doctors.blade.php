   <style>
      .btn_text{
         color: aliceblue;
      }
      .btn_text:hover{
         color: aliceblue;
      }
   </style>
   
   <div class="news_section layout_padding doctors_section">
      
      <div class="container">
         <h1 class="health_taital">Our Doctors</h1>
         <p class="health_text">Make an Appoinment & meet your doctor!</p>
         <div class="news_section_2 layout_padding">
            @if(session()->has('message'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     {{session()->get('message')}}
                     <button type="button" class="close close_btn" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
               @endif
            <div class="row">

               @foreach ($doc_list as $list)
                   
               <div class="col-lg-4 col-sm-6">
                  <div class="container mt-4 mb-4 p-3 d-flex justify-content-center"> 
                     <div class="card p-4"> 
                        <div class=" image d-flex flex-column justify-content-center align-items-center"> 
                           
                              <img style="border-radius: 65%;" src="profile_pic/{{ $list->image }}" height="100" width="100" />
                           
                           <span class="name mt-3">{{ $list->name }}</span> 
                           <span class="idd">{{ $list->specialization }}</span> 
                           <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
                              <span class="idd1">{{ $list->description }}</span> 
                              
                           </div> 
                           <div class="d-flex flex-row justify-content-center align-items-center mt-3"> 
                              
                           </div> 
                           <div class=" d-flex mt-2"> 
                              <button type="button" class="btn1 btn-dark "><a href="{{url('book-appointment',$list->id )}} " class="btn_text">Book Appoinment</a></button>
                           </div>
                           
                           <div class="mt-2"> 
                              <form method="post" action="{{url('add-to-mydoctor', $list->id)}}">
                                 @csrf
                                 
                                 <button type="submit" class="btn1 btn-dark">Add to My Doctor </button>
                              </form>
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

