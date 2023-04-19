// const navLinks = document.querySelectorAll('.nav-item')
// const menuToggle = document.getElementById('navbarNav')
// const bsCollapse = new bootstrap.Collapse(menuToggle)
// navLinks.forEach((l) => {
//     l.addEventListener('click', function () { bsCollapse.toggle() })
// }) ORIGINAL

function navku() {
    // const navLinks = document.querySelectorAll('.nav-item') hide setlah diklik pakai button dlu
    const menuToggle = document.getElementById('navbarNav')
    const bsCollapse = new bootstrap.Collapse(menuToggle)
    navLinks.forEach((l) => {
      l.addEventListener('click', function () { bsCollapse.toggle() })
    })

}