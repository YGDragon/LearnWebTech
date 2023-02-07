function toFahrenheit(tempC) {
    const tempF = (9 / 5) * tempC + 32;
    return tempF % 10 == 0 ? tempF : tempF.toFixed(1);
}

const tempC = parseInt(prompt("Введи температуру в градусах Цельсия"));
alert(`Температура по Цельсию: ${tempC}, температура по Фаренгейту: ${toFahrenheit(tempC)}`);