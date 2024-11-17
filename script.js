$(function(){
    let sidebar_btn = $('#sidebar-btn');
    let sidebar = $('#sidebar');
    let theme_change = $('li.change-theme');
    let sidebar_btn_icon = $('#hamburger');
    let navbar = $('nav.navbar');
    let user_btn = $('#user-btn').addClass('bg-success text-white');
    let admin_btn = $('#admin_btn');
    let MM_btn = $('#MM_btn');
    theme_change.click(function(){
        let sun_moon = $('i.moon_sun');
        sidebar.toggleClass('sidebar-dark bg-dark footer-dark');
        navbar.toggleClass('bg-dark');
        sun_moon.toggleClass('bi bi-emoji-smile');
        sun_moon.toggleClass('bi bi-emoji-sunglasses');
    })
    sidebar_btn.click(function(){
        sidebar.toggleClass('sidebar-show');
        sidebar_btn_icon.toggleClass('bi bi-x');
    })
    function handlebtn(clickedBtn){
        $('#user-btn,#admin_btn,#MM_btn').removeClass('bg-success text-white');

        clickedBtn.addClass('bg-success text-white');
    }
    user_btn.click(function(){
        handlebtn(user_btn)
    })
    admin_btn.click(function(){
        handlebtn(admin_btn)
    })
    MM_btn.click(function(){
        handlebtn(MM_btn)
    })
})