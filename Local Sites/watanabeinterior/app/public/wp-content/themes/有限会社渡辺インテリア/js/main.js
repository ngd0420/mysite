"use strict";

$(function(){
  // スライダー
  $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      dots: true,
      responsive: [
          {
          breakpoint: 1024,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 2
              }
          },
          {
          breakpoint: 599,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
              }
          }
      ]
  });
});

$(function() {
  // スムーススクロール
  $('a[href^="#"]').click(function(){
      var speed = 300;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
  });3
});

// ハンバーガー
$(function() {
    $('#toggle').on('click', function() {
      $('body').toggleClass('is-open');
      $('#main').toggleClass('overlay');
    });
    $(document).on('click','.overlay', function() {
      $('body').removeClass('is-open');
      $('#main').removeClass('overlay');
    });
  });

  var now_post_num = 9; // 現在表示されている数
  var get_post_num = 9;// 一度に取得する数
  $(function() {
    $(document).on('click', '.contact-btn', function() {
 
      var ajax_url = '<?php echo bloginfo("template_url");?>/page-readmore.php';
 
      $.ajax({
        type: 'post',
        url: ajax_url,
        data: {
            'now_post_num': now_post_num,
            'get_post_num': get_post_num,
        },
        dataType: 'html',
      })
      .done(function(data){
        now_post_num = now_post_num + get_post_num;
        $("#more_disp").remove();
        $("#content").append(data);
      })
      .fail(function(){ // ajax通信成失敗の処理
        alert('エラーが発生しました');
      })
      return false;
    });
  });

const targetElement = document.querySelectorAll(".animationTarget");
console.log("画面の高さ", window.innerHeight)
document.addEventListener("scroll", function(){
  for(let i = 0; i < targetElement.length; i++){
    const getElementDistance = targetElement[i].getBoundingClientRect().top + targetElement[i].clientHeight * .6
    if(window.innerHeight > getElementDistance){
      targetElement[i].classList.add("show");
    }
    //if(window.innerHeight)
  }
})
