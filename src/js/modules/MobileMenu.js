/*---   function bIsNodeClippedOrOffscreen returns true if a node
        is offscreen (without scrolling).
        Requires jQuery.
*/
export function bIsNodeClippedOrOffscreen(zJnode) {
  var aDivPos = zJnode.offset();
  var iLeftPos = aDivPos.left;
  var iTopPos = aDivPos.top;

  var iDivWidth = zJnode.outerWidth(true);
  var iDivHeight = zJnode.outerHeight(true);

  var bOffScreen = CheckIfPointIsOffScreen(iLeftPos, iTopPos);
  var bClipped = CheckIfPointIsOffScreen(
    iLeftPos + iDivWidth,
    iTopPos + iDivHeight
  );

  return bOffScreen || bClipped;
}

export function CheckIfPointIsOffScreen(iLeftPos, iTopPos) {
  var iBrowserWidth = $(window).width() - 16; //-- 16 is fudge for scrollbars, refine later
  var iBrowserHeight = $(window).height() - 16; //-- 16 is fudge for scrollbars, refine later
  var bOffScreen = false;

  if (iLeftPos < 0 || iLeftPos >= iBrowserWidth) bOffScreen = true;

  if (iTopPos < 0 || iTopPos >= iBrowserHeight) bOffScreen = true;

  return bOffScreen;
}