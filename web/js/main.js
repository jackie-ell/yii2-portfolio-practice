$('img.img-thumbnail.project').on('click', (event) => {

  let pic = event.currentTarget.src;
  console.log(pic)

  $('#blowup-pic').attr('src', pic)

  $('.overlay').css('display', 'block')
  $('.overlay').find('*').css('display', 'flex')
})

$('.overlay').on('click', () => {
  $('.overlay').css('display', 'none')
  $('.overlay').find('*').css('display', 'none')
})
