document.addEventListener("DOMContentLoaded", () => {
    setupNavigation()
    setupThemeColor()
    AOS.init()
})

const setupNavigation = () => {
    const bar = document.getElementById("navigation-bar")
    const menu = document.getElementById("navigation-menu")
    const menuButton = document.getElementById("navigation-menu-button")
    const closeButton = document.getElementById("navigation-close-button")
    let previousScrollPosition = window.pageYOffset

    window.addEventListener("scroll", () => {
        let currentScrollPosition = window.pageYOffset

        if (previousScrollPosition > currentScrollPosition && currentScrollPosition !== 0) bar.classList.remove("d-none")
        else bar.classList.add("d-none")

        previousScrollPosition = currentScrollPosition
    })
    menuButton.onclick = () => {
        menu.classList.remove("d-none")
    }
    closeButton.onclick = () => {
        menu.classList.add("d-none")
    }
}

const setupThemeColor = () => {
    const themeColor = document.querySelector("meta[name='theme-color']")
    let defaultColor = themeColor.getAttribute("content")

    window.addEventListener("scroll", () => {
        let currentScrollPosition = window.pageYOffset

        if (currentScrollPosition === 0) themeColor.setAttribute("content", defaultColor)
        else themeColor.setAttribute("content", "#ffffff")
    })
}