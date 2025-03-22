if (document.getElementById("hero-video")) {
    // Получаем элемент видео
    const video = document.getElementById("hero-video");

    // Функция для попытки запуска видео
    function startVideoPlayback() {
        // Отключаем звук (важно для автовоспроизведения на мобильных)
        video.muted = true;

        // Пытаемся запустить видео
        video.play().catch((error) => {
            // Если возникла ошибка при запуске, пытаемся запустить снова через 1 секунду
            setTimeout(startVideoPlayback, 1000);
        });
    }

    // Обработчик загрузки DOM
    document.addEventListener("DOMContentLoaded", () => {
        // Запускаем видео после загрузки DOM
        startVideoPlayback();

        // Обработчик касания для iOS устройств
        document.addEventListener("touchstart", () => {
            // При любом взаимодействии с страницей пытаемся запустить видео
            startVideoPlayback();
        });

        // Обработчик окончания видео для бесконечного цикла
        video.addEventListener("ended", () => {
            video.currentTime = 0;
            video.play();
        });
    });

    // Обработчик изменения видимости вкладки
    document.addEventListener("visibilitychange", () => {
        if (document.visibilityState === "visible") {
            // Если вкладка стала видимой, пытаемся запустить видео
            startVideoPlayback();
        }
    });
}
