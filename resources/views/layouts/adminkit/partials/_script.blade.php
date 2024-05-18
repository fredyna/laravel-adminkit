<script src="{{ asset('adminkit/js/app.js') }}"></script>
<script>
    function toggleDropdown(e) {
        let target = e.getAttribute('data-bs-target');
        let ariaExpanded = e.getAttribute('aria-expanded');
        let isCollapsed = e.classList.contains("collapsedd");
        let submenu = document.querySelector(`${target}`);
        const isShow = submenu.classList.contains("show");
        console.log(isCollapsed);
        if (isCollapsed) {
            e.classList.remove("collapsedd");
            e.classList.remove("collapsed");
            e.setAttribute('aria-expanded', true);
        } else {
            e.classList.add("collapsed");
            e.classList.add("collapsedd");
            e.setAttribute('aria-expanded', false);
            setTimeout(() => {
                submenu.classList.remove("show");
            }, 500);
        }
    }
</script>
@yield('myjs')
