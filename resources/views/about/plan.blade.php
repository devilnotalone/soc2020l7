@extends('layouts2.app2')

@section('content')
<section class="text-gray-700 body-font overflow-hidden">

  <div class="container px-5 py-24 mx-auto">
    <h1 class="title-font sm:text-4xl text-3xl mb-10 font-medium text-tomato-600 text-center ">แผนยุทธศาสตร์ ระยะ 5 ปี</h1>
    <div class="-my-8">
      <div class="py-8 flex flex-wrap md:flex-no-wrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="tracking-widest font-medium title-font text-tomato-800">ยุทธศาสตร์ที่ 1</span>
        </div>
        <div class="md:flex-grow">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">การยกระดับคุณภาพการศึกษา</h2>
          <p class="leading-relaxed">เสริมสร้างประสิทธิภาพในการจัดการศึกษาเพื่อพัฒนาคุณภาพบัณฑิตของสำนักวิชาสังคมศาสตร์ให้เป็นผู้มีความรู้ มีคุณธรรม และมีสมรรถนะบัณฑิตแห่งศตวรรษที่ 21 และมีคุณลักษณะตรงตามความต้องการของผู้ใช้บัณฑิต</p>
        </div>
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
            <span class="tracking-widest font-medium title-font text-tomato-800">ยุทธศาสตร์ที่ 2</span>
          </div>
          <div class="md:flex-grow">
            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">การพัฒนาบุคลากร</h2>
            <p class="leading-relaxed">บุคลากรทุกคนของสำนักวิชาสังคมศาสตร์ได้รับการพัฒนาศักยภาพในการปฏิบัติงานให้มีความเป็นมืออาชีพ มีความมั่นคงก้าวหน้าในอาชีพ</p>
          </div>
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
            <span class="tracking-widest font-medium title-font text-tomato-800">ยุทธศาสตร์ที่ 3</span>
          </div>
          <div class="md:flex-grow">
            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">	การพัฒนางานวิจัยและงานสร้างสรรค์</h2>
            <p class="leading-relaxed">นักวิจัยได้รับการพัฒนา สนับสนุนและส่งเสริมในการสร้างผลงานวิจัยและงานสร้างสรรค์ที่เป็นประโยชน์ต่อการพัฒนาท้องถิ่น และเป็นที่ยอมรับในระดับชาติและนานาชาติ</p>
          </div>
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
            <span class="tracking-widest font-medium title-font text-tomato-800">ยุทธศาสตร์ที่ 4</span>
          </div>
          <div class="md:flex-grow">
            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">การพัฒนาท้องถิ่น</h2>
            <p class="leading-relaxed">คุณภาพชีวิตของประชาชนในท้องถิ่นได้รับการส่งเสริมและพัฒนาให้ดีขึ้นผ่านกระบวนการและวิธีการในหลากหลายรูปแบบ</p>
          </div>
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
            <span class="tracking-widest font-medium title-font text-tomato-800">ยุทธศาสตร์ที่ 5</span>
          </div>
          <div class="md:flex-grow">
            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">การทำนุบำรุงศิลปวัฒนธรรม</h2>
            <p class="leading-relaxed">ศิลปวัฒนธรรมและภูมิปัญญาท้องถิ่นได้รับการอนุรักษ์ ฟื้นฟู สืบสาน และส่งเสริมให้คงความเป็นเอกลักษณ์ของท้องถิ่น ของชาติและเผยแพร่สู่สากล</p>
          </div>
      </div>
      <div class="py-8 flex border-t-2 border-gray-200 flex-wrap md:flex-no-wrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
            <span class="tracking-widest font-medium title-font text-tomato-800">ยุทธศาสตร์ที่ 6</span>
          </div>
          <div class="md:flex-grow">
            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">การพัฒนาระบบบริหารจัดการ</h2>
            <p class="leading-relaxed">สำนักวิชามีการพัฒนาระบบและกลไกการบริหารงานที่เสริมสร้างการเป็นองค์กรแห่งการเรียนรู้ที่มีธรรมาภิบาล และมีการจัดสภาพแวดล้อมที่เน้น การอนุรักษ์พลังงานและใส่ใจสิ่งแวดล้อม</p>
          </div>
      </div>
    </div>
  </div>
</section>
@endsection
