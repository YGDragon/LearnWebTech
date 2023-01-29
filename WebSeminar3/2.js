function greeting(getName) {
    console.log(`Добро пожаловать в WEB, ${getName}!`);
}

const getName = prompt("Укажите своё имя, пожалуйста.");
greeting(getName);