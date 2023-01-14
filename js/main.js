document.addEventListener("DOMContentLoaded", () => {
    setupNavigation()
})

const setupNavigation = () => {
    const bar = document.getElementById("navigation-bar")
    const menu = document.getElementById("navigation-menu")
    const menuButton = document.getElementById("navigation-menu-button")
    const closeButton = document.getElementById("navigation-close-button")

    menuButton.onclick = () => {
        menu.classList.remove("d-none")
    }
    closeButton.onclick = () => {
        menu.classList.add("d-none")
    }

    document.body.style.paddingTop = `${bar.offsetHeight}px`;
}