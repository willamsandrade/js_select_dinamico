<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <select id="languages-select">
        <option value="" disabled selected>Escolha uma linguagem</option>
    </select>

    <script type="text/javascript">
        const languagesSelect = document.getElementById("languages-select");
        const languagesList = ["Ruby", "JavaScript", "Python", "GoLang"];
        languagesList.forEach((language) => {
            option = new Option(language, language.toLowerCase());
            languagesSelect.options[languagesSelect.options.length] = option;
        });
    </script>
</body>
</html>