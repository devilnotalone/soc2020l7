<header class="text-gray-700 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-red-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">สำนักวิชาสังคมศาสตร์</span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-gray-900" href="{!! url('/') !!}">หน้าแรก</a>
        <a class="mr-5 hover:text-gray-900" href="{!! url('about') !!}">เกี่ยวกับ</a>
        <a class="mr-5 hover:text-gray-900" href="{!! url('about') !!}">หลักสูตร</a>
        <a class="mr-5 hover:text-gray-900" href="{!! url('about') !!}">บุคลากร</a>
        <a class="mr-5 hover:text-gray-900" href="{!! url('about') !!}">งานวิจัย</a>
        <a class="mr-5 hover:text-gray-900" href="{!! url('about') !!}">งานวิชาการ</a>

        @if (Route::has('login'))
          @auth
              <a class="mr-5 hover:text-gray-900" href="{{ url('/home') }}">Home</a>
          @else
              <a class="mr-5 hover:text-gray-900" href="{{ route('login') }}">เข้าระบบ</a>

              {{-- @if (Route::has('register'))
                  <a class="mr-5 hover:text-gray-900" href="{{ route('register') }}">สมัครสมาชิก</a>
              @endif --}}
          @endauth
  @endif

      </nav>
     {{--  <button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Button
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button> --}}

    </div>
  </header>
