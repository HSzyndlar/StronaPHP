<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>biblioteka</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 text-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Główna</font></font></a></li>
                <li><a href="index.php?par=books" class="nav-link px-2 text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Książki</font></font></a></li>
                <li><a href="index.php?par=students" class="nav-link px-2 text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uczniowie</font></font></a></li>
                <li><a href="#" class="nav-link px-2 text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wypożyczenia</font></font></a></li>
                <li><a href="index.php?par=add-data" class="nav-link px-2 text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dodaj dane</font></font></a></li>
                <li><a href="#" class="nav-link px-2 text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kontakt</font></font></a></li>
            </ul>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Zaloguj sie</font></font></button>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <?php
    if (isset($_GET['par'])){
        if ($_GET['par'] == "books"){
            require_once ("pages/books.php");
        }
        else if ($_GET['par'] == "students"){
            require_once ("pages/students.php");
        }
        else if ($_GET['par'] == "add-data"){
            require_once ("pages/adddata.php");
        }
    }
    else {
        ?>
        <h1 class="mt-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Przyklejona stopka ze stałym paskiem nawigacyjnym</font></font></h1>
        <p class="lead"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Przypnij stopkę na dole widocznego obszaru w przeglądarkach komputerowych za pomocą tego niestandardowego kodu HTML i CSS. </font><font style="vertical-align: inherit;">Dodano stały pasek nawigacyjny z </font></font><code class="small">padding-top: 60px;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">na </font></font><code class="small">main &gt; .container</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">.</font></font></p>
        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Powrót do </font></font><a href="/docs/5.1/examples/sticky-footer/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">domyślnej przyklejonej stopki</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> bez paska nawigacyjnego.</font></font></p>
        <?php
    }
    ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
</body>
</html>