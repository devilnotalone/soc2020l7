@extends('layouts2.app2')

@section('content')
<section class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-col">
      <div class="lg:w-5/6 mx-auto">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1200x500">
        </div>
        <div class="flex flex-col sm:flex-row mt-10">
          <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
            <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <div class="flex flex-col items-center text-center justify-center">
              <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">ตราประจำสำนักวิชาสังคมศาสตร์</h2>
              <div class="w-12 h-1 bg-orange-500 rounded mt-2 mb-4"></div>
{{--               <p class="text-base text-gray-600">Raclette knausgaard hella meggs normcore williamsburg enamel pin sartorial venmo tbh hot chicken gentrify portland.</p>
 --}}            </div>
          </div>
          <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-300 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
            <p class="leading-relaxed text-justify text-lg mb-4">สำนักวิชาสังคมศาสตร์ ได้ก่อตั้งมาตั้งแต่ปี พ.ศ.2546 (เดิมเป็นคณะสังคมศาสตร์) ต่อมามหาวิทยาลัยราชภัฏเชียงราย ได้ปรับเปลี่ยนจากคณะสังคมศาสตร์เป็นสำนักวิชาสังคมศาสตร์ เมื่อวันที่ 1 มิถุนายน 2554 โดยเป็นหน่วยงานที่อยู่ภายใต้โครงสร้างภายในของมหาวิทยาลัย มีหน้าที่และการบริหารจัดการศึกษาเทียบเท่ากับหน่วยงานที่อยู่ในโครงสร้างตามกฎหมายของมหาวิทยาลัย ซึ่งปัจจุบันสำนักวิชาสังคมศาสตร์ ได้พัฒนาให้มีการเรียนการสอนหลักสูตรต่าง ๆ ทั้งระดับปริญญาตรีและบัณฑิตศึกษา จำนวน 6 หลักสูตร ประกอบด้วย</p>

          </div>
        </div>
      <div class="container py-10 mx-auto">
        <div class="flex flex-wrap -m-2">
          <div class="p-2 lg:w-1/2 md:w-1/2 w-full">
            <div class="h-full flex items-center border-gray-300 bg-gray-400 border p-4 rounded-lg">
              <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
              <div class="flex-grow">
                <h2 class="text-gray-900 title-font font-medium">บัณฑิตศึกษา (ปริญญาเอก)</h2>
                <p class="text-gray-700">หลักสูตรยุทธศาสตร์การพัฒนาภูมิภาค</p>
              </div>
            </div>
          </div>
          <div class="p-2 lg:w-1/2 md:w-1/2 w-full">
            <div class="h-full flex items-center border-tomato-300 border bg-tomato-400 p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/90x90">
                <div class="flex-grow">
                <h2 class="text-gray-900 title-font font-medium">ศิลปศาสตรบัณฑิต (ปริญญาตรี)</h2>
                <p class="text-gray-700">หลักสูตร การพัฒนาสังคม</p>
              </div>
            </div>
          </div>
          <div class="p-2 lg:w-1/2 md:w-1/2 w-full">
            <div class="h-full flex items-center border-tomato-300 border bg-tomato-400 p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/90x90">
                <div class="flex-grow">
                <h2 class="text-gray-900 title-font font-medium">ศิลปศาสตรบัณฑิต (ปริญญาตรี)</h2>
                <p class="text-gray-700">หลักสูตร คหกรรมศษสตร์ประยุกต์</p>
              </div>
            </div>
          </div>
          <div class="p-2 lg:w-1/2 md:w-1/2 w-full">
            <div class="h-full flex items-center border-tomato-300 border bg-tomato-400 p-4 rounded-lg">
              <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/90x90">
              <div class="flex-grow">
                <h2 class="text-gray-900 title-font font-medium">ศิลปศาสตรบัณฑิต (ปริญญาตรี)</h2>
                <p class="text-gray-700">หลักสูตร สังคมวิทยาและมานุษยวิทยา</p>
              </div>
            </div>
          </div>
          <div class="p-2 lg:w-1/2 md:w-1/2 w-full">
            <div class="h-full flex items-center border-yellow-300 border bg-yellow-400 p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/98x98">
                <div class="flex-grow">
                <h2 class="text-gray-900 title-font font-medium">วิทยาศาสตรบัณฑิต (ปริญญาตรี)</h2>
                <p class="text-gray-700">หลักสูตร จิตวิทยาสังคม</p>
              </div>
            </div>
          </div>
          <div class="p-2 lg:w-1/2 md:w-1/2 w-full">
            <div class="h-full flex items-center border-yellow-300 border bg-yellow-400 p-4 rounded-lg">
              <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/98x98">
              <div class="flex-grow">
                <h2 class="text-gray-900 title-font font-medium">วิทยาศาสตรบัณฑิต (ปริญญาตรี)</h2>
                <p class="text-gray-700">หลักสูตร ระบบสารสนเทศภูมิศาสตร์</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
