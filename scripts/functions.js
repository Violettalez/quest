function formatTime(label, milliseconds) {
    var minutes = Math.floor(milliseconds / (60 * 1000));
    var seconds = Math.floor((milliseconds % (60 * 1000)) / 1000);
    var millis = milliseconds % 1000;

    return minutes + " хвилин " + seconds + " секунд " + millis+" мілісекунд";
}
function showFormatTime(milliseconds) {
    var seconds = Math.floor(milliseconds / 1000);
    var minutes = Math.floor(seconds / 60);
    var hours = Math.floor(minutes / 60);

     var utcOffset = 2; // Смещение по UTC для Украины

    var formattedHours = (hours + utcOffset) % 24; // Получаем часы в пределах 24 часов
    var formattedMinutes = minutes % 60;
    var formattedSeconds = seconds % 60;

    // Добавляем ведущие нули при необходимости
    formattedHours = (formattedHours < 10) ? "0" + formattedHours : formattedHours;
    formattedMinutes = (formattedMinutes < 10) ? "0" + formattedMinutes : formattedMinutes;
    formattedSeconds = (formattedSeconds < 10) ? "0" + formattedSeconds : formattedSeconds;


    return formattedHours + ":" + formattedMinutes + ":" + formattedSeconds;
}
