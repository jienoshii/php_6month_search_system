<?php
    $user = array(
        "Taro",
        "Jesamae",
        "Nikka",
        "Janzen",
        "Elaine",
        "Goldie",
        "Tantan",
        "Jose",
        "Fiona",
        "Dether",
        "Raya",
        "Trisha"
    );
 
    echo "ID\tUSERNAME\n";
    for ($x = 0; $x < count($user); $x++) {
        echo "00$x\t{$user[$x]}\n";
    }
 
    echo "\nEnter a username to search: ";
    $getUser = readline();
 
    $bool = false;
 
    foreach ($user as $x => $username) {
        if (strcasecmp($username, $getUser) === 0) {
            $bool = true;
            $userId = $x;
            break;
        }
    }
 
    if ($getUser === "") {
        echo "Please enter a user.";
    } elseif ($bool === true) {
        echo "User found!\n";
        echo "User ID: 00$userId\n";
        echo "Username: {$user[$userId]}";
    } elseif ($bool === false) {
        echo "User not found!";
    } else {
        echo "";
    }
 
    echo "\n";
?>
