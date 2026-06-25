<?php


echo "666 Encryption - Created by chris clark. <br><br>";



// Generates a secure random integer between 10 and 100 inclusive
$matrix1r1 = random_int(100000, 999999); 
// Generates a secure random integer between 10 and 100 inclusive
$matrix1r2 = random_int(100000, 999999); 
// Generates a secure random integer between 10 and 100 inclusive
$matrix1r3 = random_int(100000, 999999); 
// Generates a secure random integer between 10 and 100 inclusive
$matrix1r4 = random_int(100000, 999999);
// Generates a secure random integer between 10 and 100 inclusive
$matrix1r5 = random_int(100000, 999999); 
// Generates a secure random integer between 10 and 100 inclusive
$matrix1r6 = random_int(100000, 999999);
// Generates a secure random integer between 10 and 100 inclusive
$matrix2r1 = random_int(100000, 999999); 
// Generates a secure random integer between 10 and 100 inclusive
$matrix2r2 = random_int(100000, 999999);
// Generates a secure random integer between 10 and 100 inclusive
$matrix2r3 = random_int(100000, 999999);
// Generates a secure random integer between 10 and 100 inclusive
$matrix2r4 = random_int(100000, 999999); 
// Generates a secure random integer between 10 and 100 inclusive
$matrix2r5 = random_int(100000, 999999);
// Generates a secure random integer between 10 and 100 inclusive
$matrix2r6 = random_int(100000, 999999);
// Generates a secure random integer between 10 and 100 inclusive
$matrix3r1 = random_int(100000, 999999);
// Generates a secure random integer between 10 and 100 inclusive
$matrix3r2 = random_int(100000, 999999); 
// Generates a secure random integer between 10 and 100 inclusive
$matrix3r3 = random_int(100000, 999999); 
// Generates a secure random integer between 10 and 100 inclusive
$matrix3r4 = random_int(100000, 999999); 
// Generates a secure random integer between 10 and 100 inclusive
$matrix3r5 = random_int(100000, 999999); 
// Generates a secure random integer between 10 and 100 inclusive
$matrix3r6 = random_int(100000, 999999); 

$matrix1 = (string)$matrix1r1."".(string)$matrix1r2."".(string)$matrix1r3."".(string)$matrix1r4."".(string)$matrix1r5."".(string)$matrix1r6;
$matrix2 = (string)$matrix2r1."".(string)$matrix2r2."".(string)$matrix2r3."".(string)$matrix2r4."".(string)$matrix2r5."".(string)$matrix2r6;
$matrix3 = (string)$matrix3r1."".(string)$matrix3r2."".(string)$matrix3r3."".(string)$matrix3r4."".(string)$matrix3r5."".(string)$matrix3r6;
$matrix = (string)$matrix3."".(string)$matrix2."".(string)$matrix1;

echo $matrix;

$key1 = random_int(10, 99);
$key2 = random_int(10, 99);
$key3 = random_int(10, 99);
$key4 = random_int(10, 99);
$key5 = random_int(10, 99);
$key6 = random_int(10, 99);
$key7 = random_int(10, 99);
$key8 = random_int(10, 99);
$key9 = random_int(10, 99);
$key10 = random_int(10, 99);
$key11 = random_int(10, 99);
$key12 = random_int(10, 99);
$key13 = random_int(10, 99);
$key14 = random_int(10, 99);
$key15 = random_int(10, 99);
$key16 = random_int(10, 99);
$key17 = random_int(10, 99);
$key18 = random_int(10, 99);

$counter = "0";


////////////////////////////////////////////////////////////////////

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'Encrypt') { 
        
        
        
    }
    elseif ($_POST['action'] == 'Decrypt') { 
        
        
        
        
        
    }
}


?>

<br>
<br>
<form id="submit" action="666.php" method="post">
<input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key1); ?>">
<input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key2); ?>">
<input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key3); ?>">
    <input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key4); ?>">
    <input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key5); ?>">
    <input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key6); ?>">
   <input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key7); ?>"> 
<input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key8); ?>" >
 <input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key9); ?>">   
    <input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key10); ?>">
    <input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key11);  ?>">
    <input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key12); ?>">
    <input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key13); ?>">
    <input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key14); ?>">
    <input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key15); ?>">
    <input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key16); ?>">
    <input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key17); ?>">
    <input type="text" id="email" name="user_email" value="<?php echo htmlspecialchars($key18); ?>">
    <br><br>
    
    <textarea id="comments" name="comments" rows="4" cols="50" placeholder="Enter Plaintext Data:"></textarea>
<br><br>    
        <textarea id="comments" name="comments" rows="4" cols="50" placeholder="Ciphertext Data:"></textarea>
    <br><br>
<button type="submit" name="action" value="Encrypt">Encrypt</button>
<button type="submit" name="action" value="Decrypt">Decrypt</button>

</form>