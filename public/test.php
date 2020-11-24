<?php


/**
 * exo 0
*/

echo 'Hello world';


/**
 * exo 1
 */

function my_helloWorld(){
    echo 'Hello world';
}



/**
 * exo 2
 */

function my_print($data){
    echo $data . ' ';
}

my_print("I");
my_print("CALL");
my_print("THE");
my_print("CYBER");
my_print("POLICE");


/**
 * exo 3
 */

function iPrintWhatIGet(){
    if(key_exists('data', $_GET)){
        $var = $_GET['data'];
        return 'data=' . $var;
    }
    return 'Url data not found';
}

iPrintWhatIGet();


/**
 * exo 4
 */

if(key_exists('data', $_GET)){
    $number = $_GET['data'];
    oddOrEven((int)$number);
}

function oddOrEven($var){
    if($var%2 == 1){
        echo 'Odd';
    }else{
        echo 'Even';
    }

}

/**
 * exo 5
 */
if(key_exists('number', $_GET)){
    $limit = $_GET['number'];
    $i=0;
    while($i< $limit){
        echo $i . '\n';
        $i++;
    }
}


/**
 * exo 6
 */

if(key_exists('number', $_GET)){
    $limit = $_GET['number'];
    for($i=0; $i< $limit; $i++){
        echo $i . '\n';
    }
}
