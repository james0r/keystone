exports.init = () => {
  console.log( 'helpers is initialized!' );
}

exports.isOverflowRight = ($el) => {
  const width = $el.outerWidth();
  const windowWidth = $(window).width();
  const leftOffset = $el.offset().left;
  const rightOffset = windowWidth - (width + leftOffset);

  if (rightOffset < 0) {
    return Math.abs(rightOffset);
  } else {
    return false;
  }

};

