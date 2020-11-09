@extends('layouts2.app2')

@section('content')
<section class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="flex flex-wrap w-full">
        <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">
          <div class="flex relative pb-12">
            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                <svg class="h-6 w-6 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />  <line x1="12" y1="12" x2="20" y2="7.5" />  <line x1="12" y1="12" x2="12" y2="21" />  <line x1="12" y1="12" x2="4" y2="7.5" />  <line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="font-medium title-font text-2xl text-tomato-700 mb-1 tracking-wider">ปรัชญา</h2>
              <p class="leading-relaxed">สถาบันอุดมศึกษาเพื่อการพัฒนาท้องถิ่นสู่สากลอย่างยั่งยืน</p>
            </div>
          </div>
         {{--  <div class="flex relative pb-12">
            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
              <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
            </div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 2</h2>
              <p class="leading-relaxed">Vice migas literally kitsch +1 pok pok. Truffaut hot chicken slow-carb health goth, vape typewriter.</p>
            </div>
          </div> --}}

          <div class="flex relative">
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                <path d="M22 4L12 14.01l-3-3"></path>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="font-medium title-font text-2xl text-tomato-700 mb-1 tracking-wider">วิสัยทัศน์</h2>
              <p class="leading-relaxed">มีความเป็นเลิศในการผลิตบัณฑิต วิจัย บริการวิชาการ
                ทำนุบำรุงศิลปะวัฒนธรรม และสร้างสรรค์นวัตกรรมสังคม
                เพื่อการพัฒนาท้องถิ่นสู่สากล</p>
            </div>
          </div>
        </div>
        <img class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12" src="https://dummyimage.com/1200x500" alt="step">
      </div>
      <img class="object-cover object-center rounded-lg md:mt-10 mt-12" src="https://dummyimage.com/1200x500" alt="step">
    </div>
  </section>
@endsection
