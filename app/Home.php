<html>
    <head>
    </head>

    <body>
        <table>
            <tr>
                <td>a:<td>
                <td> <input id="txtA" type="text"></td>
            </tr>
            <tr>
                <td>b:<td>
                <td><input id="txtB" type="text"></td>
            </tr>
            <tr>
                <td>c:<td>
                <td><input id="txtC" type="text"></td>
            </tr>
            <tr>
                <td><td>
                <td><button id="btnTinhToan" onclick="btnTinhToanClick()">Tính toán</button></td>
                <script>
                    function btnTinhToanClick(){
                        var a = document.getElementById("txtA").value;
                        var b = document.getElementById("txtB").value;

                        var c = Number(a) + Number(b);
                        document.getElementById("txtC").value = c;
                    }
                </script>
            </tr>
        </table>
    </body>

</html>