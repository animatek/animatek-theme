const initPrimaryMenuToggle = () => {
    const mainNavigation = document.getElementById('primary-navigation')
    const mainNavigationToggle = document.getElementById('primary-menu-toggle')

    if (!mainNavigation || !mainNavigationToggle || mainNavigationToggle.dataset.menuBound === 'true') {
        return
    }

    mainNavigationToggle.dataset.menuBound = 'true'

    const desktopMediaQuery = window.matchMedia('(min-width: 782px)')

    const applyState = (isOpen) => {
        if (isOpen) {
            mainNavigation.classList.remove('hidden')
            mainNavigation.style.display = 'flex'
            mainNavigation.style.flexDirection = 'column'
            mainNavigationToggle.setAttribute('aria-expanded', 'true')
        } else {
            mainNavigation.classList.add('hidden')
            mainNavigation.style.display = 'none'
            mainNavigationToggle.setAttribute('aria-expanded', 'false')
        }
    }

    const syncStateWithDesktop = () => {
        if (desktopMediaQuery.matches) {
            mainNavigation.classList.remove('hidden')
            mainNavigation.style.display = ''
            mainNavigation.style.flexDirection = ''
            mainNavigationToggle.setAttribute('aria-expanded', 'true')
            return
        }

        applyState(!mainNavigation.classList.contains('hidden'))
    }

    const toggleMenu = (event) => {
        event.preventDefault()
        const isHidden = mainNavigation.classList.contains('hidden')
        applyState(isHidden)
    }

    mainNavigationToggle.setAttribute('aria-expanded', 'false')
    mainNavigationToggle.setAttribute('aria-controls', 'primary-navigation')

    mainNavigationToggle.addEventListener('click', toggleMenu)
    desktopMediaQuery.addEventListener('change', syncStateWithDesktop)
    syncStateWithDesktop()
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initPrimaryMenuToggle, { once: true })
} else {
    initPrimaryMenuToggle()
}

const initDarkModeToggle = () => {
    const toggleBtn = document.getElementById('dark-mode-toggle')
    const moonIcon = document.getElementById('dark-toggle-moon')
    const sunIcon = document.getElementById('dark-toggle-sun')

    if (!toggleBtn || toggleBtn.dataset.darkBound === 'true') return
    toggleBtn.dataset.darkBound = 'true'

    const isDark = () => document.documentElement.getAttribute('data-theme') === 'dark'

    const syncIcons = () => {
        if (isDark()) {
            moonIcon.classList.add('hidden')
            sunIcon.classList.remove('hidden')
            toggleBtn.setAttribute('aria-label', 'Activar modo claro')
        } else {
            moonIcon.classList.remove('hidden')
            sunIcon.classList.add('hidden')
            toggleBtn.setAttribute('aria-label', 'Activar modo oscuro')
        }
    }

    toggleBtn.addEventListener('click', () => {
        if (isDark()) {
            document.documentElement.removeAttribute('data-theme')
            try { localStorage.setItem('animatek-theme', 'light') } catch(e) {}
        } else {
            document.documentElement.setAttribute('data-theme', 'dark')
            try { localStorage.setItem('animatek-theme', 'dark') } catch(e) {}
        }
        syncIcons()
    })

    syncIcons()
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initDarkModeToggle, { once: true })
} else {
    initDarkModeToggle()
}
