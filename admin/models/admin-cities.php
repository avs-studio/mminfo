<?php
function cities_all($link)
{
    //Запрос
    $query = "SELECT * FROM cities ORDER BY name ASC";
    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    
    //Извлечение из БД
    $n = mysqli_num_rows($result);
    $cities = array();
    
    for ($i=0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $cities[] = $row;
    }
    
    return $cities;    
}
function cities_new($link, $name, $alias){
    //Подготовка
    $name = trim($name);
    $alias = trim($alias);
    $publish = 1;

    //Проверка
    if($name == '')
        return false;

    //Запрос
    $sql = "INSERT INTO cities (name, alias, publish) VALUES ('%s', '%s', '%b')";

    $query = sprintf($sql, mysqli_real_escape_string($link, $name), mysqli_real_escape_string($link, $alias), mysqli_real_escape_string($link, $publish));

    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    return true;
}

function cities_edit($id, $name, $alias){}

function cities_delete($link, $id){
    //Запрос
    $query = sprintf("DELETE FROM cities WHERE id=%d",(int)$id);
    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    
    return true;
}
function cities_publish($link, $id){
    $publish = 1;

    $sql = "UPDATE cities SET publish=%b WHERE id=%d";
    $query = sprintf($sql,mysqli_real_escape_string($link, $publish),mysqli_real_escape_string($link, $id));

    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    
    return true;
}
function cities_unpublish($link, $id){
    $publish = 0;

    $sql = "UPDATE cities SET publish=%b WHERE id=%d";
    $query = sprintf($sql,mysqli_real_escape_string($link, $publish),mysqli_real_escape_string($link, $id));

    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    
    return true;
}


/* function articles_get($link, $id_article){
    //Запрос
    $query = sprintf("SELECT * FROM articles WHERE id=%d",(int)$id_article);
    $result = mysqli_query($link, $query);
    
    if(!$result)
        die(mysqli_error($link));
    
    //Извлечение из БД
    
    $article = mysqli_fetch_assoc($result);
    return $article;
}

function articles_edit($id, $title, $date, $content){

}
function articles_delete($id){

}
?>*/