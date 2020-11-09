$(document).ready(function () {

// GLOBAL MODALS

$(".creator-button-modal").on('click', function () {
  $("#modal__creator").addClass("active")
  $(".modal__creator_content").addClass("active")
})

$("#modal__close_creator").on('click', function () {
  $("#modal__creator").removeClass("active")
  $(".modal__creator_content").removeClass("active")
})

$(".modal__outside_click").on('click', function () {
  $("#modal__creator").removeClass("active")
  $(".modal__creator_content").removeClass("active")
})

// Contact Modals

$(".contact-button-modal").on('click', function () {
  $("#modal__contact").addClass("active")
  $(".modal__contact_content").addClass("active")
})

$("#modal__close_contact").on('click', function () {
  $("#modal__contact").removeClass("active")
  $(".modal__contact_content").removeClass("active")
})

$(".modal__outside_click").on('click', function () {
  $("#modal__contact").removeClass("active")
  $(".modal__contact_content").removeClass("active")
})

})

// Hambuger Menu Animation & Function

$(document).ready(function(){

  $('.mob_nav__ham_menu_container').click(function(){
    $('.mob_nav__ham_menu_container').toggleClass('active');
    $('.mob_nav__menu_overlay').toggleClass('active');
    $('body,html').toggleClass('hidden');
    $('body').toggleClass('relative');
  })

});


