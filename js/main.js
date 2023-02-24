document.addEventListener("DOMContentLoaded", () => {
    setupNavigation()
    AOS.init()
})

const setupNavigation = () => {
    const bar = document.getElementById("navigation-bar")
    const menu = document.getElementById("navigation-menu")
    const menuButton = document.getElementById("navigation-menu-button")
    const closeButton = document.getElementById("navigation-close-button")
    let previousScrollPosition = window.pageYOffset

    window.onscroll = () => {
        let currentScrollPosition = window.pageYOffset

        if (previousScrollPosition > currentScrollPosition && currentScrollPosition !== 0) bar.classList.remove("d-none")
        else bar.classList.add("d-none")

        previousScrollPosition = currentScrollPosition
    }
    menuButton.onclick = () => {
        menu.classList.remove("d-none")
    }
    closeButton.onclick = () => {
        menu.classList.add("d-none")
    }
}