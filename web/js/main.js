//TODO: Remove redundent code

$(document).ready(() => {
  picBlowup()
  createFilters()
  filterBtns()
  filterReset()
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
    let projects = $('.row.project-list .thumbnail')

    $(currentTarget).toggleClass('label-default')
    $(currentTarget).toggleClass('label-primary')

    let filters = []
    let filterList = $('#filter-list a.label.label-primary')

    for(filter of filterList){
      filters.push(filter.innerHTML)
    }

    if(filters.length === 0){
      for(project of projects){
        $(project.parentElement).removeClass('hide')
      }
    } else {
      for(project of projects) {
        let filtFound = false
        let labels = project.children[1].children

        for(label of labels) {
          if(filters.includes(label.innerHTML)){
            filtFound = true
            continue
          }
        }

        if(!filtFound){
          $(project.parentElement).addClass('hide')
        } else {
          $(project.parentElement).removeClass('hide')
        }
      }
    }
  })
}

function filterReset(){
  $('#filter-reset').on('click', () => {
    let filterList = $('#filter-list a.label.label-primary')
    let projects = $('.row.project-list .thumbnail')

    for(label of filterList){
      $(label).removeClass('label-primary')
      $(label).addClass('label-default')
    }

    for(project of projects) {
      $(project.parentElement).removeClass('hide')
    }
  })
}









/* */
