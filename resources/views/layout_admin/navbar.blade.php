<!--start header -->
<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>
            <div class="top-menu ms-auto">
            </div>
            {{-- @foreach ($data_user as $user) --}}
              <div class="user-box dropdown">
                <img src="{{ asset('assets/images/avatars/avatar-2.png') }}" class="user-img" alt="user avatar">
                
                <div class="user-info ps-3">
                  <p class="user-name mb-0">gatau</p>
                  <p class="designattion mb-0">Web Designer</p>
                </div>
              </div>
            {{-- @endforeach --}}
        </nav>
    </div>
</header>
<!--end header -->