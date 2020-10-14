@extends('layouts2.app')
@section('script')
<script>
var cont=0;
function loopSlider(){
  var xx= setInterval(function(){
        switch(cont)
        {
        case 0:{
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
        cont=1;

        break;
        }
        case 1:
        {

            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");

        cont=0;

        break;
        }


        }},8000);

}

function reinitLoop(time){
clearInterval(xx);
setTimeout(loopSlider(),time);
}



function sliderButton1(){

    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-purple-800");
    $("#sButton1").addClass("bg-purple-800");
    reinitLoop(4000);
    cont=0

    }

    function sliderButton2(){
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-purple-800");
    $("#sButton2").addClass("bg-purple-800");
    reinitLoop(4000);
    cont=1

    }

    $(window).ready(function(){
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-purple-800");


        loopSlider();

    });

  </script>
@endsection
@section('content')
    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap w-full mb-20">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-mediumseagreen-600">หลักสูตร สำนักวิชาสังคมศาสตร์</h1>
              <div class="h-1 w-20 bg-mediumseagreen-400 rounded"></div>
            </div>
            <p class="lg:w-1/2 w-full leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
          </div>
          <div class="flex flex-wrap -m-4">
              @for ($i = 0; $i < 4; $i++)
            <div class="xl:w-1/4 md:w-1/2 p-4">
              <div class="bg-gray-200 p-6">
                <img class="h-40 w-full shadow object-cover object-center mb-6 rounded" src="https://dummyimage.com/720x400" alt="content">
                <h3 class="tracking-widest text-red-500 text-xs font-medium title-font">SUBTITLE</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Chichen Itza</h2>
                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
              </div>
            </div>
            @endfor
          </div>
        </div>
      </section>

      <section class="px-10 bg-gradient-to-tr from-gray-600 via-gray-300 to-gray-100 text-gray-800 body-font">
        <div class="container px-5 py-20 mx-auto flex flex-wrap">
          <div class="flex flex-col flex-wrap lg:py-6 px-4 -mb-10 lg:w-1/3 lg:pl-12 lg:text-left text-center">
            <div class="flex flex-col mb-10 lg:items-start items-center">
              <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-orange-100 text-orange-500 mb-5">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                  <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
              </div>
              <div class="flex-grow">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3">วิสัยทัศน์</h2>
                <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                <a class="mt-3 text-orange-500 inline-flex items-center">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center">
              <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-orange-100 text-orange-500 mb-5">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                  <circle cx="6" cy="6" r="3"></circle>
                  <circle cx="6" cy="18" r="3"></circle>
                  <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
              </div>
              <div class="flex-grow">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3">The Catalyzer</h2>
                <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                <a class="mt-3 text-orange-500 inline-flex items-center">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center">
              <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-orange-100 text-orange-500 mb-5">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
              <div class="flex-grow">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Neptune</h2>
                <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                <a class="mt-3 text-orange-500 inline-flex items-center">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="flex flex-col flex-wrap px-4 lg:py-6 -mb-10 lg:w-1/3 lg:pl-12 lg:text-left text-center">
            <div class="flex flex-col mb-10 lg:items-start items-center">
              <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-orange-100 text-orange-500 mb-5">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                  <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
              </div>
              <div class="flex-grow">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Shooting Stars</h2>
                <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                <a class="mt-3 text-orange-500 inline-flex items-center">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center">
              <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-orange-100 text-orange-500 mb-5">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                  <circle cx="6" cy="6" r="3"></circle>
                  <circle cx="6" cy="18" r="3"></circle>
                  <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
              </div>
              <div class="flex-grow">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3">The Catalyzer</h2>
                <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                <a class="mt-3 text-orange-500 inline-flex items-center">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
            <div class="flex flex-col mb-10 lg:items-start items-center">
              <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-orange-100 text-orange-500 mb-5">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
              <div class="flex-grow">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Neptune</h2>
                <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
                <a class="mt-3 text-orange-500 inline-flex items-center">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="lg:w-1/3 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
            <img alt="feature" class="object-cover object-center h-full w-full" src="https://dummyimage.com/460x500">
          </div>
        </div>
      </section>

     {{--  //ข่าวประชาสัมพันธ์ --}}
      <section class="container px-5 mt-10 mx-auto">
        <div class="flex mb-4 px-4 lg:px-0 items-center justify-between">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
            <h2 class="font-medium text-3xl text-tomato-500">ข่าวประชาสัมพันธ์</h2>
            <div class="h-1 w-20 bg-tomato-400 rounded"></div>
            </div>
            <a class="bg-gary-200 hover:bg-orange2-200 text-orange2-800 px-3 py-1 rounded cursor-pointer">
              ข่าวทั้งหมด
            </a>
          </div>
     <!-- featured section -->
      <div class="flex flex-wrap md:flex-no-wrap space-x-0 md:space-x-6 mb-16">
        <!-- main post -->
        <div class="mb-4 lg:mb-0  p-4 lg:p-0 w-full md:w-4/7 relative rounded block">
          <img src="https://images.unsplash.com/photo-1427751840561-9852520f8ce8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="rounded-md object-cover w-full h-64">
          <span class="text-green-700 text-sm hidden md:block mt-4"> Technology </span>
          <h1 class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight">
            Ignorant branched humanity led now marianne too.
          </h1>
          <p class="text-gray-600 mb-4">
            Necessary ye contented newspaper zealously breakfast he prevailed. Melancholy middletons yet understood
            decisively boy law she. Answer him easily are its barton little. Oh no though mother be things simple
            itself.
            Oh be me, sure wise sons, no. Piqued ye of am spirit regret. Stimulated discretion impossible admiration in particular conviction up.
          </p>
          <a href="./blog.html" class="inline-block px-6 py-3 mt-2 rounded-md bg-green-700 text-gray-100">
            Read more
          </a>
        </div>

        <!-- sub-main posts -->
        <div class="w-full md:w-4/7">
        @for ($i = 0; $i < 4; $i++)
          <!-- post 1 -->
          <div class="rounded w-full flex flex-col md:flex-row mb-10">
            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="block md:hidden lg:block rounded-md h-64 md:h-32 m-4 md:m-0" />
            <div class="bg-white rounded px-4">
              <span class="text-green-700 text-sm hidden md:block"> Gadgets </span>
              <div class="md:mt-0 text-gray-800 font-semibold text-xl mb-2">
                At every tiled on ye defer do. No attention suspected oh difficult.
              </div>
              <p class="block md:hidden p-2 pl-0 pt-1 text-sm text-gray-600">
                Wonder matter now can estate esteem assure fat roused. Am performed on existence as discourse is. Pleasure friendly at marriage blessing or
              </p>
            </div>
          </div>
          @endfor

        </div>

      </div>
      <!-- end featured section -->
      </section>

@endsection
