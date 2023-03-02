<!DOCTYPE html>
<html lang="en">

<head>
     
   @include('normal_users.head')
   
</head>

<body>
   
     <div class="header_section">

     <!-- header section start -->
      @include('normal_users.nav')
      <!-- header section end -->

      <!-- banner section start -->
      @include('normal_users.banner')
      <!-- banner section end -->

    </div>  
  
   <!-- doctor section start -->
        
          @include('normal_users.doctors')
        
   <!-- doctor section end -->


   <!-- client section start -->
        @include('normal_users.client')
   <!-- client section end -->

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