<?php

function query(string $query, array $data = []){

    $string = "mysql:hostname=".DBHOST.";dbname=". DBNAME;
    $con = new PDO($string, DBUSER, DBPASS);

    $stm = $con->prepare($query);
    $stm->execute($data);
    
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    if(is_array($result) && !empty($result)){
        return $result;
    }


    return false;

}

function query_row(string $query, array $data = []){

    $string = "mysql:hostname=".DBHOST.";dbname=". DBNAME;
    $con = new PDO($string, DBUSER, DBPASS);

    $stm = $con->prepare($query);
    $stm->execute($data);
    
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    if(is_array($result) && !empty($result)){
        return $result[0];
    }


    return false;

}

function redirect($page){

    header('Location: '.ROOT. '/' . $page);
    die;
}

function old_value($key, $default = ''){

    if(!empty($_POST[$key])){
        return $_POST[$key];
    }

    return $default;
}

function get_image($file){

    $file = $file ?? '';
    if(file_exists($file)){
        
        return ROOT.'/'.$file;

    }
    return ROOT.'/assets/imgs/no_image.png';
}

function str_to_url($url){

   $url = str_replace("'", "", $url);
   $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
   $url = trim($url, "-");
   $url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
   $url = strtolower($url);
   $url = preg_replace('~[^-a-z0-9_]+~', '', $url);
   
   return $url;
}

function esc($str){
    return htmlspecialchars($str ?? '');
}

function authenticate($row){
    $_SESSION['USER'] = $row;
}

function logged_in(){
    if(!empty($_SESSION['USER']))
        return true;
    
    return false;
}

function get_pagination_vars()
{

	/** set pagination vars **/
	$page_number = $_GET['page'] ?? 1;
	$page_number = empty($page_number) ? 1 : (int)$page_number;
	$page_number = $page_number < 1 ? 1 : $page_number;

	$current_link = $_GET['url'] ?? 'home';
	$current_link = ROOT . "/" . $current_link;
	$query_string = "";

	foreach ($_GET as $key => $value)
	{
		if($key != 'url')
			$query_string .= "&".$key."=".$value;
	}

	if(!strstr($query_string, "page="))
	{
		$query_string .= "&page=".$page_number;
	}

	$query_string = trim($query_string,"&");
	$current_link .= "?".$query_string;

	$current_link = preg_replace("/page=.*/", "page=".$page_number, $current_link);
	$next_link = preg_replace("/page=.*/", "page=".($page_number+1), $current_link);
	$first_link = preg_replace("/page=.*/", "page=1", $current_link);
	$prev_page_number = $page_number < 2 ? 1 : $page_number - 1;
	$prev_link = preg_replace("/page=.*/", "page=".$prev_page_number, $current_link);

	$result = [
		'current_link'	=>$current_link,
		'next_link'		=>$next_link,
		'prev_link'		=>$prev_link,
		'first_link'	=>$first_link,
		'page_number'	=>$page_number,
	];

	return $result;
}

//create_tables();
function create_tables(){

    $string = "mysql:hostname=".DBHOST.";";
    $con = new PDO($string, DBUSER, DBPASS);

    $query = "create database if not exists ". DBNAME;
    $stm = $con->prepare($query);
    $stm->execute();

    $query = "use ". DBNAME;
    $stm = $con->prepare($query);
    $stm->execute();

    /** users tables **/
    $query = "create table if not exists users(

        id int primary key auto_increment,
        username varchar(50) not null,
        email varchar(100) not null,
        password varchar(255) not null,
        image varchar(1024) null,
        date datetime default current_timestamp,
        role varchar(10) not null,

        key username (username),
        key email (email)

    )";
    $stm = $con->prepare($query);
    $stm->execute();

    /** categories tables **/
    $query = "create table if not exists categories(

        id int primary key auto_increment,
        category varchar(50) not null,
        slug varchar(100) not null,
        disabled tinyint default 0,

        key slug (slug),
        key category (category)

    )";
    $stm = $con->prepare($query);
    $stm->execute();

    /** posts tables **/
    $query = "create table if not exists posts(

        id int primary key auto_increment,
        user_id int,
        category_id int,
        title varchar(100) not null,
        content text null,
        image varchar(1024) null,
        date datetime default current_timestamp,
        slug varchar(100) not null,

        key user_id (user_id),
        key category_id (category_id),
        key title (title),
        key slug (slug),
        key date (date)

    )";
    $stm = $con->prepare($query);
    $stm->execute();

}

//insertAdmin();
function insertAdmin(){
    
    $data = [];
    $data['username'] = 'admin';
    $data['email'] = 'alfredo@email.com';
    $data['role'] = 'admin';
    $data['password'] = password_hash("alfredo123", PASSWORD_DEFAULT);

    $query = "insert into users (username,email,password,role) values (:username,:email,:password,:role)";
    query($query, $data);
}