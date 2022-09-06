$('.visit--wrap > .visit__link').click(function () {
    $('.consult').modal({
        fadeDuration: 200
    })
})

$('.chars__item-button').click(function () {
    $('.modalField').html($(this).parent().find('.catalog__item-chars--green').text())
    $('.modalRed').html($(this).parent().find('.catalog__item-chars--red').text())

    $('.graphics').modal({
        fadeDuration: 200
    })
})

$('.pay__cards-item:first-child').click(function () {
    $('.credit').modal({
        fadeDuration: 200
    })
})

$('.pay__cards-item:nth-child(2)').click(function () {
    $('.procent').modal({
        fadeDuration: 200
    })
})

$('.ref__button').click(function () {
    $('.consult').modal({
        fadeDuration: 200
    })
})

$('.catalog__button').click(() => {
    $('.catalog__toggle').slideToggle('slow')
    if ($('.catalog__button').text() == 'Показать ещё') {
        $('.catalog__button').html('Скрыть')
    }
    else {
        $('.catalog__button').html('Показать ещё')
    }
})