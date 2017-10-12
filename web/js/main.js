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
  let labels = $('span.label')
  let filtList = $('#filter-list')
  let labArr = []

  for(label of labels) {
    if(!labArr.includes(label.innerHTML)){
      labArr.push(label.innerHTML)
      filtList.append(`<a class='label label-default filter-btn'>${label.innerHTML}</a>`)
    }
  }
}

function filterBtns(){
  $('.filter-btn').on('click', (event) => {
    let {currentTarget} = event
    let filter = currentTarget.innerHTML
    let projects = $('.row.project-list .thumbnail')

    $(currentTarget).toggleClass('label-default')
    $(currentTarget).toggleClass('label-primary')

    for(project of projects) {

      let filtFound = false
      let labels = project.children[1].children

      for(label of labels) {
        if(label.innerHTML === filter){
          filtFound = true
          continue
        }
      }
      // console.log(label.innerHTML, filter, label.innerHTML === filter, filtFound)

      if(!filtFound){
        $(project.parentElement).addClass('hide')
      } else {
        $(project.parentElement).removeClass('hide')
      }

      // if(label.innerHTML === filter){
      //   let project = label.parentElement.parentElement
      //   $(project).addClass('hide')
      // }

    }
  })
}










/* */
