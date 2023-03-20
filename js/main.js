
//▼スクロールトップボタン
// 1. id js-scroll-top を取得
// const PageTopBtn = document.getElementById('js-scroll-top');
// // 2. 1にクリックイベントを設定
// PageTopBtn.addEventListener('click', () =>{
//   //クリックしたらTOP 0 の位置に スムーススクロール する
//   window.scrollTo({
//     top: 0,
//     behavior: 'smooth'
//   });
// });
// window.onload=function(){
//   let Animation = function() {
//   //アイコン位置取得
//   let pageTop =  document.getElementById('page_top');

//   //要素の位置座標を取得
//   let rect = pageTop.getBoundingClientRect();
//   //topからの距離
//   let scrollTop = rect.top + window.pageYOffset;

//   if(scrollTop > 420){
//     pageTop.classList.add('show');
//    }  else {
//     pageTop.classList.remove('show');
//    }
//  }
//     window.addEventListener('scroll', Animation);
// }

jQuery(function() {
  var appear = false;
  var pagetop = $('#page_top');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {  //100pxスクロールしたら
      if (appear == false) {
        appear = true;
        pagetop.stop().animate({
          'bottom': 'px' //下から50pxの位置に
        }, 300); //0.3秒かけて現れる
      }
    } else {
      if (appear) {
        appear = false;
        pagetop.stop().animate({
          'bottom': '-70px' //下から-50pxの位置に
        }, 300); //0.3秒かけて隠れる
      }
    }
  });
  pagetop.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500); //0.5秒かけてトップへ戻る
    return false;
  });
});



//▼スムーススクロール
// 1. すべてのhref="#"のaタグを取得
const smoothScrollTrigger = document.querySelectorAll('a[href^="#"]');
// 2. 1のaタグにそれぞれクリックイベントを設定
for (let i = 0; i < smoothScrollTrigger.length; i++) {
    smoothScrollTrigger[i].addEventListener('click', (e) => {
        
        // 3. ターゲットの位置を取得
        e.preventDefault();
        // 各a要素のリンク先を取得
        let href = smoothScrollTrigger[i].getAttribute('href');
        // リンク先の要素（コンテンツ）を取得
        let targetElement = document.getElementById(href.replace('#', ''));
        // ブラウザからの高さを取得
        const rect = targetElement.getBoundingClientRect().top;
        // 現在のスクロール量を取得
        const offset = window.pageYOffset;
        // 固定ヘッダー分の高さ
        const gap = 80;
        //最終的な位置を割り出す
        const target = rect + offset - gap; 

        // 4. スムースにスクロール
        window.scrollTo({
            top: target,
            behavior: 'smooth',
        });
    });
}

$(function() {

  //POP UP
  $('.show_pop').on('click',function(){
    $('.show_popcontent').addClass('show').fadeIn();
  });
  $('#close').on('click',function(){
    $('.show_popcontent').removeClass('show').fadeOut();
  });
  $("#close").click(function () {
    videoControl("pauseVideo");
    function videoControl(action) {
      var $playerWindow = $("#video-iframe")[0].contentWindow;
      $playerWindow.postMessage(
        '{"event":"command","func":"' + action + '","args":""}',
        "*"
      );
    }
  });
  //sp menu
  $('.menu-btn').on('click', function(){
  $('.menu').toggleClass('is-active');
  $('.menu-btn').toggleClass('close');
  });
  $('.sp-nav a').on('click', function(){
  $('.menu').toggleClass('is-active');
  $('.menu-btn').toggleClass('close');
  });
  //slick

  

$('.slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  autoplay: true,
  arrows:false,
});
//blog tab
  $('.cat-nav li').on('click', function(){
  $('.cat-nav li').removeClass('nav_current');
  $(this).addClass('nav_current');

  $('.cat-content').removeClass('con_current');
  // クリックしたタブが何番目のタブ(インデックス番号)かを取得
  const index = $(this).index();
  // cat-contentの中でthisと同じインデックス番号をもつものに.con_currentを付与
  $('.cat-content').eq(index).addClass('con_current');
  });
  
});