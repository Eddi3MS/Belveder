const menuItems = document.querySelectorAll('.page-scroll');

menuItems.forEach(item => {
  item.addEventListener('click', scrollToIdOnClick);
})


function getScrollTopByHref(element) {
  cons id = element.getAttribute('href');
  return document.querySelector(id).offsetTop;
}


function scrollToIdOnClick(event) {
  event.preventDefault();
  const to = getScrollTopByHref(event.target) - 80;

  scrollToPosition(to);
}

function scrollToPosition(to) {
  window.scroll({
    top: to,
    behavior: "smooth",
  });
}

