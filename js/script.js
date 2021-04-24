jQuery(function($){
    $(function() {
        // サイドバー開くとき
        $(".js-menu").on("click", function() {
                $(".l-sideMenu").addClass("is-open");
                $(".js-fade-layer").css("visibility","visible");
                $(".js-body").css("height","100vh"); // open時に画面表示領域を固定し、サイドバーのみ動くようにするため
        });

        // サイドバー閉じるとき
        $(".js-close").on("click", function() {
            $(".l-sideMenu").removeClass("is-open");
            $(".js-fade-layer").css("visibility","hidden");
            $(".js-body").css("height","auto");
        });
    });
});