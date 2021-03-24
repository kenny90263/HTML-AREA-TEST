<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>表單寄送</title>
</head>

<body>

    <form action="" method="get">
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator">
            <option value="none">None</option>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <br>
        <button name="submit" value="submit">Calculate</button>
    </form>


    <p>The answer is:</p>

    <?php


    if (isset($_GET['submit'])) {

        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {

            case "none":
                echo "ERROR";
                break;
            case "add":
                echo $num1 + $num2;
                break;
            case "subtrace":
                echo $num1 - $num2;
                break;
            case "multiply":
                echo $num1 * $num2;
                break;
            case "divide":
                echo $num1 / $num2;
                break;
        }


        //
    }
    ?>





</body>

</html>