let lastResFind = ""; // последний удачный результат
let copy_page = ""; // копия страницы в ихсодном виде

function TrimStr(s) {
  s = s.replace(/^\s+/g, "");
  return s.replace(/\s+$/g, "");
}

function FindOnPage(inputId) {
  //ищет текст на странице, в параметр передается ID поля для ввода
  let obj = window.document.getElementById(inputId);
  let textToFind;

  if (obj) {
    textToFind = TrimStr(obj.value); //обрезаем пробелы
  } else {
    alert("Введенная фраза не найдена");
    return;
  }
  if (textToFind == "") {
    alert("Вы ничего не ввели");
    return;
  }

  if (document.body.innerHTML.indexOf(textToFind) == "-1") {
    alert("Ничего не найдено, проверьте правильность ввода!");
    return;
  }

  if (copy_page.length > 0) {
    document.body.innerHTML = copy_page;
  } else {
    copy_page = document.body.innerHTML;
  }

  // Стираем предыдущие выделения
  document.body.innerHTML = document.body.innerHTML.replace(
    new RegExp("name=" + lastResFind, "gi"),
    " "
  );

  // Выделяем найденный текст
  document.body.innerHTML = document.body.innerHTML.replace(
    new RegExp(textToFind, "gi"),
    "<span style='background-color: yellow;'>" + textToFind + "</span>"
  );

  lastResFind = textToFind; 
}

// Обработчик события нажатия на Enter
document.getElementById("mySearch").addEventListener("keypress", (event) => {
  if (event.key === "Enter") {
    FindOnPage("mySearch");
  }
});