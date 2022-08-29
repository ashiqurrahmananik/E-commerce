$('.grid-row').isotope({
  // set itemSelector so .grid-sizer is not used in layout
  itemSelector: '.grid-col',
  percentPosition: true,
  masonry: {
    // use element for option
    columnWidth: '.grid-col'
  }
})