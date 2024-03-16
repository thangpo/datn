
<!DOCTYPE html> 
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu  | Code4education </title>
    <link rel="stylesheet" href="{{ asset('css/menuadm.css') }}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
   <div class="sidebar">
     <div class="logo_content">
       <div class="logo">
         <div class="logo_name">Trang Quan Lý</div>
       </div>
       <i class='bx bx-menu' id="btn"></i>
     </div>
     <ul class="nav_list">
       <li>
          <i class='bx bx-search'></i>
          <input type="text" placeholder="Search...">
          <span class="tooltip">Search</span>
       </li>

       <li>
        <a href="{{ route('banner.index') }}">
         <i class='bx bx-grid-alt'></i>
         <span class="links_name">Quản lý website</span>
        </a>
        <span class="tooltip">Quản lý website</span>
      </li>
      
       <li>
         <a href="{{ route('cauhinh.index') }}">
         <i class='bx bxs-cog'></i>
          <span class="links_name">Quản lý cấu hình</span>
         </a>
         <span class="tooltip">Quản lý cấu hình</span>
       </li>
       <li>
        <a href="{{ route('nhomnhac.index') }}">
        <i class='bx bx-group' ></i>
         <span class="links_name">Quản lý nhóm nhạc</span>
        </a>
        <span class="tooltip">Quản lý nhóm nhạc</span>
      </li>
      <li>
        <a href="{{ route('idol.index') }}">
        <i class='bx bxs-contact'></i>
         <span class="links_name">Quản lý Idol</span>
        </a>
        <span class="tooltip">Quản lý Idol</span>
      </li>
      <li>
        <a href="{{ route('baihat.index') }}">
        <i class='bx bx-music'></i>
         <span class="links_name">Quản lý bài hát</span>
        </a>
        <span class="tooltip">Quản lý bài hát</span>
      </li>
      <li>
        <a href="{{route('lichtrinh.index')}}">
        <i class='bx bx-paste'></i>
         <span class="links_name">Quản lý lịch trình</span>
        </a>
        <span class="tooltip">Quản lý lịch trình</span>
      </li>
      <li>
        <a href="{{route('nhac.index')}}">
         <i class='bx bx-cog'></i>
         <span class="links_name">Quản lý nhạc</span>
        </a>
        <span class="tooltip">Quản lý nhạc</span>
      </li>
      <li>
        <a href="{{route('chuyenh.index')}}">
        <i class='bx bx-home'></i>
         <span class="links_name">view</span>
        </a>
        <span class="tooltip">view</span>
      </li>
     </ul>
     <div class="content1">
       <div class="user">
         <div class="user_details">
           <img decoding="async" src="https://document-export.canva.com/kWSac/DAF1cPkWSac/10/thumbnail/0001.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAQYCGKMUHWDTJW6UD%2F20231215%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20231215T181953Z&X-Amz-Expires=45183&X-Amz-Signature=9b9de5a6065e48267f7e2e06331f9b52a9a6cce7fc823bfb444bf99389d8ecb0&X-Amz-SignedHeaders=host&response-expires=Sat%2C%2016%20Dec%202023%2006%3A52%3A56%20GMT" alt="">
           <div class="name_job">
             <div class="name">TG SHOP</div>
             <div class="job">ADMIN</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out"></i>
       </div>
     </div>
   </div>
   <div class="home_content">
    @yield('content')
   </div>

<script>
    let btn = document.querySelector("#btn");
let sidebar = document.querySelector(".sidebar");
let searchBtn = document.querySelector(".bx-search");

btn.onclick = function(){
    sidebar.classList.toggle("active");
}
searchBtn.onclick = function(){
    sidebar.classList.toggle("active");
}


</script>
</body>
</html>

