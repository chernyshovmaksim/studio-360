document.addEventListener("DOMContentLoaded", () => {
    // Получаем необходимые элементы
    const preloader = document.querySelector(".preloader");
    const percentElement = document.querySelector(".preloader__percent span");

    // Если нет прелоадера, прекращаем выполнение
    if (!preloader || !percentElement) {
        return;
    }

    let loadedResources = 0;
    const images = document.querySelectorAll("img");
    const videos = document.querySelectorAll("video");
    const styles = document.querySelectorAll('link[rel="stylesheet"]');
    // const scripts = document.querySelectorAll("script[src]");
    const fonts = document.fonts;
    const totalResources = images.length + videos.length + styles.length + 1;

    // Функция обновления процента загрузки
    const updateProgress = () => {
        loadedResources++;
        const percent = Math.round((loadedResources / totalResources) * 100);
        percentElement.textContent = `${percent}%`;

        // Когда все ресурсы загружены
        if (loadedResources >= totalResources) {
            setTimeout(() => {
                preloader.style.opacity = "0";
                preloader.addEventListener(
                    "transitionend",
                    () => {
                        preloader.style.display = "none";
                    },
                    { once: true }
                );
            }, 500);
        }
    };

    // Обработка загрузки изображений
    images.forEach((img) => {
        if (img.complete) {
            updateProgress();
        } else {
            img.addEventListener("load", updateProgress, { once: true });
            img.addEventListener("error", updateProgress, { once: true });
        }
    });

    // Обработка загрузки видео
    videos.forEach((video) => {
        if (video.readyState >= 4) {
            updateProgress();
        } else {
            video.addEventListener("loadeddata", updateProgress, {
                once: true,
            });
            video.addEventListener("error", updateProgress, { once: true });
        }
    });

    // Добавляем обработку загрузки стилей
    styles.forEach((style) => {
        if (style.sheet) {
            updateProgress();
        } else {
            style.addEventListener("load", updateProgress, { once: true });
            style.addEventListener("error", updateProgress, { once: true });
        }
    });

    // Добавляем обработку загрузки скриптов
    // scripts.forEach((script) => {
    //     if (script.complete) {
    //         updateProgress();
    //     } else {
    //         script.addEventListener("load", updateProgress, { once: true });
    //         script.addEventListener("error", updateProgress, { once: true });
    //     }
    // });

    // Добавляем обработку загрузки шрифтов
    fonts.ready
        .then(() => {
            updateProgress();
        })
        .catch(() => {
            updateProgress();
        });

    // Если нет ресурсов для загрузки
    if (totalResources === 0) {
        percentElement.textContent = "100%";
        setTimeout(() => {
            preloader.style.opacity = "0";
            preloader.addEventListener(
                "transitionend",
                () => {
                    preloader.style.display = "none";
                },
                { once: true }
            );
        }, 500);
    }
});
