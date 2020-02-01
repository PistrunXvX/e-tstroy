ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
            center: [55.840260, 37.447890],
            zoom: 15
        }, {
            searchControlProvider: 'yandex#search'
        }),

    // Создаем геообъект с типом геометрии "Точка".
        myGeoObject = new ymaps.GeoObject({
            // Описание геометрии.
            geometry: {
                type: "Point",
                coordinates: [55.840260, 37.447890]
            },
            // Свойства.
            properties: {
                // Контент метки.
                iconContent: 'Улица свободы, 35с14',
                // hintContent: 'Ну давай уже тащи'
            }
        }, {
            // Опции.
            // Иконка метки будет растягиваться под размер ее содержимого.
            preset: 'islands#blackStretchyIcon',
            // Метку можно перемещать.
            draggable: false
        });

    myMap.geoObjects
        .add(myGeoObject)
        .add(new ymaps.Placemark([55.840260, 37.447890], {
        }, {
            preset: 'islands#greenDotIconWithCaption'
        }));
}