$(function () {
    // Слайдеры
    const sliderConfig = {
        achievements: {
            // slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0,
            infinite: true,
            cssEase: "linear",
            speed: 2000,
            mobileFirst: true,
            arrows: false,
            swipe: false,
            draggable: false,
            variableWidth: true,
        },
        blog: {
            slidesToShow: 2.1,
            slidesToScroll: 1,
            arrows: false,
            centerMode: false,
            infinite: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1.1,
                    },
                },
            ],
        },
        clients: {
            // slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0,
            infinite: true,
            cssEase: "linear",
            speed: 2000,
            mobileFirst: true,
            arrows: false,
            variableWidth: true,
            swipe: false,
            draggable: false,
        },
        projects: {
            slidesToShow: 2.2,
            slidesToScroll: 1,
            arrows: false,
            centerMode: false,
            infinite: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1.1,
                    },
                },
            ],
        },
    };

    // Инициализация слайдеров
    $("#achievements").slick(sliderConfig.achievements);
    $("#blog").slick(sliderConfig.blog);
    $("#projects").slick(sliderConfig.projects);
    $("#clients").slick(sliderConfig.clients);
    // Общая функция обработки прокрутки для слайдеров
    const handleSliderWheel = function (e) {
        e.preventDefault();
        $(this).slick(e.originalEvent.deltaY < 0 ? "slickPrev" : "slickNext");
    };

    // Применяем обработчик к нужным слайдерам
    $("#projects").on("wheel", handleSliderWheel);
});
