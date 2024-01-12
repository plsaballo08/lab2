<script>
    function scrollToAbout() {
        // Use getElementsByClassName or querySelector depending on your HTML structure
        var aboutSection = document.querySelector(".infoLeft");

        // Check if the element is found before trying to scroll
        if (aboutSection) {
            aboutSection.scrollIntoView({ behavior: 'smooth' });
        &rbrace;
    &rbrace;
</script>
