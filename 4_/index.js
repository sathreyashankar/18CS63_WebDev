<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS041 | 4</title>
    <script type="text/javascript">
        var str = prompt("Enter the input : ");
        if (isNaN(str)) {
            str = str.toUpperCase();
            for (var i = 0; i < str.length; i++) {
                var chr = str.charAt(i);
                if (chr == 'A' || chr == 'E' || chr == 'I' || chr == 'O' || chr == 'U') {
                    break;
                }
            }
            if (i < str.length) {
                alert("The position of the left most vowel is: " + (i + 1));
            } else {
                alert("No vowel found in the entered string !");
            }
        } else {
            var num, rev = 0, remainder;
            num = parseInt(str);
            while (num != 0) {
                remainder = num % 10;
                num = parseInt(num / 10);
                rev = rev * 10 + remainder;
            }
            alert("The reverse of " + str + " is " + rev);
        }
    </script>
</head>

<body>
</body>

</html>