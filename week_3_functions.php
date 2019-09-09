<?php
include_once 'api_variables.php';

if (!is_array($request) // Ova funkcija ispituje da $request nije niz.
|| count($request) == 0) // Broji request, ako je broj njegovih elemenata 0, prikazace
{
    error('Poziv nije u formi (/services.php/articles[/123])', 400);
}

if (($method == 'POST' || $method == 'DELETE') && 
    (count($request) < 2 || 
    empty($request[1]))) // ispituje da li je elemenat [1] iz niza varijable $request prazan, prazan niz ili 0 ili ne postoji {
    error('Za POST i DELETE metode, id artikla je obavezan (/services.php/articles/:articleId)', 405);
}

if (in_array($method, ['POST', 'PUT']) //funkcija ispituje da li vrijednosti POST i PUT postoje u nizu $method
&& (!is_array($input) || count($input) == 0)) { //ako broj inputa je 0, prikazace error.
    error('Za PUT i POST metode obavezno je slanje podataka', 405);
}

$service = $request[0];
if ($service !== 'articles') {
    error('Podrzavamo samo articles servis (/services.php/articles)', 404);
}

error_log("called method: {$method} with service {$service}"); // error_log() - šalje "error" poruku na server ili na drugu željenu destinaciju.

switch ($method) {
    case 'GET':
        get(count($request) >= 2 ? $request[1] : null);
        break;
    case 'POST':
        post($request[1], $input);
        break;
    case 'PUT':
        put($input);
        print_r($input);
        break;
    case 'DELETE':
        delete($request[1]);
        break;
    default:
        error('invalid API method, allowed are GET, POST, PUT and DELETE!', 405);
}

function get($articleId = null) {
    $articles = getData();

    if ($articles == null || !is_array($articles) || count($articles) == 0) {
        error('Article not found', 404);
    }

    if ($articleId === null) {
        return respond($articles);
    }
    foreach ($articles as $article) {
        if ($article->id == $articleId) {
            respond($article);
        }
    }

    error('Article not found', 404);
}

function post($articleId, $article) {
    $articles = getData();
    $article['id'] = $articleId;

    if ($articles == null || !is_array($articles) || count($articles) == 0) {
        error('Article not found', 404);
    }

    if ($articleId === null) {
        error('Missing article Id', 400);
    }

    foreach ($articles as $key => $currentArticle) {
        if ($currentArticle->id == $articleId) {
            $articles[$key] = $article;
            saveData($articles);
            respond(false, 201);
            break;
        }
    }

    error('Article not found', 404);
}

function put($article) {
    $articles = getData();

    if (!is_array($articles))
        $articles = [];

    $articles[] = $article;

    saveData($articles);

    respond(false, 200);
}

function delete($articleId) {


    $articles = getData();

    if ($articles == null || !is_array($articles) || count($articles) == 0) {
        error('Article not found', 404);
    }

    foreach ($articles as $key => $currentArticle) {
        if ($currentArticle->id == $articleId) {
            unset($articles[$key]);
            saveData($articles);
            respond(false, 200);
            break;
        }
    }

    error('Article not found', 404);
}

function getData() {
    global $dbFile;

    if (!file_exists($dbFile)) { // !file_exists() - provjerava da li ne potoji kao fajl 
        error('db file not exist', 500);
    }

    return json_decode(file_get_contents($dbFile));//dekodira json string
}

function saveData($data) {
    global $dbFile;

    if (!file_exists($dbFile)) { // ako dbfile ne postoji, vraca error-fajl ne postoji/
        error('db file not exist', 500);
    }

    file_put_contents($dbFile, json_encode($data)); //vraca vrijednosti u json.
}

function respond($result, $code = 200) {
    http_response_code($code);// http_response_code() - postavlja HTTP kod statusa
    
    if ($result) {
        echo json_encode($result);
    }

    exit();
}

function error($message, $code) {
    http_response_code($code);
    
    if (!$message)
        $message = 'Internal error.';
    echo json_encode(['error' => $message]);

    exit();
}

/*$_SERVER  Globalna varijabla koja salje podatke o header-ima,putanjama i lokacijama skripti. Ove informacije salje server.
$_POST  Ovom varijablom se prikupljaju podatci iz HTML forme te se salju na server. Informacije poslane na ovaj nacin su nevidljive i nemaju ogranicenje u pogledu kolicine poslatih informacija.
$_GET  Ova varijabla je niz vrijednosti i varijabli prikupljenih http get metodom. Ne treba je koristiti u slucaju slanja osjetljivih podataka.

*/
