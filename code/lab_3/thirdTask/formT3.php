<body>
    <form action="task3.php" method="POST">
        <p><b>Enter your AD:</b></p>
        <p>Email: <input type="text" name="name" /></p>
        <p>Category: <select name="category">
                <option>Pc components</option>
                <option>Sneakers</option>
                <option>Pets</option>
                <option>Electronics</option>
            </select>
        </p>
        <p>title: <input type="text" name="title"></p>
        <p><b>Text of AD:</b></p>
        <p><textarea rows="10" cols="45" name="text"></textarea></p>
        <p><input type="submit" value="Add"></p>
    </form>
</body>

<?php
$PC = scandir("Category/PC");
$Sneakers = scandir("Category/Sneakers");
$Pets = scandir("Category/Pets");
$Estate = scandir("Category/Estate");

function outputArr($arr)
{
    foreach ($arr as $i) {
        if ($i > 1)
            echo $i . "<br>";
    }
}
echo "PC components for sale: ";
outputArr($PC);
echo "Sneakers for sale: ";
outputArr($Sneakers);
echo "Pets for sales: ";
outputArr($Pets);
echo "Estate for sales: ";
outputArr($Estate);

