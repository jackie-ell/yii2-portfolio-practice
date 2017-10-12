$(document).ready(() => {
  picBlowup()
  createFilters()
  filterBtns()
})

function picBlowup(){
  $('img.img-thumbnail.project').on('click', (event) => {

    let pic = event.currentTarget.src;

    $('#blowup-pic').attr('src', pic)

    $('.overlay').css('display', 'block')
    $('.overlay').find('*').css('display', 'flex')
  })

  $('.overlay').on('click', () => {
    $('.overlay').css('display', 'none')
    $('.overlay').find('*').css('display', 'none')
  })
}

function createFilters(){
  labels = $('span.label')
  filtList = $('#filter-list')
  labArr = []

  for(label of labels) {
    if(!labArr.includes(label.innerHTML)){
      labArr.push(label.innerHTML)
      filtList.append(`<span class='label label-default'>
      ${label.innerHTML}
      </span>`)
    }
  }
}

function filterBtns(){

}










/* */
