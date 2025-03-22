$(document).ready(() => {
    const accordions = $(".accordion");

    accordions.on("click", function (e) {
        e.preventDefault();
        const $this = $(this);
        $this
            .find(".accordion__content, .accordion__arrow")
            .toggleClass("active");
    });
});
