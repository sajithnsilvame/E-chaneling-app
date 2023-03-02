
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="/public">
   @include('normal_users.head')
   <style>
    .appointment_btn{
        margin-top: 20px;
        margin-left: 35%;
    }
    .news_section_2{
        margin-top: 0.5px;
    }
   </style>
</head>
<body>
   <div class="header_section">
      @include('normal_users.nav')
    </div> 

   <div class="contact_section layout_padding">
      <div class="container">
         <h1 class="contact_taital">What we do</h1>
         <div class="news_section_2 ">
            <div class="row">
               <div class="col-md-6">
                  <div class="icon_main">
                     <div class="icon_7"><img src="images/icon-7.png"></div>
                     <h4 class="diabetes_text">Diabetes and obesity Counselling </h4>
                  </div>
                  <div class="icon_main">
                     <div class="icon_7"><img src="images/icon-5.png"></div>
                     <h4 class="diabetes_text">Obstetrics and Gynsecology</h4>
                  </div>
                  <div class="icon_main">
                     <div class="icon_7"><img src="images/icon-6.png"></div>
                     <h4 class="diabetes_text">Surgical and medical Oncology</h4>
                  </div>
               </div>
               <div class="col-md-6">

               @if(session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                              {{session()->get('message')}}
                              <button type="button" class="close close_btn" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
               @endif

                  <div class="contact_box">
                     <h1 class="book_text">Book Appoinment</h1>
                     <form method="POST" action="{{ url('confirm-appointment',$doc->id) }}">
                        @csrf
                     <input type="text" class="Email_text" placeholder="Name" name="name" required>
                     <input type="text" class="Email_text" placeholder="Age" name="age" required>
                     <input type="text" class="Email_text" placeholder="Mobile Number"maxlength="10" name="contact" required>
                     <input type="date" class="Email_text" placeholder="Date" name="date">
                     {{-- <input type="text" class="Email_text" placeholder="{{$doc->name}}" name="doc_name" disabled> --}}
                     
                     <button type="submit" class="btn1 btn-dark appointment_btn">Confirm</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   @include('normal_users.footer')

   @include('normal_users.load_javascript')
</body>
