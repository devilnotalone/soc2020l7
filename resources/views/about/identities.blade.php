@extends('layouts2.app2')

@section('content')
<section class="text-gray-700 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-tomato-600">อัตลักษณ์บัณฑิต
        </h1>
        <p class="mb-8 leading-relaxed">มีคุณธรรม ความรู้
            ความคิดสร้างสรรค์ ทักษะทางสังคม
            เป็นที่ยอมรับในศตวรรษที่ 21</p>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
      </div>
    </div>
  </section>
<section class="text-gray-700 body-font">
    <div class="container mx-auto flex px-5 py-4 items-center justify-center flex-col">
      <div class="lg:w-2/3 w-full">
        <h1 class="title-font sm:text-2xl text-3xl mb-4 font-medium text-tomato-600 text-center ">คุณลักษณะบัณฑิตที่พึงประสงค์</h1>
            <ol class="list-decimal mb-8 font-medium leading-relaxed">
                <li>ความเป็นผู้นำที่มีคุณธรรม จริยธรรม</li>
                <li>มีความรู้ ใฝ่รู้ และทักษะทางปัญญา</li>
                <li>มีทักษะความสัมพันธ์ระหว่างบุคคล ความรับผิดชอบและจิตสาธารณะ</li>
                <li>มีทักษะการวิเคราะห์เชิงตัวเลข การสื่อสาร และการใช้เทคโนโลยีสารสนเทศ</li>
                <li>เป็นบัณฑิตที่เป็นนักปฏิบัติการที่มีคุณภาพและสามารถสร้างงานได้ และมีจรรยาบรรณในวิชาชีพ</li>
            </ol>
            <h1 class="title-font sm:text-2xl text-3xl mb-4 font-medium text-tomato-600 text-center ">พฤติกรรมด้านคุณธรรมจริยธรรมของนักศึกษา</h1>
            <ol class="list-decimal mb-8 font-medium leading-relaxed">
               <li>ตระหนักถึงความรู้และคุณค่าของคุณธรรมจริยธรรม</li>
               <li>เป็นผู้มีความอ่อนน้อมถ่อมตน เคารพสิทธิและรับฟังความคิดเห็นของผู้อื่น</li>
               <li>เคารพกฎระเบียบข้อบังคับของมหาวิทยาลัย</li>
               <li>เป็นผู้มีระเบียบวินัยจิตใจสำนึกดี เอื้อเฟื้อเผื่อแผ่เห็นแก่ประโยชน์ส่วนรวม และมีจิตสาธารณะ</li>
               <li>เป็นผู้มุ่งมั่นใฝ่ศึกษาหาความรู้อยู่เสมอ</li>
               <li>ภูมิใจในสถาบันท้องถิ่นมีจิตสำนึกอนุรักษ์ศิลปวัฒนธรรม สิ่งแวดล้อม และภูมิปัญญาท้องถิ่น</li>
            </ol>
    </div>
  </section>
@endsection
