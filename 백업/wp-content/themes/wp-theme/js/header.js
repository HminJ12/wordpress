$(function(){
  //header motion
  var reqID
  function fn(){
    if(scrT >= 35 ){
      $(`header`).addClass(`active`)
    }else {
      $(`header`).removeClass(`active`)
    }
  }

  fn()
  $(window).scroll(function(){
    reqID = requestAnimationFrame(fn)
  }).resize(function(){
    reqID = requestAnimationFrame(fn)
  })

  //gnb-lg
  $(`.gnb-lg>div>ul>li>a`).click(function(e){
    e.preventDefault() //a 앵커의 링크 기능을 막는다 
  })
  $(`.gnb-lg>div>ul>li`).mouseenter(function(){
    $(this).children(`ul`).stop().slideDown()
  }).mouseleave(function(){
    $(this).children(`ul`).stop().slideUp()
  })

  //gnb-sm
  $(`.mbtn-open`).click(function(){
    $(`.gnb-sm`).fadeIn(500, function(){
      $(`.gnb-sm video`)[0].play()
    }) //fadeIn이 완료되면 실행한다
  
    /* 바닐라에서 하는 방법
    setTimeout(function(){
      document.querySelector(`.gnb-sm video`).play() 
    }, 500); */

    $('body').append(`
    <script src="/wp-content/themes/wp-theme/js/app_particle_star.js"></script>
    `)
  })

  $(`.mbtn-close`).click(function(){
    $(`.gnb-sm`).fadeOut(500)
    $(`.gnb-sm>div>ul>li>ul`).stop().slideUp()
    $(`.gnb-sm>div>ul>li>a`).removeClass(`active`)
    $(`body script:last-child`).remove()
  })

  $(`.gnb-sm>div>ul>li>a`).click(function(e){
    e.preventDefault() //a 앵커의 링크 기능을 막는다
    $(`.gnb-sm>div>ul>li>ul`).stop().slideUp()
    $(`.gnb-sm>div>ul>li>a`).not($(this)).removeClass(`active`)
    $(this).toggleClass(`active`)
    $(this).siblings(`ul`).stop().slideToggle()
  }) /* 다시 공부... */






})