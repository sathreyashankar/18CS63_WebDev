<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculator | PHP</title>
</head>
<body>
    <h1>Simple Calculator Using PHP</h1>
    <form action="p1.php" method="post">
        <table>
            <tr><td>Enter First Number:</td><td><input type="text" name="first" required autocomplete="off"/></td></tr>
            <tr><td>Enter Second Number:</td><td><input type="text" name="second" required autocomplete="off"/></td></tr>
            <tr><td>Select Operator:</td><td>
            <select name="op">
                <option>Select Operation</option>
                <option value="+">Addition</option>
                <option value="-">Subtraction</option>
                <option value="*">Multiplication</option>
                <option value="/">Division</option>
                <option value="%">Remainder</option>
            </select>
            </td></tr>
            <tr><td colspan="2"><input type="submit" name="pop" value="PerformOperation"/></td></tr>
        </table>
    </form>
    
</body>
</html>