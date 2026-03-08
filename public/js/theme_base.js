const theme = localStorage.getItem("theme");
if (theme) {
    $('body').attr("data-theme", theme);
    $("#mainTheme").attr("href",  `${window.appUrl}/css/terminal_${theme}.css`);
    $("#themeIcon").html(`<i class="fa-solid fa-${theme === "light" ? "moon" : "sun"}"></i>`);
} else {
    $('body').attr("data-theme", "dark");
    $("#mainTheme").attr("href",  `${window.appUrl}/css/terminal_dark.css`);
    $("#themeIcon").html(`<i class="fa-solid fa-sun"></i>`);
}

function setTheme() {
    const currentTheme = $('body').attr("data-theme");
    const targetTheme = currentTheme === "light" ? "dark" : "light";
    $("#mainTheme").attr("href", `${window.appUrl}/css/terminal_${targetTheme}.css`);
    $("#themeIcon").find('i').animate({opacity: 0}, 100, function() {
        $(this).removeClass(`fa-${currentTheme === "light" ? "moon" : "sun"}`).addClass(`fa-${targetTheme === "light" ? "moon" : "sun"}`).animate({opacity: 1}, 200);
    });
    $('body').attr("data-theme", targetTheme);
    localStorage.setItem("theme", targetTheme);
}